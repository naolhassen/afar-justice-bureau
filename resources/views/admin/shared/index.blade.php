@extends('admin.layouts.app')

@section('title', $config['title'])

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0" style="color: var(--dark);"><i class="fa-solid {{ $config['icon'] }} me-2" style="color: var(--purple);"></i>{{ $config['title'] }}</h4>
    @if(in_array(auth()->user()->role, ['admin', 'editor']))
        <a href="{{ route('admin.crud.create', $module) }}" class="btn btn-purple">
            <i class="fa-solid fa-plus me-2"></i> New
        </a>
    @endif
</div>

<div class="card p-4 mb-4">
    <form method="GET" action="{{ route('admin.crud.index', $module) }}" class="row g-3">
        <div class="col-md-5">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><i class="fa-solid fa-magnifying-glass" style="color: var(--purple);"></i></span>
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
            <button type="submit" class="btn btn-purple"><i class="fa-solid fa-filter me-2"></i> Filter</button>
            <a href="{{ route('admin.crud.index', $module) }}" class="btn btn-outline-purple">Reset</a>
        </div>
    </form>
</div>

<div class="card p-0 overflow-hidden">
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead>
                <tr>
                    <th style="width: 60px;">#</th>
                    @foreach($config['columns'] as $column)
                        <th>{{ ucfirst(str_replace('_', ' ', $column)) }}</th>
                    @endforeach
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $index => $item)
                    <tr>
                        <td>{{ $items->firstItem() + $index }}</td>
                        @foreach($config['columns'] as $column)
                            <td>
                                @if($column === 'status')
                                    <span class="badge {{ $item->status === 'published' ? 'badge-published' : 'badge-draft' }} rounded-pill">{{ ucfirst($item->status) }}</span>
                                @elseif($column === 'updated_at')
                                    {{ $item->updated_at?->format('M d, Y H:i') }}
                                @elseif($column === 'value' || $column === 'title')
                                    {{ Str::limit($item->{$column}, 60) }}
                                @else
                                    {{ $item->{$column} }}
                                @endif
                            </td>
                        @endforeach
                        <td class="text-end">
                            <a href="{{ route('admin.crud.show', [$module, $item->id]) }}" class="btn btn-sm btn-outline-purple me-1"><i class="fa-solid fa-eye"></i></a>
                            @if(in_array(auth()->user()->role, ['admin', 'editor']))
                                <a href="{{ route('admin.crud.edit', [$module, $item->id]) }}" class="btn btn-sm btn-outline-purple me-1"><i class="fa-solid fa-pen"></i></a>
                            @endif
                            @if(auth()->user()->role === 'admin')
                                <form action="{{ route('admin.crud.destroy', [$module, $item->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="{{ count($config['columns']) + 2 }}" class="text-center text-muted py-4">No records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($items->hasPages())
        <div class="p-3 d-flex justify-content-end">
            {{ $items->links() }}
        </div>
    @endif
</div>
@endsection
