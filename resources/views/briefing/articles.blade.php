@extends('layouts.app')

@section('content')
@php
    $locale = app()->getLocale() ?: 'aa';
    $articles = [
        [
            'title' => 'Harmonizing Mad\'aa Customary Legal Codes with Constitutional Guarantees',
            'author' => 'messages.leaders.leader1Name',
            'date' => now()->format('M d, Y'),
            'excerpt' => 'A jurisprudential analysis on integrating traditional elder mediation mechanisms with universal human rights standards across pastoralist communities.',
            'img' => asset('images/gallery/gallery-08.jpg'),
            'tag' => 'Legal Jurisprudence',
        ],
        [
            'title' => 'Procedural Standards for Public Prosecutors in Regional Criminal Investigations',
            'author' => 'messages.leaders.leader2Name',
            'date' => now()->subDays(5)->format('M d, Y'),
            'excerpt' => 'An operational handbook examining evidential requirements, custody oversight, and asset forfeiture directives in regional prosecution branches.',
            'img' => asset('images/gallery/gallery-09.jpg'),
            'tag' => 'Prosecution Guidelines',
        ],
    ];
@endphp

    <x-page-hero
        title="{{ __('messages.pages.articles.title') }}"
        titleHighlight="{{ __('messages.pages.articles.titleHighlight') }}"
        description="{{ __('messages.pages.articles.description') }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="sec-title text-center mb-5">
                <span class="civic-badge civic-badge-navy mb-2">Legal Jurisprudence & Research</span>
                <h2 style="font-size: clamp(2rem, 3vw, 2.8rem); font-weight: 800; color: var(--afar-navy);">
                    {{ __('messages.pages.articles.title') }} <span>{{ __('messages.pages.articles.titleHighlight') }}</span>
                </h2>
                <div class="text" style="max-width: 720px; margin: 12px auto 0; font-size: 1rem; color: var(--afar-muted);">
                    Scholarly legal insights, prosecutorial analysis, and statutory reviews authored by regional jurists.
                </div>
            </div>

            <div class="row g-4">
                @foreach ($articles as $item)
                    <div class="col-lg-6 mb-4">
                        <div class="civic-card h-100 d-flex flex-column" style="padding: 0; overflow: hidden;">
                            <div style="height: 240px; width: 100%; overflow: hidden; position: relative;">
                                <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" style="width: 100%; height: 100%; object-fit: cover;">
                                <span class="civic-badge civic-badge-gold" style="position: absolute; top: 14px; left: 14px; font-size: 11px;">
                                    {{ $item['tag'] }}
                                </span>
                            </div>
                            <div style="padding: 28px 24px; display: flex; flex-direction: column; flex-grow: 1;">
                                <div style="font-size: 12px; color: var(--afar-muted); font-weight: 600; margin-bottom: 10px;">
                                    <i class="fa fa-user me-1" style="color: var(--afar-accent);"></i> {{ __($item['author']) }} &bull; {{ $item['date'] }}
                                </div>
                                <h4 style="font-weight: 800; color: var(--afar-navy); font-size: 1.25rem; line-height: 1.35; margin-bottom: 12px;">
                                    {{ $item['title'] }}
                                </h4>
                                <p style="font-size: 0.92rem; line-height: 1.7; color: var(--afar-muted); margin-bottom: 20px; flex-grow: 1;">
                                    {{ $item['excerpt'] }}
                                </p>
                                <div class="pt-3 border-top mt-auto">
                                    <a href="{{ route('contact', ['locale' => $locale]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 13px; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                        <span>Request Full Research Paper</span>
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
