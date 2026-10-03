<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
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
                'status' => ['required', Rule::in(['draft', 'published'])],
                'published_at' => ['nullable', 'date'],
            ]
        );
    }
}
