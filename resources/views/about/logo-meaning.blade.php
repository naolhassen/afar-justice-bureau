@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.logoMeaning.title') }}"
        titleHighlight="{{ __('messages.pages.logoMeaning.titleHighlight') }}"
        description="{{ __('messages.pages.logoMeaning.description') }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5 text-center mb-4 mb-lg-0">
                    <div class="civic-card" style="padding: 40px; display: inline-block;">
                        <img src="{{ asset('logo.png') }}" alt="{{ __('messages.metadata.title') }}" style="max-width: 260px; width: 100%; object-fit: contain; filter: drop-shadow(0 10px 24px rgba(0,0,0,0.12));">
                        <div style="margin-top: 18px; font-weight: 800; font-size: 13px; color: var(--afar-navy); letter-spacing: 0.1em; text-transform: uppercase;">
                            Official Bureau Seal
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="civic-card">
                        <span class="civic-badge civic-badge-gold mb-2">Iconography & Symbolism</span>
                        <h2 style="font-size: 1.85rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 16px; line-height: 1.25;">
                            {{ __('messages.pages.logoMeaning.title') }} <span>{{ __('messages.pages.logoMeaning.titleHighlight') }}</span>
                        </h2>
                        <p style="font-size: 1rem; line-height: 1.8; color: var(--afar-ink); margin-bottom: 24px;">
                            {{ __('messages.pages.logoMeaning.description') }}
                        </p>

                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 4px solid var(--afar-gold); border-radius: 12px; padding: 20px; height: 100%;">
                                    <h6 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 6px; font-size: 1rem;">
                                        <i class="fa fa-balance-scale" style="color: var(--afar-gold); margin-right: 6px;"></i> The Scales of Justice
                                    </h6>
                                    <p style="font-size: 0.88rem; color: var(--afar-muted); line-height: 1.6; margin: 0;">
                                        Symbolizes absolute impartiality, equality of all citizens before the law, and truth-guided adjudication without prejudice.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 4px solid var(--afar-green); border-radius: 12px; padding: 20px; height: 100%;">
                                    <h6 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 6px; font-size: 1rem;">
                                        <i class="fa fa-shield" style="color: var(--afar-green); margin-right: 6px;"></i> The Protective Emblem
                                    </h6>
                                    <p style="font-size: 0.88rem; color: var(--afar-muted); line-height: 1.6; margin: 0;">
                                        Represents the preservation of peace, territorial stability, and shielding pastoralist human rights under constitutional safeguards.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
