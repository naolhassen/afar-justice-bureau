@extends('admin.layouts.app')

@section('title', 'Setting')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <h4 class="fw-bold mb-0" style="color: var(--afar-deep);"><i class="fa-solid fa-gear me-2" style="color: var(--afar-accent);"></i>Setting</h4>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.settings.index') }}" class="btn btn-ghost"><i class="fa-solid fa-arrow-left me-2"></i> Back</a>
        @if(in_array(auth()->user()->role, ['admin', 'editor']))
            <a href="{{ route('admin.settings.edit', $item->id) }}" class="btn btn-afar"><i class="fa-solid fa-pen me-2"></i> Edit</a>
        @endif
    </div>
</div>

<div class="card p-4">
            <div class="show-field">
                <div class="show-label">Key</div>
                <div>{{ $item->key ?? '—' }}</div>
            </div>
            <div class="show-field">
                <div class="show-label">Value</div>
                <div>{{ $item->value ?? '—' }}</div>
            </div>
            <div class="show-field">
                <div class="show-label">Type</div>
                <div>{{ $item->type ?? '—' }}</div>
            </div>
            <div class="show-field">
                <div class="show-label">Group</div>
                <div>{{ $item->group ?? '—' }}</div>
            </div>
            <div class="show-field">
                <div class="show-label">Author</div>
                <div>{{ $item->author?->name ?? '—' }}</div>
            </div>
            <div class="show-field">
                <div class="show-label">Created / Updated</div>
                <div class="text-muted">{{ $item->created_at?->format('M d, Y H:i') }} &bull; {{ $item->updated_at?->format('M d, Y H:i') }}</div>
            </div>
</div>
@endsection
