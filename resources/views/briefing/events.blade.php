@extends('layouts.app')

@section('content')
@php
    $locale = app()->getLocale() ?: 'aa';
    $events = [
        [
            'title' => 'Regional Consultative Forum on Mad\'aa Harmonization and Transitional Justice',
            'desc' => 'High-level conference bringing together regional clan leaders, woreda prosecutors, and academic jurists to discuss traditional dispute mechanisms.',
            'date' => now()->addDays(5)->format('M d, Y'),
            'location' => 'Semera Regional Justice Bureau Auditorium',
            'img' => asset('images/gallery/gallery-10.jpg'),
            'status' => 'Upcoming Forum',
            'badge' => 'civic-badge-gold',
        ],
        [
            'title' => 'Annual Capacity-Building Workshop for Zone and Woreda Public Prosecutors',
            'desc' => 'Comprehensive 4-day intensive training curriculum on modern forensic criminal investigation, cyber evidence analysis, and judicial ethics.',
            'date' => now()->addDays(14)->format('M d, Y'),
            'location' => 'Afar Regional Management Institute, Semera',
            'status' => 'Registration Open',
            'badge' => 'civic-badge-navy',
        ],
    ];
@endphp

    <x-page-hero
        title="{{ __('messages.pages.events.title') }}"
        titleHighlight="{{ __('messages.pages.events.titleHighlight') }}"
        description="{{ __('messages.pages.events.description') }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="sec-title text-center mb-5">
                <span class="civic-badge civic-badge-navy mb-2">Conferences and Public Forums</span>
                <h2 style="font-size: clamp(2rem, 3vw, 2.8rem); font-weight: 800; color: var(--afar-navy);">
                    {{ __('messages.pages.events.title') }} <span>{{ __('messages.pages.events.titleHighlight') }}</span>
                </h2>
                <div class="text" style="max-width: 720px; margin: 12px auto 0; font-size: 1rem; color: var(--afar-muted);">
                    Official public hearings, consultative sessions, and prosecutor professional development seminars.
                </div>
            </div>

            <div class="row g-4">
                @foreach ($events as $item)
                    <div class="col-lg-6 mb-4">
                        <div class="civic-card h-100 d-flex flex-column" style="padding: 0; overflow: hidden;">
                            <div style="height: 240px; width: 100%; overflow: hidden; position: relative;">
                                <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                                <span class="civic-badge {{ $item['badge'] }}" style="position: absolute; top: 14px; left: 14px; font-size: 11px;">
                                    {{ $item['status'] }}
                                </span>
                            </div>
                            <div style="padding: 28px 24px; display: flex; flex-direction: column; flex-grow: 1;">
                                <div style="display: flex; gap: 14px; font-size: 12px; color: var(--afar-muted); font-weight: 600; margin-bottom: 12px; flex-wrap: wrap;">
                                    <span><i class="fa fa-calendar me-1" style="color: var(--afar-accent);"></i> {{ $item['date'] }}</span>
                                    <span>&bull;</span>
                                    <span><i class="fa fa-map-marker me-1" style="color: var(--afar-navy);"></i> {{ $item['location'] }}</span>
                                </div>
                                <h4 style="font-weight: 800; color: var(--afar-navy); font-size: 1.25rem; line-height: 1.35; margin-bottom: 12px;">
                                    {{ $item['title'] }}
                                </h4>
                                <p style="font-size: 0.92rem; line-height: 1.7; color: var(--afar-muted); margin-bottom: 20px; flex-grow: 1;">
                                    {{ $item['desc'] }}
                                </p>
                                <div class="pt-3 border-top mt-auto">
                                    <a href="{{ route('contact', ['locale' => $locale]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 13px; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                        <span>Inquire Attendance / Registration</span>
                                        <i class="fa fa-arrow-right" style="color: var(--afar-accent);"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
