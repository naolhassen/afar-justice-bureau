@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.manifesto.title') }}"
        titleHighlight="{{ __('messages.pages.manifesto.titleHighlight') }}"
        description="{{ __('messages.pages.manifesto.description') }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="civic-card" style="border-top: 4px solid var(--afar-accent);">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div style="width: 52px; height: 52px; border-radius: 14px; background: rgba(201, 151, 56, 0.14); color: var(--afar-accent); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                                <i class="fa fa-book"></i>
                            </div>
                            <div>
                                <span class="civic-badge civic-badge-gold mb-1" style="font-size: 10px;">Citizen Service Standard</span>
                                <h3 style="font-weight: 800; color: var(--afar-navy); margin: 0; font-size: 1.4rem;">
                                    {{ __('messages.pages.manifesto.title') }} {{ __('messages.pages.manifesto.titleHighlight') }}
                                </h3>
                            </div>
                        </div>

                        <p style="font-size: 1rem; line-height: 1.8; color: var(--afar-ink); margin-bottom: 24px;">
                            {{ __('messages.pages.manifesto.description') }}
                        </p>

                        <div style="background: rgba(10,34,54,0.03); border: 1px solid var(--afar-border); border-left: 4px solid var(--afar-navy); border-radius: 14px; padding: 22px; margin-bottom: 24px;">
                            <h5 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Our Core Commitment to Litigants & Citizens</h5>
                            <p style="font-size: 0.92rem; line-height: 1.7; color: var(--afar-muted); margin: 0;">
                                Every citizen seeking justice, legal defense, or prosecutorial review is entitled to prompt reception, impartial assessment, and clear explanations in their native language without administrative obstruction.
                            </p>
                        </div>

                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                                <span class="txt">Submit Service Inquiry &rarr;</span>
                            </a>
                            <a href="{{ route('about.vision-mission', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-two">
                                <span class="txt">{{ __('messages.nav.visionMission') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
