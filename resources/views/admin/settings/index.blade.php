@extends('admin.layouts.app')

@section('title', 'Settings')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <h4 class="fw-bold mb-0" style="color: var(--afar-deep);"><i class="fa-solid fa-gear me-2" style="color: var(--afar-accent);"></i>Settings</h4>
    @if(in_array(auth()->user()->role, ['admin', 'editor']))
        <a href="{{ route('admin.settings.create') }}" class="btn btn-afar"><i class="fa-solid fa-plus me-2"></i> New Setting</a>
    @endif
</div>

<div class="card p-4 mb-4">
    <form method="GET" action="{{ route('admin.settings.index') }}" class="row g-3">
        <div class="col-md-9">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-magnifying-glass" style="color: var(--afar-blue);"></i></span>
                <input type="text" name="q" class="form-control border-start-0" placeholder="Search..." value="{{ request('q') }}">
            </div>
        </div>

        <div class="col-md-3 d-flex gap-2">
            <button type="submit" class="btn btn-afar"><i class="fa-solid fa-filter me-2"></i> Filter</button>
            <a href="{{ route('admin.settings.index') }}" class="btn btn-ghost">Reset</a>
        </div>
    </form>
</div>

<form id="bulkForm" method="POST" action="{{ route('admin.settings.bulk') }}">
    @csrf
    <input type="hidden" name="action" id="bulkAction">
</form>

<div class="bulk-bar" id="bulkBar">
    <span id="bulkCount" class="fw-semibold">0 selected</span>
    
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
                    <th>Key</th>
                    <th>Value</th>
                    <th>Group</th>
                    <th>Updated at</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $index => $item)
                    <tr>
                        <td><input type="checkbox" class="form-check-input row-check" name="ids[]" value="{{ $item->id }}" form="bulkForm"></td>
                        <td class="text-muted">{{ $items->firstItem() + $index }}</td>
                        <td>{{ $item->key }}</td>
                        <td class="fw-semibold" style="color: var(--afar-deep);">{{ Str::limit($item->value, 50) }}</td>
                        <td>{{ $item->group }}</td>
                        <td class="text-muted">{{ $item->updated_at?->format('M d, Y') ?? '—' }}</td>
                    <td class="text-end text-nowrap">
                        <a href="{{ route('admin.settings.show', $item->id) }}" class="btn btn-sm btn-ghost me-1" title="View"><i class="fa-solid fa-eye"></i></a>
                        @if(in_array(auth()->user()->role, ['admin', 'editor']))
                            <a href="{{ route('admin.settings.edit', $item->id) }}" class="btn btn-sm btn-ghost me-1" title="Edit"><i class="fa-solid fa-pen"></i></a>
                        @endif
                        @if(auth()->user()->role === 'admin')
                            <form action="{{ route('admin.settings.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this item? This cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        @endif
                    </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-5">
                            <i class="fa-solid fa-gear fa-2x mb-3 d-block" style="color: #c3d6e5;"></i>
                            No Setting records yet.
                            @if(in_array(auth()->user()->role, ['admin', 'editor']))
                                <a href="{{ route('admin.settings.create') }}" style="color: var(--afar-accent);">Create the first one</a>.
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
