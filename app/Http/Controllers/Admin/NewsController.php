<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class NewsController extends ResourceController
{
    protected string $model = News::class;
    protected string $viewPrefix = 'admin.news';
    protected string $routeName = 'admin.news';
    protected string $label = 'News';
    protected array $fileFields = ['image'];

    protected function rules(?int $id = null): array
    {
        return array_merge(
            $this->translatableRules('title'),
            $this->translatableRules('excerpt', 'string', false),
            $this->translatableRules('body', 'string', false),
            [
                'slug' => $this->slugRule('news', $id),
                'image' => ['nullable', 'image', 'max:10240'],
                'images' => ['nullable', 'array'],
                'images.*' => ['image', 'max:10240'],
                'status' => ['required', Rule::in(['draft', 'published'])],
                'published_at' => ['nullable', 'date'],
            ]
        );
    }

    protected function handleFileUploads(Request $request, array &$data, array $fileFields, ?object $item = null): void
    {
        // Featured / cover image
        if ($request->hasFile('image')) {
            if ($item && $item->image) {
                Storage::disk('public')->delete($item->image);
            }
            $data['image'] = $request->file('image')->store('uploads', 'public');
        } elseif ($item) {
            unset($data['image']);
        }

        // Additional images
        $existing = $item ? ($item->images ?? []) : [];
        $uploaded = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $uploaded[] = $file->store('uploads', 'public');
            }
        }
        $data['images'] = array_values(array_filter(array_merge($existing, $uploaded)));
    }

    protected function deleteFiles(object $item): void
    {
        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }
        foreach ($item->images ?? [] as $path) {
            if ($path) {
                Storage::disk('public')->delete($path);
            }
        }
    }
}
