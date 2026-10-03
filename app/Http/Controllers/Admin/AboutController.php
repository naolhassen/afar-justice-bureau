<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Validation\Rule;

class AboutController extends ResourceController
{
    protected string $model = About::class;
    protected string $viewPrefix = 'admin.about';
    protected string $routeName = 'admin.about';
    protected string $label = 'About Entry';
    protected array $fileFields = ['image'];
    protected ?string $slugField = null;
    protected array $searchColumns = ['title', 'section'];

    protected function rules(?int $id = null): array
    {
        return array_merge(
            ['section' => ['required', 'string', 'max:255']],
            $this->translatableRules('title'),
            $this->translatableRules('content', 'string', false),
            [
                'image' => ['nullable', 'image', 'max:10240'],
                'status' => ['required', Rule::in(['draft', 'published'])],
            ]
        );
    }
}
