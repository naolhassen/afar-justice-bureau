@extends('layouts.app')

@section('content')
@php
    $locale = app()->getLocale() ?: 'aa';
    $newsList = [
        [
            'title' => 'messages.news.item1Title',
            'category' => 'Community Support',
            'date' => now()->format('M d, Y'),
            'excerpt' => 'messages.news.item1Desc',
            'img' => asset('images/news/news-1.jpg'),
            'badge' => 'civic-badge-gold',
        ],
        [
            'title' => 'messages.news.item2Title',
            'category' => 'Regional Events',
            'date' => now()->subDays(3)->format('M d, Y'),
            'excerpt' => 'messages.news.item2Desc',
            'img' => asset('images/news/news-2.jpg'),
            'badge' => 'civic-badge-navy',
        ],
        [
            'title' => 'messages.news.item3Title',
            'category' => 'Justice Forum',
            'date' => now()->subDays(6)->format('M d, Y'),
            'excerpt' => 'messages.news.item3Desc',
            'img' => asset('images/news/news-3.jpg'),
            'badge' => 'civic-badge-green',
        ],
        [
            'title' => 'messages.news.item4Title',
            'category' => 'Justice Collaboration',
            'date' => now()->subDays(8)->format('M d, Y'),
            'excerpt' => 'messages.news.item4Desc',
            'img' => asset('images/news/news-4.jpg'),
            'badge' => 'civic-badge-gold',
        ],
    ];
@endphp

    <x-page-hero
        title="{{ __('messages.news.title') }}"
        titleHighlight="{{ __('messages.news.titleHighlight') }}"
        description="Official press bulletins, judicial conferences, and regional legal updates from the Afar National Regional State Justice Bureau."
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="sec-title text-center mb-5">
                <span class="civic-badge civic-badge-navy mb-2">{{ __('messages.news.sectionTag') }}</span>
                <h2 style="font-size: clamp(2rem, 3vw, 2.8rem); font-weight: 800; color: var(--afar-navy);">
                    {{ __('messages.news.title') }} <span>{{ __('messages.news.titleHighlight') }}</span>
                </h2>
                <div class="text" style="max-width: 720px; margin: 12px auto 0; font-size: 1rem; color: var(--afar-muted);">
                    Direct coverage of legislative developments, regional stakeholder consultative forums, and mobile justice delivery.
                </div>
            </div>

            <div class="row g-4">
                @foreach ($newsList as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="civic-card h-100 d-flex flex-column" style="padding: 0; overflow: hidden;">
                            <div style="height: 220px; width: 100%; overflow: hidden; position: relative;">
                                <img src="{{ $item['img'] }}" alt="{{ __($item['title']) }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
                                <span class="civic-badge {{ $item['badge'] }}" style="position: absolute; top: 14px; left: 14px; font-size: 11px;">
                                    {{ $item['category'] }}
                                </span>
                            </div>
                            <div style="padding: 26px 22px; display: flex; flex-direction: column; flex-grow: 1;">
                                <div style="font-size: 12px; color: var(--afar-muted); font-weight: 600; margin-bottom: 10px;">
                                    <i class="fa fa-calendar me-1" style="color: var(--afar-accent);"></i> {{ $item['date'] }} &bull; Semera
                                </div>
                                <h4 style="font-weight: 800; color: var(--afar-navy); font-size: 1.15rem; line-height: 1.35; margin-bottom: 12px;">
                                    {{ __($item['title']) }}
                                </h4>
                                <p style="font-size: 0.9rem; line-height: 1.65; color: var(--afar-muted); margin-bottom: 18px; flex-grow: 1;">
                                    {{ __($item['excerpt']) }}
                                </p>
                                <div class="pt-3 border-top mt-auto">
                                    <a href="{{ route('contact', ['locale' => $locale]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 13px; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                        <span>{{ __('messages.news.readMore') }}</span>
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
