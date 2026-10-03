@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <h4 class="fw-bold mb-0" style="color: var(--afar-deep);"><i class="fa-solid fa-users-gear me-2" style="color: var(--afar-accent);"></i>Users</h4>
    <a href="{{ route('admin.users.create') }}" class="btn btn-afar"><i class="fa-solid fa-plus me-2"></i> New User</a>
</div>

<div class="card p-0 overflow-hidden">
    <div class="table-responsive">
        <table class="table align-middle mb-0">
            <thead>
                <tr>
                    <th style="width: 56px;">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Activity</th>
                    <th>Joined</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $index => $user)
                    <tr>
                        <td class="text-muted">{{ $users->firstItem() + $index }}</td>
                        <td class="fw-semibold" style="color: var(--afar-deep);">
                            {{ $user->name }}
                            @if($user->id === auth()->id()) <span class="locale-chip ms-1">you</span> @endif
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @php
                                $roleStyle = ['admin' => 'background:#fbe9ec;color:var(--afar-accent);', 'editor' => 'background:#e9f2f8;color:var(--afar-blue);', 'viewer' => 'background:#eef1f4;color:#6b7a8a;'];
                            @endphp
                            <span class="badge rounded-pill" style="{{ $roleStyle[$user->role] ?? '' }}">{{ ucfirst($user->role) }}</span>
                        </td>
                        <td class="text-muted">{{ $user->activity_logs_count ?? $user->activityLogs()->count() }} actions</td>
                        <td class="text-muted">{{ $user->created_at?->format('M d, Y') }}</td>
                        <td class="text-end text-nowrap">
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-ghost me-1" title="Edit"><i class="fa-solid fa-pen"></i></a>
                            @if($user->id !== auth()->id())
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger" title="Delete"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="text-center text-muted py-5">No users found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($users->hasPages())
        <div class="p-3 d-flex justify-content-between align-items-center">
            <small class="text-muted">{{ $users->total() }} total</small>
            {{ $users->links() }}
        </div>
    @endif
</div>
@endsection
