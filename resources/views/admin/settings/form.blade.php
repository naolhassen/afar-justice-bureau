@extends('admin.layouts.app')

@section('title', isset($item) ? 'Edit Setting' : 'New Setting')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <h4 class="fw-bold mb-0" style="color: var(--afar-deep);">
        <i class="fa-solid fa-gear me-2" style="color: var(--afar-accent);"></i>
        {{ isset($item) ? 'Edit Setting' : 'Create Setting' }}
    </h4>
    <div class="d-flex align-items-center gap-3">
        <a href="{{ route('admin.settings.index') }}" class="btn btn-ghost"><i class="fa-solid fa-arrow-left me-2"></i> Back</a>
    </div>
</div>

<div class="card p-4">
    <form method="POST" action="{{ isset($item) ? route('admin.settings.update', $item->id) : route('admin.settings.store') }}" enctype="multipart/form-data">
        @csrf
        @isset($item)
            @method('PUT')
        @endisset

            <div class="mb-4">
                <label class="form-label fw-semibold">Key</label>
                    <input type="text" name="key" class="form-control" value="{{ old('key', $item?->key ?? '') }}" required>
                    @error('key')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold">Value</label>
                    <textarea name="value" class="form-control" rows="3">{{ old('value', $item?->value ?? '') }}</textarea>
                    @error('value')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold">Type</label>
                    <select name="type" class="form-select">
                        <option value="string" {{ old('type', $item?->type ?? '') == 'string' ? 'selected' : '' }}>String</option>
                        <option value="text" {{ old('type', $item?->type ?? '') == 'text' ? 'selected' : '' }}>Text</option>
                        <option value="boolean" {{ old('type', $item?->type ?? '') == 'boolean' ? 'selected' : '' }}>Boolean</option>
                        <option value="number" {{ old('type', $item?->type ?? '') == 'number' ? 'selected' : '' }}>Number</option>
                        <option value="image" {{ old('type', $item?->type ?? '') == 'image' ? 'selected' : '' }}>Image</option>
                    </select>
                    @error('type')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold">Group</label>
                    <input type="text" name="group" class="form-control" value="{{ old('group', $item?->group ?? '') }}" required>
                    <div class="form-text">e.g. general, contact, social</div>
                    @error('group')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

        <div class="d-flex justify-content-end gap-2 mt-4">
            <a href="{{ route('admin.settings.index') }}" class="btn btn-ghost">Cancel</a>
            <button type="submit" class="btn btn-afar">
                <i class="fa-solid fa-floppy-disk me-2"></i> Save
            </button>
        </div>
    </form>
</div>
@endsection
