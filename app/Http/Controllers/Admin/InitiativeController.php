<?php

namespace App\Http\Controllers\Admin;

use App\Models\Initiative;
use Illuminate\Validation\Rule;

class InitiativeController extends ResourceController
{
    protected string $model = Initiative::class;
    protected string $viewPrefix = 'admin.initiatives';
    protected string $routeName = 'admin.initiatives';
    protected string $label = 'Initiative';
    protected array $fileFields = ['image'];

    protected function rules(?int $id = null): array
    {
        return array_merge(
            $this->translatableRules('title'),
            $this->translatableRules('excerpt', 'string', false),
            $this->translatableRules('body', 'string', false),
            [
                'slug' => $this->slugRule('initiatives', $id),
                'image' => ['nullable', 'image', 'max:10240'],
                'status' => ['required', Rule::in(['draft', 'published'])],
                'published_at' => ['nullable', 'date'],
            ]
        );
    }
}
