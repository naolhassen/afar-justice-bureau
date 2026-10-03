<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Validation\Rule;

class ServiceController extends ResourceController
{
    protected string $model = Service::class;
    protected string $viewPrefix = 'admin.services';
    protected string $routeName = 'admin.services';
    protected string $label = 'Service';
    protected array $fileFields = ['image'];

    protected function rules(?int $id = null): array
    {
        return array_merge(
            $this->translatableRules('title'),
            $this->translatableRules('description', 'string', false),
            [
                'slug' => $this->slugRule('services', $id),
                'icon' => ['nullable', 'string', 'max:255'],
                'image' => ['nullable', 'image', 'max:10240'],
                'status' => ['required', Rule::in(['draft', 'published'])],
            ]
        );
    }
}
