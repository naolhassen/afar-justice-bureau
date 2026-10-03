@extends('admin.layouts.app')

@section('title', isset($user) ? 'Edit User' : 'New User')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <h4 class="fw-bold mb-0" style="color: var(--afar-deep);">
        <i class="fa-solid fa-users-gear me-2" style="color: var(--afar-accent);"></i>
        {{ isset($user) ? 'Edit User' : 'Create User' }}
    </h4>
    <a href="{{ route('admin.users.index') }}" class="btn btn-ghost"><i class="fa-solid fa-arrow-left me-2"></i> Back</a>
</div>

<div class="card p-4" style="max-width: 640px;">
    <form method="POST" action="{{ isset($user) ? route('admin.users.update', $user->id) : route('admin.users.store') }}">
        @csrf
        @isset($user)
            @method('PUT')
        @endisset

        <div class="mb-3">
            <label class="form-label fw-semibold">Full Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user?->name) }}" required>
            @error('name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user?->email) }}" required>
            @error('email')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-semibold">Password {{ isset($user) ? '(leave blank to keep)' : '' }}</label>
                <input type="password" name="password" class="form-control" {{ isset($user) ? '' : 'required' }} minlength="8" autocomplete="new-password">
                @error('password')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-semibold">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" autocomplete="new-password">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label fw-semibold">Role</label>
            <select name="role" class="form-select" required>
                @foreach(['admin' => 'Admin — full access incl. users & deletes', 'editor' => 'Editor — create & edit content', 'viewer' => 'Viewer — read only'] as $v => $l)
                    <option value="{{ $v }}" {{ old('role', $user?->role ?? 'editor') === $v ? 'selected' : '' }}>{{ $l }}</option>
                @endforeach
            </select>
            @error('role')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
        </div>

        <div class="d-flex justify-content-end gap-2 mt-4">
            <a href="{{ route('admin.users.index') }}" class="btn btn-ghost">Cancel</a>
            <button type="submit" class="btn btn-afar"><i class="fa-solid fa-floppy-disk me-2"></i> Save</button>
        </div>
    </form>
</div>
@endsection
