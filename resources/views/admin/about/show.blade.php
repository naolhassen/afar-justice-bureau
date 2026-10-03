@extends('admin.layouts.app')

@section('title', 'About Entry')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <h4 class="fw-bold mb-0" style="color: var(--afar-deep);"><i class="fa-solid fa-building-columns me-2" style="color: var(--afar-accent);"></i>About Entry</h4>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.about.index') }}" class="btn btn-ghost"><i class="fa-solid fa-arrow-left me-2"></i> Back</a>
        @if(in_array(auth()->user()->role, ['admin', 'editor']))
            <a href="{{ route('admin.about.edit', $item->id) }}" class="btn btn-afar"><i class="fa-solid fa-pen me-2"></i> Edit</a>
        @endif
    </div>
</div>

<div class="card p-4">
            <div class="show-field">
                <div class="show-label">Section</div>
                <div>{{ $item->section ?? '—' }}</div>
            </div>
            <div class="show-field">
                <div class="show-label">Title</div>
                <div class="mb-2"><span class="locale-chip">en</span> <span class="ms-1">{{ $item->trans('title', 'en') }}</span></div>
                <div class="mb-2"><span class="locale-chip">am</span> <span class="ms-1">{{ $item->trans('title', 'am') }}</span></div>
                <div class="mb-2"><span class="locale-chip">aa</span> <span class="ms-1">{{ $item->trans('title', 'aa') }}</span></div>
            </div>
            <div class="show-field">
                <div class="show-label">Content</div>
                <div class="mb-2"><span class="locale-chip">en</span> <span class="ms-1">{!! $item->trans('content', 'en') !!}</span></div>
                <div class="mb-2"><span class="locale-chip">am</span> <span class="ms-1">{!! $item->trans('content', 'am') !!}</span></div>
                <div class="mb-2"><span class="locale-chip">aa</span> <span class="ms-1">{!! $item->trans('content', 'aa') !!}</span></div>
            </div>
<div class="show-field">
    <div class="show-label">Image</div>
    @if($item->image)
        @if(Str::endsWith($item->image, ['.jpg', '.jpeg', '.png', '.gif', '.webp']))
            <img src="{{ asset('storage/' . $item->image) }}" style="max-height: 180px; border-radius: 10px; border: 1px solid var(--line);" alt="">
        @else
            <a href="{{ asset('storage/' . $item->image) }}" target="_blank" style="color: var(--afar-blue);"><i class="fa-solid fa-file-arrow-down me-1"></i>{{ basename($item->image) }}</a>
        @endif
    @else
        <span class="text-muted">—</span>
    @endif
</div>
            <div class="show-field">
                <div class="show-label">Status</div>
                <span class="badge {{ $item->status === 'published' ? 'badge-published' : 'badge-draft' }} rounded-pill">{{ ucfirst($item->status) }}</span>
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
