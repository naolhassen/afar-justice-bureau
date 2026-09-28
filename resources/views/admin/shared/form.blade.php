@extends('admin.layouts.app')

@section('title', isset($item) ? 'Edit ' . $config['title'] : 'New ' . $config['title'])

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0" style="color: var(--dark);">
        <i class="fa-solid {{ $config['icon'] }} me-2" style="color: var(--purple);"></i>
        {{ isset($item) ? 'Edit ' . $config['title'] : 'Create ' . $config['title'] }}
    </h4>
    <a href="{{ route('admin.crud.index', $module) }}" class="btn btn-outline-purple"><i class="fa-solid fa-arrow-left me-2"></i> Back</a>
</div>

<div class="card p-4">
    <form method="POST" action="{{ isset($item) ? route('admin.crud.update', [$module, $item->id]) : route('admin.crud.store', $module) }}" enctype="multipart/form-data">
        @csrf
        @isset($item)
            @method('PUT')
        @endisset

        @foreach($config['fields'] as $field)
            @php
                $old = old($field['name'], $item?->{$field['name']} ?? '');
                $type = $field['type'] ?? 'text';
            @endphp
            <div class="mb-3">
                <label class="form-label fw-semibold" style="color: var(--dark);">{{ $field['label'] }}</label>

                @if($type === 'textarea')
                    <textarea name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-control" rows="5" {{ ($field['required'] ?? true) ? 'required' : '' }}>{{ $old }}</textarea>
                @elseif($type === 'select')
                    <select name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-select" {{ ($field['required'] ?? true) ? 'required' : '' }}>
                        @foreach($field['options'] ?? [] as $value => $label)
                            <option value="{{ $value }}" {{ $old == $value ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                @elseif($type === 'file')
                    <input type="file" name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-control">
                    @if($item && $item->{$field['name']})
                        <div class="mt-2">
                            @if(
                                Str::endsWith($item->{$field['name']}, ['.jpg', '.jpeg', '.png', '.gif', '.webp'])
                            )
                                <img src="{{ asset('storage/' . $item->{$field['name']}) }}" alt="" style="max-height: 120px; border-radius: 8px;">
                            @else
                                <a href="{{ asset('storage/' . $item->{$field['name']}) }}" target="_blank" class="text-decoration-none" style="color: var(--purple);">
                                    <i class="fa-solid fa-link me-1"></i> View current file
                                </a>
                            @endif
                        </div>
                    @endif
                @elseif($type === 'datetime-local')
                    <input type="datetime-local" name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-control" value="{{ $old ? \Illuminate\Support\Carbon::parse($old)->format('Y-m-d\TH:i') : '' }}">
                @elseif($type === 'date')
                    <input type="date" name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-control" value="{{ $old ? \Illuminate\Support\Carbon::parse($old)->format('Y-m-d') : '' }}">
                @else
                    <input type="{{ $type }}" name="{{ $field['name'] }}" id="{{ $field['name'] }}" class="form-control" value="{{ $old }}" {{ ($field['required'] ?? true) ? 'required' : '' }}>
                @endif

                @error($field['name'])
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
        @endforeach

        <div class="d-flex justify-content-end gap-2 mt-4">
            <a href="{{ route('admin.crud.index', $module) }}" class="btn btn-outline-purple">Cancel</a>
            <button type="submit" class="btn btn-purple">
                <i class="fa-solid fa-floppy-disk me-2"></i> Save
            </button>
        </div>
    </form>
</div>
@endsection
