@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.formation.title') }}"
        titleHighlight="{{ __('messages.pages.formation.titleHighlight') }}"
        description="{{ __('messages.pages.formation.description') }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="civic-card" style="padding: 16px;">
                        <img src="{{ asset('images/gallery/gallery-07.jpg') }}" alt="Afar Regional Justice Bureau History" style="border-radius: 16px; width: 100%; height: 380px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="civic-card">
                        <span class="civic-badge civic-badge-navy mb-2">Historical Milestones</span>
                        <h2 style="font-size: 1.85rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 16px; line-height: 1.25;">
                            {{ __('messages.pages.formation.title') }} <span>{{ __('messages.pages.formation.titleHighlight') }}</span>
                        </h2>
                        <p style="font-size: 1rem; line-height: 1.8; color: var(--afar-ink); margin-bottom: 20px;">
                            {{ __('messages.pages.formation.description') }}
                        </p>
                        <div style="background: rgba(10,34,54,0.03); border: 1px solid var(--afar-border); border-left: 4px solid var(--afar-accent); border-radius: 12px; padding: 20px; margin-bottom: 24px;">
                            <h5 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 6px; font-size: 1.05rem;">
                                <i class="fa fa-institution me-1" style="color: var(--afar-accent);"></i> Foundational Purpose
                            </h5>
                            <p style="font-size: 0.9rem; line-height: 1.7; color: var(--afar-muted); margin: 0;">
                                Established to provide structured institutional governance, enforce constitutional safeguards, and build bridges between formal jurisprudence and traditional Afar customary arbitration (<em>Mad'aa</em>).
                            </p>
                        </div>
                        <a href="{{ route('about.vision-mission', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                            <span class="txt">Vision & Mission &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
