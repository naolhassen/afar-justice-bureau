@extends('admin.layouts.app')

@section('title', 'Videos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <h4 class="fw-bold mb-0" style="color: var(--afar-deep);"><i class="fa-solid fa-video me-2" style="color: var(--afar-accent);"></i>Videos</h4>
    @if(in_array(auth()->user()->role, ['admin', 'editor']))
        <a href="{{ route('admin.videos.create') }}" class="btn btn-afar"><i class="fa-solid fa-plus me-2"></i> New Video</a>
    @endif
</div>

<div class="card p-4 mb-4">
    <form method="GET" action="{{ route('admin.videos.index') }}" class="row g-3">
        <div class="col-md-5">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-magnifying-glass" style="color: var(--afar-blue);"></i></span>
                <input type="text" name="q" class="form-control border-start-0" placeholder="Search..." value="{{ request('q') }}">
            </div>
        </div>
        <div class="col-md-3">
            <select name="status" class="form-select">
                <option value="">All Status</option>
                <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </div>
        <div class="col-md-4 d-flex gap-2">
            <button type="submit" class="btn btn-afar"><i class="fa-solid fa-filter me-2"></i> Filter</button>
            <a href="{{ route('admin.videos.index') }}" class="btn btn-ghost">Reset</a>
        </div>
    </form>
</div>

<form id="bulkForm" method="POST" action="{{ route('admin.videos.bulk') }}">
    @csrf
    <input type="hidden" name="action" id="bulkAction">
</form>

<div class="bulk-bar" id="bulkBar">
    <span id="bulkCount" class="fw-semibold">0 selected</span>
    <button type="button" class="btn btn-sm btn-light" data-bulk-action="publish"><i class="fa-solid fa-eye me-1"></i> Publish</button>
            <button type="button" class="btn btn-sm btn-light" data-bulk-action="draft"><i class="fa-solid fa-eye-slash me-1"></i> Draft</button>
    @if(auth()->user()->role === 'admin')
                <button type="button" class="btn btn-sm btn-danger" data-bulk-action="delete"><i class="fa-solid fa-trash me-1"></i> Delete</button>
            @endif
</div>

<div class="card p-0 overflow-hidden">
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead>
                <tr>
                    <th style="width: 36px;"><input type="checkbox" class="form-check-input" id="selectAll"></th>
                    <th style="width: 56px;">#</th>
                    <th style="width: 70px;"></th>
                    <th>Title</th>
                    <th>Video url</th>
                    <th>Status</th>
                    <th>Published at</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $index => $item)
                    <tr>
                        <td><input type="checkbox" class="form-check-input row-check" name="ids[]" value="{{ $item->id }}" form="bulkForm"></td>
                        <td class="text-muted">{{ $items->firstItem() + $index }}</td>
            <td>
                @if($item->thumbnail)
                    <img src="{{ asset('storage/' . $item->thumbnail) }}" class="row-thumb" alt="">
                @else
                    <span class="row-thumb-empty"><i class="fa-solid fa-image"></i></span>
                @endif
            </td>
                        <td class="fw-semibold" style="color: var(--afar-deep);">{{ Str::limit($item->title, 45) }}</td>
                        <td class="text-truncate" style="max-width: 180px;"><a href="{{ $item->video_url }}" target="_blank" style="color: var(--afar-blue);">{{ Str::limit($item->video_url, 30) }}</a></td>
            <td>
                <div class="d-flex align-items-center gap-2">
                    <div class="form-check form-switch pub-toggle mb-0">
                        <input class="form-check-input" type="checkbox" {{ $item->status === 'published' ? 'checked' : '' }}
                            onchange="const c=this.checked;fetch('{{ route('admin.videos.toggle', $item->id) }}',{method:'POST',headers:{'X-CSRF-TOKEN':document.querySelector('meta[name=csrf-token]').content}}).then(r=>{if(r.ok)location.reload();this.checked=!c;})">
                    </div>
                    <span class="badge {{ $item->status === 'published' ? 'badge-published' : 'badge-draft' }} rounded-pill">{{ ucfirst($item->status) }}</span>
                </div>
            </td>
                        <td class="text-muted">{{ $item->published_at?->format('M d, Y') ?? '—' }}</td>
                    <td class="text-end text-nowrap">
                        <a href="{{ route('admin.videos.show', $item->id) }}" class="btn btn-sm btn-ghost me-1" title="View"><i class="fa-solid fa-eye"></i></a>
                        @if(in_array(auth()->user()->role, ['admin', 'editor']))
                            <a href="{{ route('admin.videos.edit', $item->id) }}" class="btn btn-sm btn-ghost me-1" title="Edit"><i class="fa-solid fa-pen"></i></a>
                        @endif
                        @if(auth()->user()->role === 'admin')
                            <form action="{{ route('admin.videos.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this item? This cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        @endif
                    </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted py-5">
                            <i class="fa-solid fa-video fa-2x mb-3 d-block" style="color: #c3d6e5;"></i>
                            No Video records yet.
                            @if(in_array(auth()->user()->role, ['admin', 'editor']))
                                <a href="{{ route('admin.videos.create') }}" style="color: var(--afar-accent);">Create the first one</a>.
                            @endif
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($items->hasPages())
        <div class="p-3 d-flex justify-content-between align-items-center">
            <small class="text-muted">{{ $items->total() }} total</small>
            {{ $items->links() }}
        </div>
    @else
        <div class="p-3"><small class="text-muted">{{ $items->total() }} total</small></div>
    @endif
</div>
@endsection
