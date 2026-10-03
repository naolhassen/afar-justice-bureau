<?php

namespace App\Http\Controllers\Admin\Concerns;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait HandlesUploads
{
    protected function handleFileUploads(Request $request, array &$data, array $fileFields, ?object $item = null): void
    {
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                if ($item && $item->{$field}) {
                    Storage::disk('public')->delete($item->{$field});
                }
                $data[$field] = $request->file($field)->store('uploads', 'public');
            } elseif ($item) {
                unset($data[$field]);
            }
        }
    }

    protected function logActivity(string $action, string $module, object $item): void
    {
        $title = $item->trans('title', 'en') ?: ($item->title ?? $item->name ?? $item->key ?? "ID {$item->id}");

        ActivityLog::create([
            'user_id' => auth()->id(),
            'action' => $action,
            'entity_type' => $module,
            'entity_id' => $item->id,
            'description' => ucfirst($action) . " {$module}: {$title}",
        ]);
    }
}
