@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row g-4 mb-4">
    @php
        $stats = [
            ['key' => 'news', 'label' => 'News', 'icon' => 'fa-newspaper'],
            ['key' => 'announcements', 'label' => 'Announcements', 'icon' => 'fa-bullhorn'],
            ['key' => 'vacancies', 'label' => 'Vacancies', 'icon' => 'fa-briefcase'],
            ['key' => 'documents', 'label' => 'Documents', 'icon' => 'fa-file-pdf'],
            ['key' => 'pages', 'label' => 'Pages', 'icon' => 'fa-file-lines'],
            ['key' => 'services', 'label' => 'Services', 'icon' => 'fa-hand-holding-heart'],
            ['key' => 'abouts', 'label' => 'About', 'icon' => 'fa-building-columns'],
            ['key' => 'settings', 'label' => 'Settings', 'icon' => 'fa-gear'],
        ];
    @endphp
    @foreach($stats as $stat)
        <div class="col-6 col-md-4 col-xl-3">
            <div class="card stat-card">
                <i class="fa-solid {{ $stat['icon'] }}"></i>
                <div>
                    <div class="stat-value">{{ $counts[$stat['key']] ?? 0 }}</div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="row g-4">
    <div class="col-lg-7">
        <div class="card p-4">
            <h5 class="fw-bold mb-4" style="color: var(--dark);"><i class="fa-solid fa-clock-rotate-left me-2" style="color: var(--purple);"></i>Recent Activity</h5>
            @forelse($recent as $log)
                <div class="d-flex align-items-start gap-3 mb-3 pb-3" style="border-bottom: 1px solid #f2eef7;">
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px; background: #f6f0fa; color: var(--purple);">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <div>
                        <div class="fw-semibold" style="color: var(--dark);">{{ $log->description }}</div>
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
            <h5 class="fw-bold mb-4" style="color: var(--dark);"><i class="fa-solid fa-bolt me-2" style="color: var(--purple);"></i>Latest Updates</h5>
            @foreach($latest as $module => $items)
                <div class="mb-4">
                    <h6 class="text-uppercase fw-bold mb-2" style="color: var(--purple); font-size: 0.75rem; letter-spacing: 0.5px;">{{ ucfirst($module) }}</h6>
                    @forelse($items as $item)
                        <div class="d-flex justify-content-between align-items-center py-2" style="border-bottom: 1px solid #f2eef7;">
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
