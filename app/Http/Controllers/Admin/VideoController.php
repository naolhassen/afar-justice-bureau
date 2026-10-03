<?php

namespace App\Http\Controllers\Admin;

use App\Models\Video;
use Illuminate\Validation\Rule;

class VideoController extends ResourceController
{
    protected string $model = Video::class;
    protected string $viewPrefix = 'admin.videos';
    protected string $routeName = 'admin.videos';
    protected string $label = 'Video';
    protected array $fileFields = ['thumbnail'];

    protected function rules(?int $id = null): array
    {
        return array_merge(
            $this->translatableRules('title'),
            $this->translatableRules('description', 'string', false),
            [
                'slug' => $this->slugRule('videos', $id),
                'video_url' => ['nullable', 'url', 'max:500'],
                'thumbnail' => ['nullable', 'image', 'max:10240'],
                'status' => ['required', Rule::in(['draft', 'published'])],
                'published_at' => ['nullable', 'date'],
            ]
        );
    }
}
