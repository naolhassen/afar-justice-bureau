<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\ActivityLog;
use App\Models\Announcement;
use App\Models\Document;
use App\Models\News;
use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CrudController extends Controller
{
    public function index(Request $request, $module)
    {
        $config = $this->moduleConfig($module);
        $query = $config['model']::query();

        if ($request->filled('q')) {
            $q = $request->get('q');
            $query->where(function ($builder) use ($q, $config) {
                $searchFields = $config['search'] ?? ['title'];
                foreach ($searchFields as $field) {
                    $builder->orWhere($field, 'like', '%' . $q . '%');
                }
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->get('status'));
        }

        $items = $query->latest('updated_at')->paginate(15)->withQueryString();

        return view('admin.shared.index', compact('module', 'config', 'items'));
    }

    public function create($module)
    {
        $config = $this->moduleConfig($module);
        return view('admin.shared.form', compact('module', 'config'));
    }

    public function store(Request $request, $module)
    {
        $this->authorizeAction($module, 'create');
        $config = $this->moduleConfig($module);
        $rules = $this->validationRules($module);

        $validated = $request->validate($rules);
        $data = $this->normalizeData($validated, $config);
        $data = $this->handleFiles($request, $module, $data);
        $data['author_id'] = Auth::id();

        $model = $config['model']::create($data);

        if ($model instanceof Document) {
            $this->syncDocumentMeta($model);
        }

        $this->log('created', $module, $model);

        return redirect()->route('admin.crud.index', $module)
            ->with('success', $config['title'] . ' created successfully.');
    }

    public function show($module, $id)
    {
        $config = $this->moduleConfig($module);
        $item = $config['model']::findOrFail($id);
        return view('admin.shared.show', compact('module', 'config', 'item'));
    }

    public function edit($module, $id)
    {
        $config = $this->moduleConfig($module);
        $item = $config['model']::findOrFail($id);
        return view('admin.shared.form', compact('module', 'config', 'item'));
    }

    public function update(Request $request, $module, $id)
    {
        $this->authorizeAction($module, 'update');
        $config = $this->moduleConfig($module);
        $item = $config['model']::findOrFail($id);

        $rules = $this->validationRules($module, $item);
        $validated = $request->validate($rules);
        $data = $this->normalizeData($validated, $config);
        $data = $this->handleFiles($request, $module, $data, $item);

        $item->update($data);

        if ($item instanceof Document) {
            $this->syncDocumentMeta($item);
        }

        $this->log('updated', $module, $item);

        return redirect()->route('admin.crud.index', $module)
            ->with('success', $config['title'] . ' updated successfully.');
    }

    public function destroy($module, $id)
    {
        $this->authorizeAction($module, 'delete');
        $config = $this->moduleConfig($module);
        $item = $config['model']::findOrFail($id);

        $item->delete();
        $this->log('deleted', $module, $item);

        return redirect()->route('admin.crud.index', $module)
            ->with('success', $config['title'] . ' deleted successfully.');
    }

    private function moduleConfig($module)
    {
        $modules = $this->modules();
        if (!isset($modules[$module])) {
            abort(404);
        }
        return $modules[$module];
    }

    private function tableName($module)
    {
        return Str::plural($module);
    }

    private function authorizeAction($module, $action)
    {
        $role = Auth::user()->role ?? 'viewer';

        if ($action === 'delete' && $role !== 'admin') {
            abort(403);
        }

        if (in_array($action, ['create', 'update'], true) && !in_array($role, ['admin', 'editor'], true)) {
            abort(403);
        }
    }

    private function validationRules($module, $item = null)
    {
        $config = $this->moduleConfig($module);
        $table = $this->tableName($module);
        $rules = [];

        foreach ($config['fields'] as $field) {
            $name = $field['name'];
            $type = $field['type'] ?? 'text';
            $fieldRules = [];

            if ($type === 'file') {
                $fieldRules[] = 'nullable';
                $fieldRules[] = 'file';
                $fieldRules[] = 'max:10240';
            } elseif ($type === 'datetime-local') {
                $fieldRules[] = 'nullable';
                $fieldRules[] = 'date';
            } elseif ($type === 'date') {
                $fieldRules[] = 'nullable';
                $fieldRules[] = 'date';
            } elseif ($type === 'select') {
                $options = implode(',', array_keys($field['options'] ?? []));
                $fieldRules[] = $field['required'] ?? true ? 'required' : 'nullable';
                $fieldRules[] = 'in:' . $options;
            } else {
                $required = $field['required'] ?? true;
                $fieldRules[] = $required ? 'required' : 'nullable';
                $fieldRules[] = 'string';
                $fieldRules[] = 'max:5000';
            }

            if ($field['unique'] ?? false) {
                $rule = Rule::unique($table, $name)->ignore($item?->id);
                $fieldRules[] = $rule;
            }

            $rules[$name] = $fieldRules;
        }

        return $rules;
    }

    private function normalizeData(array $data, array $config)
    {
        foreach ($config['fields'] as $field) {
            $name = $field['name'];

            if (($field['type'] ?? 'text') !== 'file') {
                if (!isset($data[$name])) {
                    $data[$name] = null;
                }
            }
        }

        if (empty($data['slug']) && !empty($data['title'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        return $data;
    }

    private function handleFiles(Request $request, $module, array $data, $item = null)
    {
        $config = $this->moduleConfig($module);
        $disk = env('CMS_DISK', 'public');

        foreach ($config['fields'] as $field) {
            if (($field['type'] ?? 'text') !== 'file') {
                continue;
            }

            $name = $field['name'];

            if (!$request->hasFile($name)) {
                if ($item && !isset($data[$name])) {
                    $data[$name] = $item->{$name};
                }
                continue;
            }

            $file = $request->file($name);
            $path = $field['path'] ?? 'uploads';
            $stored = $file->store($path . '/' . $module, $disk);

            if ($item && $item->{$name} && Storage::disk($disk)->exists($item->{$name})) {
                Storage::disk($disk)->delete($item->{$name});
            }

            $data[$name] = $stored;
        }

        return $data;
    }

    private function syncDocumentMeta(Document $document)
    {
        if ($document->file_path) {
            $disk = $document->disk ?: env('CMS_DISK', 'public');
            $document->file_url = Storage::disk($disk)->url($document->file_path);
            $document->file_size = $this->formatSize(Storage::disk($disk)->size($document->file_path));
            $document->disk = $disk;
            $document->save();
        }
    }

    private function formatSize($size)
    {
        $units = ['B', 'KB', 'MB', 'GB'];
        $i = 0;
        while ($size >= 1024 && $i < count($units) - 1) {
            $size /= 1024;
            $i++;
        }
        return round($size, 2) . ' ' . $units[$i];
    }

    private function log($action, $module, $model)
    {
        ActivityLog::create([
            'user_id' => Auth::id(),
            'action' => $action,
            'entity_type' => $module,
            'entity_id' => $model->id,
            'description' => ucfirst($action) . ' ' . $this->moduleConfig($module)['title'] . ' #' . $model->id,
        ]);
    }

    private function modules(): array
    {
        return [
            'news' => [
                'model' => News::class,
                'title' => 'News',
                'icon' => 'fa-newspaper',
                'search' => ['title', 'excerpt', 'body'],
                'columns' => ['title', 'status', 'updated_at'],
                'fields' => [
                    ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
                    ['name' => 'slug', 'label' => 'Slug', 'type' => 'text', 'required' => false, 'unique' => true],
                    ['name' => 'excerpt', 'label' => 'Excerpt', 'type' => 'textarea', 'required' => false],
                    ['name' => 'body', 'label' => 'Body', 'type' => 'textarea', 'required' => false],
                    ['name' => 'image', 'label' => 'Image', 'type' => 'file', 'path' => 'images'],
                    ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'options' => ['draft' => 'Draft', 'published' => 'Published']],
                    ['name' => 'published_at', 'label' => 'Published At', 'type' => 'datetime-local', 'required' => false],
                ],
            ],
            'announcement' => [
                'model' => Announcement::class,
                'title' => 'Announcements',
                'icon' => 'fa-bullhorn',
                'search' => ['title', 'excerpt', 'body'],
                'columns' => ['title', 'status', 'updated_at'],
                'fields' => [
                    ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
                    ['name' => 'slug', 'label' => 'Slug', 'type' => 'text', 'required' => false, 'unique' => true],
                    ['name' => 'excerpt', 'label' => 'Excerpt', 'type' => 'textarea', 'required' => false],
                    ['name' => 'body', 'label' => 'Body', 'type' => 'textarea', 'required' => false],
                    ['name' => 'image', 'label' => 'Image', 'type' => 'file', 'path' => 'images'],
                    ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'options' => ['draft' => 'Draft', 'published' => 'Published']],
                    ['name' => 'published_at', 'label' => 'Published At', 'type' => 'datetime-local', 'required' => false],
                ],
            ],
            'vacancy' => [
                'model' => Vacancy::class,
                'title' => 'Vacancies',
                'icon' => 'fa-briefcase',
                'search' => ['title', 'description', 'requirements', 'location'],
                'columns' => ['title', 'status', 'deadline', 'updated_at'],
                'fields' => [
                    ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
                    ['name' => 'slug', 'label' => 'Slug', 'type' => 'text', 'required' => false, 'unique' => true],
                    ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'required' => false],
                    ['name' => 'requirements', 'label' => 'Requirements', 'type' => 'textarea', 'required' => false],
                    ['name' => 'location', 'label' => 'Location', 'type' => 'text', 'required' => false],
                    ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'options' => ['draft' => 'Draft', 'published' => 'Published']],
                    ['name' => 'deadline', 'label' => 'Deadline', 'type' => 'date', 'required' => false],
                ],
            ],
            'document' => [
                'model' => Document::class,
                'title' => 'Documents',
                'icon' => 'fa-file-pdf',
                'search' => ['title', 'description'],
                'columns' => ['title', 'status', 'updated_at'],
                'fields' => [
                    ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
                    ['name' => 'slug', 'label' => 'Slug', 'type' => 'text', 'required' => false, 'unique' => true],
                    ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'required' => false],
                    ['name' => 'file_path', 'label' => 'File', 'type' => 'file', 'path' => 'documents'],
                    ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'options' => ['draft' => 'Draft', 'published' => 'Published']],
                ],
            ],
            'page' => [
                'model' => Page::class,
                'title' => 'Pages',
                'icon' => 'fa-file-lines',
                'search' => ['title', 'body', 'meta_title'],
                'columns' => ['title', 'status', 'updated_at'],
                'fields' => [
                    ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
                    ['name' => 'slug', 'label' => 'Slug', 'type' => 'text', 'required' => false, 'unique' => true],
                    ['name' => 'body', 'label' => 'Body', 'type' => 'textarea', 'required' => false],
                    ['name' => 'meta_title', 'label' => 'Meta Title', 'type' => 'text', 'required' => false],
                    ['name' => 'meta_description', 'label' => 'Meta Description', 'type' => 'textarea', 'required' => false],
                    ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'options' => ['draft' => 'Draft', 'published' => 'Published']],
                ],
            ],
            'service' => [
                'model' => Service::class,
                'title' => 'Services',
                'icon' => 'fa-hand-holding-heart',
                'search' => ['title', 'description'],
                'columns' => ['title', 'status', 'updated_at'],
                'fields' => [
                    ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
                    ['name' => 'slug', 'label' => 'Slug', 'type' => 'text', 'required' => false, 'unique' => true],
                    ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'required' => false],
                    ['name' => 'icon', 'label' => 'Icon', 'type' => 'text', 'required' => false],
                    ['name' => 'image', 'label' => 'Image', 'type' => 'file', 'path' => 'images'],
                    ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'options' => ['draft' => 'Draft', 'published' => 'Published']],
                ],
            ],
            'about' => [
                'model' => About::class,
                'title' => 'About',
                'icon' => 'fa-building-columns',
                'search' => ['section', 'title', 'content'],
                'columns' => ['section', 'title', 'status', 'updated_at'],
                'fields' => [
                    ['name' => 'section', 'label' => 'Section', 'type' => 'text', 'required' => true],
                    ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'required' => true],
                    ['name' => 'content', 'label' => 'Content', 'type' => 'textarea', 'required' => false],
                    ['name' => 'image', 'label' => 'Image', 'type' => 'file', 'path' => 'images'],
                    ['name' => 'status', 'label' => 'Status', 'type' => 'select', 'options' => ['draft' => 'Draft', 'published' => 'Published']],
                ],
            ],
            'setting' => [
                'model' => Setting::class,
                'title' => 'Settings',
                'icon' => 'fa-gear',
                'search' => ['key', 'value', 'group'],
                'columns' => ['key', 'value', 'group', 'updated_at'],
                'fields' => [
                    ['name' => 'key', 'label' => 'Key', 'type' => 'text', 'required' => true, 'unique' => true],
                    ['name' => 'value', 'label' => 'Value', 'type' => 'textarea', 'required' => false],
                    ['name' => 'type', 'label' => 'Type', 'type' => 'select', 'options' => ['string' => 'String', 'text' => 'Text', 'file' => 'File']],
                    ['name' => 'group', 'label' => 'Group', 'type' => 'text', 'required' => false],
                ],
            ],
        ];
    }
}
