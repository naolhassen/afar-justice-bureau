<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Validation\Rule;

class SettingController extends ResourceController
{
    protected string $model = Setting::class;
    protected string $viewPrefix = 'admin.settings';
    protected string $routeName = 'admin.settings';
    protected string $label = 'Setting';
    protected bool $supportsStatus = false;
    protected ?string $slugField = null;
    protected string $titleField = 'key';
    protected array $searchColumns = ['key', 'value', 'group'];

    protected function rules(?int $id = null): array
    {
        return [
            'key' => ['required', 'string', 'max:255', Rule::unique('settings', 'key')->ignore($id)],
            'value' => ['nullable', 'string'],
            'type' => ['required', Rule::in(['string', 'text', 'boolean', 'number', 'image'])],
            'group' => ['required', 'string', 'max:255'],
        ];
    }
}
