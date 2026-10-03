@extends('admin.layouts.app')

@section('title', isset($item) ? 'Edit Announcement' : 'New Announcement')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    <h4 class="fw-bold mb-0" style="color: var(--afar-deep);">
        <i class="fa-solid fa-bullhorn me-2" style="color: var(--afar-accent);"></i>
        {{ isset($item) ? 'Edit Announcement' : 'Create Announcement' }}
    </h4>
    <div class="d-flex align-items-center gap-3">
            <div class="locale-tabs" data-locale-tabs>
        <button type="button" class="locale-btn active" data-locale="en">English</button>
        <button type="button" class="locale-btn" data-locale="am">አማርኛ</button>
        <button type="button" class="locale-btn" data-locale="aa">Qafar</button>
    </div>
<a href="{{ route('admin.announcements.index') }}" class="btn btn-ghost"><i class="fa-solid fa-arrow-left me-2"></i> Back</a>
    </div>
</div>

<div class="card p-4">
    <form method="POST" action="{{ isset($item) ? route('admin.announcements.update', $item->id) : route('admin.announcements.store') }}" enctype="multipart/form-data">
        @csrf
        @isset($item)
            @method('PUT')
        @endisset

            <div class="mb-4">
                <label class="form-label fw-semibold">Title <span class="locale-chip">EN · AM · AA</span></label>
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
                <label class="form-label fw-semibold">Excerpt <span class="locale-chip">EN · AM · AA</span></label>
                <div class="locale-pane active" data-locale="en">
                    <div class="locale-hint mb-1">English</div>
                    <textarea name="excerpt[en]" class="form-control" rows="3">{{ old('excerpt.en', $item?->trans('excerpt', 'en') ?? '') }}</textarea>
                    @error('excerpt.en')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
                <div class="locale-pane" data-locale="am">
                    <div class="locale-hint mb-1">አማርኛ</div>
                    <textarea name="excerpt[am]" class="form-control" rows="3">{{ old('excerpt.am', $item?->trans('excerpt', 'am') ?? '') }}</textarea>
                    @error('excerpt.am')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
                <div class="locale-pane" data-locale="aa">
                    <div class="locale-hint mb-1">Qafar Af</div>
                    <textarea name="excerpt[aa]" class="form-control" rows="3">{{ old('excerpt.aa', $item?->trans('excerpt', 'aa') ?? '') }}</textarea>
                    @error('excerpt.aa')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold">Body <span class="locale-chip">EN · AM · AA</span></label>
                <div class="locale-pane active" data-locale="en">
                    <div class="locale-hint mb-1">English</div>
                    <div data-richtext>
                        <input type="hidden" name="body[en]" value="{{ old('body.en', $item?->trans('body', 'en') ?? '') }}">
                        <div class="quill-editor"></div>
                    </div>
                    @error('body.en')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
                <div class="locale-pane" data-locale="am">
                    <div class="locale-hint mb-1">አማርኛ</div>
                    <div data-richtext>
                        <input type="hidden" name="body[am]" value="{{ old('body.am', $item?->trans('body', 'am') ?? '') }}">
                        <div class="quill-editor"></div>
                    </div>
                    @error('body.am')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
                <div class="locale-pane" data-locale="aa">
                    <div class="locale-hint mb-1">Qafar Af</div>
                    <div data-richtext>
                        <input type="hidden" name="body[aa]" value="{{ old('body.aa', $item?->trans('body', 'aa') ?? '') }}">
                        <div class="quill-editor"></div>
                    </div>
                    @error('body.aa')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="mb-4">
                <label class="form-label fw-semibold">Image</label>
                    <div class="file-drop">
                        <input type="file" name="image" id="image" accept="image/*">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <div class="file-drop-text">Drag &amp; drop or <strong style="color: var(--afar-blue);">browse files</strong></div>
                        <div class="file-preview mt-2">
                            @if($item && $item->image)
                                @if(Str::endsWith($item->image, ['.jpg', '.jpeg', '.png', '.gif', '.webp']))
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                @else
                                    <a href="{{ asset('storage/' . $item->image) }}" target="_blank" class="file-name text-decoration-none" style="color: var(--afar-blue);"><i class="fa-solid fa-file-arrow-down me-1"></i>{{ basename($item->image) }}</a>
                                @endif
                            @endif
                        </div>
                    </div>
                    @error('image')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
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
                <label class="form-label fw-semibold">Publish Date</label>
                    <input type="datetime-local" name="published_at" class="form-control" value="{{ old('published_at', $item?->published_at ? \Illuminate\Support\Carbon::parse($item->published_at)->format('Y-m-d\TH:i') : '') }}">
                    @error('published_at')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

        <div class="d-flex justify-content-end gap-2 mt-4">
            <a href="{{ route('admin.announcements.index') }}" class="btn btn-ghost">Cancel</a>
            <button type="submit" class="btn btn-afar">
                <i class="fa-solid fa-floppy-disk me-2"></i> Save
            </button>
        </div>
    </form>
</div>
@endsection
