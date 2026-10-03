@extends('admin.layouts.app')

@section('title', 'Vacancy')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <h4 class="fw-bold mb-0" style="color: var(--afar-deep);"><i class="fa-solid fa-briefcase me-2" style="color: var(--afar-accent);"></i>Vacancy</h4>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.vacancies.index') }}" class="btn btn-ghost"><i class="fa-solid fa-arrow-left me-2"></i> Back</a>
        @if(in_array(auth()->user()->role, ['admin', 'editor']))
            <a href="{{ route('admin.vacancies.edit', $item->id) }}" class="btn btn-afar"><i class="fa-solid fa-pen me-2"></i> Edit</a>
        @endif
    </div>
</div>

<div class="card p-4">
            <div class="show-field">
                <div class="show-label">Position Title</div>
                <div class="mb-2"><span class="locale-chip">en</span> <span class="ms-1">{{ $item->trans('title', 'en') }}</span></div>
                <div class="mb-2"><span class="locale-chip">am</span> <span class="ms-1">{{ $item->trans('title', 'am') }}</span></div>
                <div class="mb-2"><span class="locale-chip">aa</span> <span class="ms-1">{{ $item->trans('title', 'aa') }}</span></div>
            </div>
            <div class="show-field">
                <div class="show-label">Slug</div>
                <div>{{ $item->slug ?? '—' }}</div>
            </div>
            <div class="show-field">
                <div class="show-label">Location</div>
                <div class="mb-2"><span class="locale-chip">en</span> <span class="ms-1">{{ $item->trans('location', 'en') }}</span></div>
                <div class="mb-2"><span class="locale-chip">am</span> <span class="ms-1">{{ $item->trans('location', 'am') }}</span></div>
                <div class="mb-2"><span class="locale-chip">aa</span> <span class="ms-1">{{ $item->trans('location', 'aa') }}</span></div>
            </div>
            <div class="show-field">
                <div class="show-label">Description</div>
                <div class="mb-2"><span class="locale-chip">en</span> <span class="ms-1">{{ $item->trans('description', 'en') }}</span></div>
                <div class="mb-2"><span class="locale-chip">am</span> <span class="ms-1">{{ $item->trans('description', 'am') }}</span></div>
                <div class="mb-2"><span class="locale-chip">aa</span> <span class="ms-1">{{ $item->trans('description', 'aa') }}</span></div>
            </div>
            <div class="show-field">
                <div class="show-label">Requirements</div>
                <div class="mb-2"><span class="locale-chip">en</span> <span class="ms-1">{!! $item->trans('requirements', 'en') !!}</span></div>
                <div class="mb-2"><span class="locale-chip">am</span> <span class="ms-1">{!! $item->trans('requirements', 'am') !!}</span></div>
                <div class="mb-2"><span class="locale-chip">aa</span> <span class="ms-1">{!! $item->trans('requirements', 'aa') !!}</span></div>
            </div>
            <div class="show-field">
                <div class="show-label">Status</div>
                <span class="badge {{ $item->status === 'published' ? 'badge-published' : 'badge-draft' }} rounded-pill">{{ ucfirst($item->status) }}</span>
            </div>
            <div class="show-field">
                <div class="show-label">Application Deadline</div>
                <div>{{ $item->deadline ?? '—' }}</div>
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
