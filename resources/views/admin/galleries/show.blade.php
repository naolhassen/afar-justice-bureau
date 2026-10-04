@extends('admin.layouts.app')

@section('title', 'Gallery Image')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <h4 class="fw-bold mb-0" style="color: var(--afar-deep);"><i class="fa-solid fa-images me-2" style="color: var(--afar-accent);"></i>Gallery Image</h4>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.galleries.index') }}" class="btn btn-ghost"><i class="fa-solid fa-arrow-left me-2"></i> Back</a>
        @if(in_array(auth()->user()->role, ['admin', 'editor']))
            <a href="{{ route('admin.galleries.edit', $item->id) }}" class="btn btn-afar"><i class="fa-solid fa-pen me-2"></i> Edit</a>
        @endif
    </div>
</div>

<div class="card p-4">
    <div class="show-field">
        <div class="show-label">Title</div>
        <div class="mb-2"><span class="locale-chip">en</span> <span class="ms-1">{{ $item->trans('title', 'en') }}</span></div>
        <div class="mb-2"><span class="locale-chip">am</span> <span class="ms-1">{{ $item->trans('title', 'am') }}</span></div>
        <div class="mb-2"><span class="locale-chip">aa</span> <span class="ms-1">{{ $item->trans('title', 'aa') }}</span></div>
    </div>
    <div class="show-field">
        <div class="show-label">Slug</div>
        <div>{{ $item->slug ?? '—' }}</div>
    </div>
    <div class="show-field">
        <div class="show-label">Image</div>
        @if($item->image)
            <img src="{{ asset('storage/' . $item->image) }}" style="max-height: 240px; border-radius: 10px; border: 1px solid var(--line);" alt="">
        @else
            <span class="text-muted">—</span>
        @endif
    </div>
    <div class="show-field">
        <div class="show-label">Order</div>
        <div>{{ $item->order }}</div>
    </div>
    <div class="show-field">
        <div class="show-label">Status</div>
        <span class="badge {{ $item->status === 'published' ? 'badge-published' : 'badge-draft' }} rounded-pill">{{ ucfirst($item->status) }}</span>
    </div>
    <div class="show-field">
        <div class="show-label">Published at</div>
        <div>{{ $item->published_at?->format('M d, Y H:i') ?? '—' }}</div>
    </div>
    <div class="show-field">
        <div class="show-label">Created at</div>
        <div>{{ $item->created_at->format('M d, Y H:i') }}</div>
    </div>
</div>
@endsection
