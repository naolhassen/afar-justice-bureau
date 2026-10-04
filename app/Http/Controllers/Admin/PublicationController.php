<?php

namespace App\Http\Controllers\Admin;

use App\Models\Publication;
use Illuminate\Validation\Rule;

class PublicationController extends ResourceController
{
    protected string $model = Publication::class;
    protected string $viewPrefix = 'admin.publications';
    protected string $routeName = 'admin.publications';
    protected string $label = 'Article';
    protected array $fileFields = ['image', 'file_path'];

    protected function rules(?int $id = null): array
    {
        return array_merge(
            $this->translatableRules('title'),
            $this->translatableRules('excerpt', 'string', false),
            $this->translatableRules('body', 'string', false),
            [
                'slug' => $this->slugRule('publications', $id),
                'image' => ['nullable', 'image', 'max:10240'],
                'file_path' => ['nullable', 'file', 'max:51200'],
                'status' => ['required', Rule::in(['draft', 'published'])],
                'published_at' => ['nullable', 'date'],
            ]
        );
    }
}
