@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row g-3 mb-4">
    @php
        $stats = [
            ['key' => 'news', 'route' => 'admin.news.index', 'label' => 'News', 'icon' => 'fa-newspaper'],
            ['key' => 'announcements', 'route' => 'admin.announcements.index', 'label' => 'Announcements', 'icon' => 'fa-bullhorn'],
            ['key' => 'initiatives', 'route' => 'admin.initiatives.index', 'label' => 'Initiatives', 'icon' => 'fa-lightbulb'],
            ['key' => 'publications', 'route' => 'admin.publications.index', 'label' => 'Articles', 'icon' => 'fa-book-open'],
            ['key' => 'videos', 'route' => 'admin.videos.index', 'label' => 'Videos', 'icon' => 'fa-video'],
            ['key' => 'galleries', 'route' => 'admin.galleries.index', 'label' => 'Gallery', 'icon' => 'fa-images'],
            ['key' => 'vacancies', 'route' => 'admin.vacancies.index', 'label' => 'Vacancies', 'icon' => 'fa-briefcase'],
            ['key' => 'documents', 'route' => 'admin.documents.index', 'label' => 'Documents', 'icon' => 'fa-file-pdf'],
            ['key' => 'pages', 'route' => 'admin.pages.index', 'label' => 'Pages', 'icon' => 'fa-file-lines'],
            ['key' => 'services', 'route' => 'admin.services.index', 'label' => 'Services', 'icon' => 'fa-hand-holding-heart'],
            ['key' => 'about', 'route' => 'admin.about.index', 'label' => 'About', 'icon' => 'fa-building-columns'],
            ['key' => 'users', 'route' => 'admin.users.index', 'label' => 'Users', 'icon' => 'fa-users-gear', 'admin' => true],
            ['key' => 'settings', 'route' => 'admin.settings.index', 'label' => 'Settings', 'icon' => 'fa-gear'],
        ];
    @endphp
    @foreach($stats as $stat)
        @if(empty($stat['admin']) || auth()->user()->role === 'admin')
            <div class="col-6 col-md-4 col-xl-2">
                <a href="{{ route($stat['route']) }}" class="card stat-card">
                    <i class="fa-solid {{ $stat['icon'] }}"></i>
                    <div>
                        <div class="stat-value">{{ $counts[$stat['key']] ?? 0 }}</div>
                        <div class="stat-label">{{ $stat['label'] }}</div>
                    </div>
                </a>
            </div>
        @endif
    @endforeach
</div>

@if(in_array(auth()->user()->role, ['admin', 'editor']))
    <div class="card p-4 mb-4">
        <h6 class="fw-bold mb-3" style="color: var(--afar-deep); font-family: 'Source Sans Pro', sans-serif; letter-spacing: 0.05em; text-transform: uppercase; font-size: 0.75rem;">
            <i class="fa-solid fa-plus me-2" style="color: var(--afar-accent);"></i>Quick create
        </h6>
        <div class="d-flex flex-wrap gap-2">
            <a href="{{ route('admin.news.create') }}" class="btn btn-afar btn-sm"><i class="fa-solid fa-newspaper me-1"></i> News</a>
            <a href="{{ route('admin.announcements.create') }}" class="btn btn-afar btn-sm"><i class="fa-solid fa-bullhorn me-1"></i> Announcement</a>
            <a href="{{ route('admin.vacancies.create') }}" class="btn btn-afar btn-sm"><i class="fa-solid fa-briefcase me-1"></i> Vacancy</a>
            <a href="{{ route('admin.documents.create') }}" class="btn btn-afar btn-sm"><i class="fa-solid fa-file-pdf me-1"></i> Document</a>
            <a href="{{ route('admin.videos.create') }}" class="btn btn-afar btn-sm"><i class="fa-solid fa-video me-1"></i> Video</a>
            <a href="{{ route('admin.pages.create') }}" class="btn btn-afar btn-sm"><i class="fa-solid fa-file-lines me-1"></i> Page</a>
        </div>
    </div>
@endif

<div class="row g-4">
    <div class="col-lg-7">
        <div class="card p-4">
            <h5 class="fw-bold mb-4" style="color: var(--afar-deep);"><i class="fa-solid fa-clock-rotate-left me-2" style="color: var(--afar-accent);"></i>Recent Activity</h5>
            @forelse($recent as $log)
                <div class="d-flex align-items-start gap-3 mb-3 pb-3" style="border-bottom: 1px solid #eef3f8;">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 36px; height: 36px; background: var(--afar-light); color: var(--afar-blue);">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <div>
                        <div class="fw-semibold" style="color: var(--afar-deep);">{{ $log->description }}</div>
                        <small class="text-muted">by {{ $log->user?->name ?? 'System' }} &bull; {{ $log->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            @empty
                <p class="text-muted mb-0">No recent activity.</p>
            @endforelse
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card p-4">
            <h5 class="fw-bold mb-4" style="color: var(--afar-deep);"><i class="fa-solid fa-bolt me-2" style="color: var(--afar-accent);"></i>Latest Updates</h5>
            @foreach($latest as $module => $items)
                <div class="mb-4">
                    <h6 class="text-uppercase fw-bold mb-2" style="color: var(--afar-blue); font-size: 0.75rem; letter-spacing: 0.5px; font-family: 'Source Sans Pro', sans-serif;">{{ ucfirst($module) }}</h6>
                    @forelse($items as $item)
                        <div class="d-flex justify-content-between align-items-center py-2" style="border-bottom: 1px solid #eef3f8;">
                            <span class="text-truncate" style="max-width: 70%;">{{ $item->title ?? $item->key }}</span>
                            <small class="text-muted">{{ $item->updated_at->diffForHumans() }}</small>
                        </div>
                    @empty
                        <small class="text-muted">No updates.</small>
                    @endforelse
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
