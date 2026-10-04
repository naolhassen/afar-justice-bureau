<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Validation\Rule;

class GalleryController extends ResourceController
{
    protected string $model = Gallery::class;
    protected string $viewPrefix = 'admin.galleries';
    protected string $routeName = 'admin.galleries';
    protected string $label = 'Gallery Image';
    protected array $fileFields = ['image'];

    protected function rules(?int $id = null): array
    {
        return array_merge(
            $this->translatableRules('title', 'string', false),
            [
                'slug' => $this->slugRule('galleries', $id),
                'image' => $id ? ['nullable', 'image', 'max:10240'] : ['required', 'image', 'max:10240'],
                'order' => ['nullable', 'integer', 'min:0'],
                'status' => ['required', Rule::in(['draft', 'published'])],
                'published_at' => ['nullable', 'date'],
            ]
        );
    }
}
