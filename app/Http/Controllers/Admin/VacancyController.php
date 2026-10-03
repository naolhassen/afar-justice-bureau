<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vacancy;
use Illuminate\Validation\Rule;

class VacancyController extends ResourceController
{
    protected string $model = Vacancy::class;
    protected string $viewPrefix = 'admin.vacancies';
    protected string $routeName = 'admin.vacancies';
    protected string $label = 'Vacancy';
    protected array $searchColumns = ['title', 'location'];

    protected function rules(?int $id = null): array
    {
        return array_merge(
            $this->translatableRules('title'),
            $this->translatableRules('description', 'string', false),
            $this->translatableRules('requirements', 'string', false),
            $this->translatableRules('location', 'string', false),
            [
                'slug' => $this->slugRule('vacancies', $id),
                'status' => ['required', Rule::in(['draft', 'published'])],
                'deadline' => ['nullable', 'date'],
            ]
        );
    }
}
