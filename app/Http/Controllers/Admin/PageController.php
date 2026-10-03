<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Validation\Rule;

class PageController extends ResourceController
{
    protected string $model = Page::class;
    protected string $viewPrefix = 'admin.pages';
    protected string $routeName = 'admin.pages';
    protected string $label = 'Page';
    protected array $searchColumns = ['title', 'slug'];

    protected function rules(?int $id = null): array
    {
        return array_merge(
            $this->translatableRules('title'),
            $this->translatableRules('body', 'string', false),
            $this->translatableRules('meta_title', 'string', false),
            $this->translatableRules('meta_description', 'string', false),
            [
                'slug' => $this->slugRule('pages', $id),
                'status' => ['required', Rule::in(['draft', 'published'])],
            ]
        );
    }
}
