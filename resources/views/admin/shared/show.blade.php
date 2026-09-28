@extends('admin.layouts.app')

@section('title', $config['title'] . ' Details')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0" style="color: var(--dark);">
        <i class="fa-solid {{ $config['icon'] }} me-2" style="color: var(--purple);"></i>
        {{ $item->title ?? $item->key ?? $config['title'] }}
    </h4>
    <div>
        <a href="{{ route('admin.crud.index', $module) }}" class="btn btn-outline-purple me-2"><i class="fa-solid fa-arrow-left me-2"></i> Back</a>
        @if(in_array(auth()->user()->role, ['admin', 'editor']))
            <a href="{{ route('admin.crud.edit', [$module, $item->id]) }}" class="btn btn-purple"><i class="fa-solid fa-pen me-2"></i> Edit</a>
        @endif
    </div>
</div>

<div class="card p-4">
    <table class="table table-borderless">
        <tbody>
            @foreach($config['fields'] as $field)
                @php
                    $value = $item->{$field['name']};
                    $type = $field['type'] ?? 'text';
                @endphp
                <tr style="border-bottom: 1px solid #f2eef7;">
                    <th style="width: 180px; color: var(--dark);">{{ $field['label'] }}</th>
                    <td>
                        @if($type === 'file' && $value)
                            @if(Str::endsWith($value, ['.jpg', '.jpeg', '.png', '.gif', '.webp']))
                                <img src="{{ asset('storage/' . $value) }}" alt="" style="max-height: 200px; border-radius: 8px;">
                            @else
                                <a href="{{ $item->file_url ?? asset('storage/' . $value) }}" target="_blank" class="text-decoration-none" style="color: var(--purple);">
                                    <i class="fa-solid fa-download me-2"></i> Download
                                </a>
                            @endif
                        @elseif($field['name'] === 'status')
                            <span class="badge {{ $value === 'published' ? 'badge-published' : 'badge-draft' }} rounded-pill">{{ ucfirst($value) }}</span>
                        @elseif(is_string($value) && strlen($value) > 120)
                            <pre class="mb-0" style="white-space: pre-wrap; font-family: inherit;">{{ $value }}</pre>
                        @else
                            {{ $value ?: '-' }}
                        @endif
                    </td>
                </tr>
            @endforeach
            <tr>
                <th style="color: var(--dark);">Created</th>
                <td>{{ $item->created_at?->format('M d, Y H:i') }}</td>
            </tr>
            <tr>
                <th style="color: var(--dark);">Last Updated</th>
                <td>{{ $item->updated_at?->format('M d, Y H:i') }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
