@extends('layouts.app')

@section('content')
@php
    $locale = app()->getLocale() ?: 'aa';
    $releases = [
        [
            'title' => 'Official Communiqué on the Expansion of Pastoralist Legal Aid & Customary Harmonization',
            'desc' => 'The Afar National Regional State Justice Bureau announces the operational rollout of mobile circuit legal counseling desks across remote pastoralist woredas and reinforces customary Mad\'aa harmonization guidelines.',
            'date' => now()->format('M d, Y'),
            'ref' => 'PR-AFAR-2025/01',
        ],
    ];
@endphp

    <x-page-hero
        :title="__('messages.pages.pressRelease.title')"
        :titleHighlight="__('messages.pages.pressRelease.titleHighlight')"
        :description="__('messages.pages.pressRelease.description')"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    @foreach ($releases as $item)
                        <div class="civic-card" style="border-top: 4px solid var(--afar-gold);">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                                <span class="civic-badge civic-badge-navy">{{ $item['ref'] }}</span>
                                <span style="font-size: 12px; color: var(--afar-muted); font-weight: 600;">
                                    <i class="fa fa-calendar me-1" style="color: var(--afar-gold);"></i> {{ $item['date'] }} &bull; Semera
                                </span>
                            </div>
                            <h3 style="font-weight: 800; color: var(--afar-navy); font-size: 1.45rem; line-height: 1.35; margin-bottom: 14px;">
                                {{ $item['title'] }}
                            </h3>
                            <p style="font-size: 1rem; line-height: 1.8; color: var(--afar-ink); margin-bottom: 24px;">
                                {{ $item['desc'] }}
                            </p>
                            <div style="background: rgba(10,34,54,0.03); border: 1px solid var(--afar-border); border-radius: 14px; padding: 22px; margin-bottom: 24px;">
                                <h6 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 6px;">Executive Communications Office</h6>
                                <p style="font-size: 0.9rem; color: var(--afar-muted); line-height: 1.6; margin-bottom: 4px;">
                                    Afar National Regional State Justice Bureau Headquarters, Semera, Ethiopia.
                                </p>
                                <p style="font-size: 0.9rem; margin: 0;">
                                    Media Desk: <a href="mailto:{{ __('messages.contact.emailValue') }}" style="color: var(--afar-gold-dark); font-weight: 700;">{{ __('messages.contact.emailValue') }}</a>
                                </p>
                            </div>
                            <a href="mailto:{{ __('messages.contact.emailValue') }}?subject=Press Inquiry - {{ $item['ref'] }}" class="theme-btn btn-style-one">
                                <span class="txt"><i class="fa fa-microphone me-2"></i> Media Inquiries Desk &rarr;</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
