@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.partyProgram.title') }}"
        titleHighlight="{{ __('messages.pages.partyProgram.titleHighlight') }}"
        description="{{ __('messages.pages.partyProgram.description') }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="civic-card" style="border-top: 4px solid var(--afar-green);">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div style="width: 52px; height: 52px; border-radius: 14px; background: rgba(11, 122, 90, 0.12); color: var(--afar-green); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                                <i class="fa fa-university"></i>
                            </div>
                            <div>
                                <span class="civic-badge civic-badge-green mb-1" style="font-size: 10px;">Regional Program</span>
                                <h3 style="font-weight: 800; color: var(--afar-navy); margin: 0; font-size: 1.4rem;">
                                    {{ __('messages.pages.partyProgram.title') }} {{ __('messages.pages.partyProgram.titleHighlight') }}
                                </h3>
                            </div>
                        </div>

                        <p style="font-size: 1rem; line-height: 1.8; color: var(--afar-ink); margin-bottom: 24px;">
                            {{ __('messages.pages.partyProgram.description') }}
                        </p>

                        <div style="background: rgba(10,34,54,0.03); border: 1px solid var(--afar-border); border-left: 4px solid var(--afar-gold); border-radius: 14px; padding: 22px; margin-bottom: 24px;">
                            <h5 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Justice & Rule of Law Institutional Program</h5>
                            <p style="font-size: 0.92rem; line-height: 1.7; color: var(--afar-muted); margin: 0;">
                                Implementing strategic justice priorities, prosecutorial capacity-building, and expanding access to justice for vulnerable pastoral communities across the Afar Region.
                            </p>
                        </div>

                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ route('publications.strategy', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                                <span class="txt">5-Year Strategic Plan &rarr;</span>
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
