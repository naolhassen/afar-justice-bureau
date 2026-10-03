<?php

namespace App\Http\Controllers\Admin;

use App\Models\Document;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class DocumentController extends ResourceController
{
    protected string $model = Document::class;
    protected string $viewPrefix = 'admin.documents';
    protected string $routeName = 'admin.documents';
    protected string $label = 'Document';
    protected array $fileFields = ['file_path'];
    protected array $exactFilters = ['category'];

    protected function rules(?int $id = null): array
    {
        return array_merge(
            $this->translatableRules('title'),
            $this->translatableRules('description', 'string', false),
            [
                'slug' => $this->slugRule('documents', $id),
                'category' => ['required', Rule::in(['general', 'proclamation', 'regulation', 'directive', 'guideline', 'manual', 'report'])],
                'file_path' => ['nullable', 'file', 'max:51200'],
                'status' => ['required', Rule::in(['draft', 'published'])],
            ]
        );
    }

    protected function afterFileSync(array &$data, ?object $item): void
    {
        if (isset($data['file_path'])) {
            $data['file_url'] = Storage::url($data['file_path']);
            $size = Storage::disk('public')->size($data['file_path']);
            $data['file_size'] = $this->humanSize($size);
        }
    }

    private function humanSize(int $bytes): string
    {
        foreach (['B', 'KB', 'MB', 'GB'] as $unit) {
            if ($bytes < 1024 || $unit === 'GB') {
                return round($bytes, $unit === 'B' ? 0 : 1) . ' ' . $unit;
            }
            $bytes /= 1024;
        }
        return $bytes . ' B';
    }
}
