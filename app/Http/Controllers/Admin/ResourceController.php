<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesUploads;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

abstract class ResourceController extends Controller
{
    use HandlesUploads;

    protected string $model;
    protected string $viewPrefix;
    protected string $routeName;
    protected string $label;
    protected array $fileFields = [];
    protected array $searchColumns = ['title'];
    protected array $exactFilters = [];
    protected bool $supportsStatus = true;
    protected ?string $slugField = 'slug';
    protected string $titleField = 'title';

    abstract protected function rules(?int $id = null): array;

    public function index(Request $request)
    {
        $items = $this->model::query()
            ->when($request->filled('q'), function ($q) use ($request) {
                $q->where(function ($w) use ($request) {
                    foreach ($this->searchColumns as $col) {
                        $w->orWhere($col, 'like', '%' . $request->q . '%');
                    }
                });
            })
            ->when($this->supportsStatus && $request->filled('status'), fn ($q) => $q->where('status', $request->status))
            ->when($this->exactFilters, function ($q) use ($request) {
                foreach ($this->exactFilters as $col) {
                    $q->when($request->filled($col), fn ($w) => $w->where($col, $request->$col));
                }
            })
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view($this->viewPrefix . '.index', [
            'items' => $items,
            'label' => $this->label,
            'routeName' => $this->routeName,
            'supportsStatus' => $this->supportsStatus,
            'titleField' => $this->titleField,
        ]);
    }

    public function create()
    {
        return view($this->viewPrefix . '.form', ['item' => null, 'routeName' => $this->routeName, 'label' => $this->label]);
    }

    public function store(Request $request)
    {
        $data = $request->validate($this->rules());
        $this->prepareData($data);
        $this->handleFileUploads($request, $data, $this->fileFields);
        $this->afterFileSync($data, null);

        $item = $this->model::create($data);
        $this->logActivity('created', $this->label, $item);

        return redirect()->route($this->routeName . '.index')->with('success', $this->label . ' created.');
    }

    public function show($id)
    {
        $item = $this->model::findOrFail($id);

        return view($this->viewPrefix . '.show', ['item' => $item, 'routeName' => $this->routeName, 'label' => $this->label]);
    }

    public function edit($id)
    {
        $item = $this->model::findOrFail($id);

        return view($this->viewPrefix . '.form', ['item' => $item, 'routeName' => $this->routeName, 'label' => $this->label]);
    }

    public function update(Request $request, $id)
    {
        $item = $this->model::findOrFail($id);
        $data = $request->validate($this->rules($item->id));
        $this->prepareData($data);
        $this->handleFileUploads($request, $data, $this->fileFields, $item);
        $this->afterFileSync($data, $item);

        $item->update($data);
        $this->logActivity('updated', $this->label, $item);

        return redirect()->route($this->routeName . '.index')->with('success', $this->label . ' updated.');
    }

    public function destroy($id)
    {
        $item = $this->model::findOrFail($id);
        $this->deleteFiles($item);
        $item->delete();
        $this->logActivity('deleted', $this->label, $item);

        return redirect()->route($this->routeName . '.index')->with('success', $this->label . ' deleted.');
    }

    public function toggle($id)
    {
        abort_unless($this->supportsStatus, 404);
        $item = $this->model::findOrFail($id);
        $item->status = $item->status === 'published' ? 'draft' : 'published';
        if ($item->status === 'published' && empty($item->published_at)) {
            $item->published_at = now();
        }
        $item->save();
        $this->logActivity('updated', $this->label, $item);

        return back()->with('success', $this->label . ' ' . $item->status . '.');
    }

    public function bulk(Request $request)
    {
        $request->validate([
            'ids' => 'required|array|min:1',
            'ids.*' => 'integer',
            'action' => ['required', Rule::in(['publish', 'draft', 'delete'])],
        ]);

        abort_unless($this->supportsStatus || $request->action === 'delete', 404);
        if ($request->action === 'delete') {
            abort_unless(auth()->user()->role === 'admin', 403);
        }

        $items = $this->model::whereIn('id', $request->ids)->get();
        foreach ($items as $item) {
            if ($request->action === 'delete') {
                $this->deleteFiles($item);
                $item->delete();
                $this->logActivity('deleted', $this->label, $item);
            } else {
                $item->status = $request->action === 'publish' ? 'published' : 'draft';
                if ($item->status === 'published' && empty($item->published_at)) {
                    $item->published_at = now();
                }
                $item->save();
            }
        }

        return back()->with('success', count($items) . ' ' . Str::plural(strtolower($this->label), count($items)) . ' updated.');
    }

    protected function translatableRules(string $field, string $type = 'string', bool $required = true): array
    {
        return [
            $field => [$required ? 'required' : 'nullable', 'array'],
            "$field.en" => [$required ? 'required' : 'nullable', $type],
            "$field.am" => ['nullable', $type],
            "$field.aa" => ['nullable', $type],
        ];
    }

    protected function slugRule(string $table, ?int $id = null): array
    {
        return ['nullable', 'string', 'max:255', Rule::unique($table, 'slug')->ignore($id)];
    }

    protected function prepareData(array &$data): void
    {
        if ($this->slugField && isset($data[$this->slugField]) !== true) {
            $data[$this->slugField] = null;
        }
        if ($this->slugField && empty($data[$this->slugField])) {
            $title = $data[$this->titleField]['en'] ?? (is_string($data[$this->titleField] ?? null) ? $data[$this->titleField] : '');
            $data[$this->slugField] = Str::slug($title) ?: Str::random(10);
        }
        if (method_exists($this->model, 'getFillable') && in_array('author_id', (new $this->model)->getFillable(), true)) {
            $data['author_id'] = Auth::id();
        }
    }

    protected function afterFileSync(array &$data, ?object $item): void
    {
    }

    protected function deleteFiles(object $item): void
    {
        foreach ($this->fileFields as $field) {
            if ($item->{$field}) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($item->{$field});
            }
        }
    }
}
