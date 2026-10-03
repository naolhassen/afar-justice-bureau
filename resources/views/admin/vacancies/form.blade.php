@extends('admin.layouts.app')

@section('title', isset($item) ? 'Edit Vacancy' : 'New Vacancy')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <h4 class="fw-bold mb-0" style="color: var(--afar-deep);">
        <i class="fa-solid fa-briefcase me-2" style="color: var(--afar-accent);"></i>
        {{ isset($item) ? 'Edit Vacancy' : 'Create Vacancy' }}
    </h4>
    <div class="d-flex align-items-center gap-3">
            <div class="locale-tabs" data-locale-tabs>
        <button type="button" class="locale-btn active" data-locale="en">English</button>
        <button type="button" class="locale-btn" data-locale="am">አማርኛ</button>
        <button type="button" class="locale-btn" data-locale="aa">Qafar</button>
    </div>
<a href="{{ route('admin.vacancies.index') }}" class="btn btn-ghost"><i class="fa-solid fa-arrow-left me-2"></i> Back</a>
    </div>
</div>

<div class="card p-4">
    <form method="POST" action="{{ isset($item) ? route('admin.vacancies.update', $item->id) : route('admin.vacancies.store') }}" enctype="multipart/form-data">
        @csrf
        @isset($item)
            @method('PUT')
        @endisset

            <div class="mb-4">
                <label class="form-label fw-semibold">Position Title <span class="locale-chip">EN · AM · AA</span></label>
                <div class="locale-pane active" data-locale="en">
                    <div class="locale-hint mb-1">English</div>
                    <input type="text" name="title[en]" class="form-control" value="{{ old('title.en', $item?->trans('title', 'en') ?? '') }}" required>
                    @error('title.en')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
                <div class="locale-pane" data-locale="am">
                    <div class="locale-hint mb-1">አማርኛ</div>
                    <input type="text" name="title[am]" class="form-control" value="{{ old('title.am', $item?->trans('title', 'am') ?? '') }}">
                    @error('title.am')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
                <div class="locale-pane" data-locale="aa">
                    <div class="locale-hint mb-1">Qafar Af</div>
                    <input type="text" name="title[aa]" class="form-control" value="{{ old('title.aa', $item?->trans('title', 'aa') ?? '') }}">
                    @error('title.aa')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug', $item?->slug ?? '') }}">
                    <div class="form-text">Leave blank to auto-generate from the English title.</div>
                    @error('slug')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold">Location <span class="locale-chip">EN · AM · AA</span></label>
                <div class="locale-pane active" data-locale="en">
                    <div class="locale-hint mb-1">English</div>
                    <input type="text" name="location[en]" class="form-control" value="{{ old('location.en', $item?->trans('location', 'en') ?? '') }}">
                    @error('location.en')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
                <div class="locale-pane" data-locale="am">
                    <div class="locale-hint mb-1">አማርኛ</div>
                    <input type="text" name="location[am]" class="form-control" value="{{ old('location.am', $item?->trans('location', 'am') ?? '') }}">
                    @error('location.am')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
                <div class="locale-pane" data-locale="aa">
                    <div class="locale-hint mb-1">Qafar Af</div>
                    <input type="text" name="location[aa]" class="form-control" value="{{ old('location.aa', $item?->trans('location', 'aa') ?? '') }}">
                    @error('location.aa')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold">Description <span class="locale-chip">EN · AM · AA</span></label>
                <div class="locale-pane active" data-locale="en">
                    <div class="locale-hint mb-1">English</div>
                    <textarea name="description[en]" class="form-control" rows="3">{{ old('description.en', $item?->trans('description', 'en') ?? '') }}</textarea>
                    @error('description.en')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
                <div class="locale-pane" data-locale="am">
                    <div class="locale-hint mb-1">አማርኛ</div>
                    <textarea name="description[am]" class="form-control" rows="3">{{ old('description.am', $item?->trans('description', 'am') ?? '') }}</textarea>
                    @error('description.am')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
                <div class="locale-pane" data-locale="aa">
                    <div class="locale-hint mb-1">Qafar Af</div>
                    <textarea name="description[aa]" class="form-control" rows="3">{{ old('description.aa', $item?->trans('description', 'aa') ?? '') }}</textarea>
                    @error('description.aa')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold">Requirements <span class="locale-chip">EN · AM · AA</span></label>
                <div class="locale-pane active" data-locale="en">
                    <div class="locale-hint mb-1">English</div>
                    <div data-richtext>
                        <input type="hidden" name="requirements[en]" value="{{ old('requirements.en', $item?->trans('requirements', 'en') ?? '') }}">
                        <div class="quill-editor"></div>
                    </div>
                    @error('requirements.en')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
                <div class="locale-pane" data-locale="am">
                    <div class="locale-hint mb-1">አማርኛ</div>
                    <div data-richtext>
                        <input type="hidden" name="requirements[am]" value="{{ old('requirements.am', $item?->trans('requirements', 'am') ?? '') }}">
                        <div class="quill-editor"></div>
                    </div>
                    @error('requirements.am')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
                <div class="locale-pane" data-locale="aa">
                    <div class="locale-hint mb-1">Qafar Af</div>
                    <div data-richtext>
                        <input type="hidden" name="requirements[aa]" value="{{ old('requirements.aa', $item?->trans('requirements', 'aa') ?? '') }}">
                        <div class="quill-editor"></div>
                    </div>
                    @error('requirements.aa')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold">Status</label>
                    <select name="status" class="form-select">
                        <option value="draft" {{ old('status', $item?->status ?? '') == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status', $item?->status ?? '') == 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                    @error('status')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold">Application Deadline</label>
                    <input type="date" name="deadline" class="form-control" value="{{ old('deadline', $item?->deadline ? \Illuminate\Support\Carbon::parse($item->deadline)->format('Y-m-d') : '') }}">
                    @error('deadline')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

        <div class="d-flex justify-content-end gap-2 mt-4">
            <a href="{{ route('admin.vacancies.index') }}" class="btn btn-ghost">Cancel</a>
            <button type="submit" class="btn btn-afar">
                <i class="fa-solid fa-floppy-disk me-2"></i> Save
            </button>
        </div>
    </form>
</div>
@endsection
