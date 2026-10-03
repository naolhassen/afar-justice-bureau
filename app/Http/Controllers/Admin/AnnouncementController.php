<?php

namespace App\Http\Controllers\Admin;

use App\Models\Announcement;
use Illuminate\Validation\Rule;

class AnnouncementController extends ResourceController
{
    protected string $model = Announcement::class;
    protected string $viewPrefix = 'admin.announcements';
    protected string $routeName = 'admin.announcements';
    protected string $label = 'Announcement';
    protected array $fileFields = ['image'];

    protected function rules(?int $id = null): array
    {
        return array_merge(
            $this->translatableRules('title'),
            $this->translatableRules('excerpt', 'string', false),
            $this->translatableRules('body', 'string', false),
            [
                'slug' => $this->slugRule('announcements', $id),
                'image' => ['nullable', 'image', 'max:10240'],
                'status' => ['required', Rule::in(['draft', 'published'])],
                'published_at' => ['nullable', 'date'],
            ]
        );
    }
}
