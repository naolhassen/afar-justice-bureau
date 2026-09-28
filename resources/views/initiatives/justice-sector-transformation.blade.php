@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <h1>{{ __('messages.nav.transformationRoadmap') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('messages.nav.home') }}</a></li>
                <li>{{ __('messages.nav.transformationRoadmap') }}</li>
            </ul>
        </div>
    </section>

    <!-- Content Section -->
    <section class="services-page-section" style="padding: 90px 0 60px;">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12">
                    <div class="inner-box" style="background: #fff; padding: 40px; border-radius: 16px; box-shadow: 0 5px 30px rgba(0,0,0,0.06);">
                        <span class="badge badge-primary mb-3" style="background: var(--justice-primary); font-size: 14px; padding: 6px 14px;">
                            Strategic Transformation
                        </span>
                        <h2 style="font-weight: 800; color: #00204c; margin-bottom: 20px;">
                            Justice Sector Transformation Roadmap (2025–2030)
                        </h2>
                        <p class="lead text-muted" style="line-height: 1.8;">
                            Mirroring the federal transformation vision spearheaded by the Federal Ministry of Justice (justice.gov.et), the Afar Regional State has formulated a comprehensive 5-year transformation roadmap to establish an efficient, accessible, and rights-respecting justice ecosystem.
                        </p>
                        <hr style="margin: 30px 0;">
                        <h4 style="font-weight: 700; color: #00204c; margin-bottom: 15px;">Strategic Transformation Goals</h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded" style="border-left: 4px solid var(--justice-primary); height: 100%;">
                                    <h5 style="font-weight: 700;">Equitable Universal Access</h5>
                                    <p class="text-muted small mb-0">Eliminating geographical, economic, and cultural barriers to legal representation for all pastoralist communities.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded" style="border-left: 4px solid var(--justice-gold); height: 100%;">
                                    <h5 style="font-weight: 700;">Human Rights Mainstreaming</h5>
                                    <p class="text-muted small mb-0">Embedding constitutional guarantees and universal human rights standards across every stage of the justice pipeline.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded" style="border-left: 4px solid var(--justice-primary); height: 100%;">
                                    <h5 style="font-weight: 700;">Speed & Efficiency of Case Disposal</h5>
                                    <p class="text-muted small mb-0">Reducing case backlogs, expediting pre-trial investigations, and guaranteeing swift adjudication.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded" style="border-left: 4px solid var(--justice-gold); height: 100%;">
                                    <h5 style="font-weight: 700;">Customary Justice Harmony</h5>
                                    <p class="text-muted small mb-0">Strengthening institutional synergy between informal clan elders (Mad'aa) and the regional formal judicial system.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-widget" style="background: #fff; padding: 30px; border-radius: 16px; box-shadow: 0 5px 30px rgba(0,0,0,0.06); margin-bottom: 30px;">
                        <h4 style="font-weight: 700; color: #00204c; border-bottom: 2px solid #eee; padding-bottom: 10px; margin-bottom: 20px;">
                            Key Initiatives
                        </h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="padding: 10px 0; border-bottom: 1px solid #f2f2f2;">
                                <a href="{{ route('initiatives.justice-sector-transformation', ['locale' => app()->getLocale()]) }}" style="color: var(--justice-primary); font-weight: 700;">
                                    &bull; {{ __('messages.nav.transformationRoadmap') }}
                                </a>
                            </li>
                            <li style="padding: 10px 0; border-bottom: 1px solid #f2f2f2;">
                                <a href="{{ route('initiatives.transitional-justice', ['locale' => app()->getLocale()]) }}" style="color: #555;">
                                    &bull; {{ __('messages.nav.transitionalJustice') }}
                                </a>
                            </li>
                            <li style="padding: 10px 0; border-bottom: 1px solid #f2f2f2;">
                                <a href="{{ route('initiatives.legal-institutional-reform', ['locale' => app()->getLocale()]) }}" style="color: #555;">
                                    &bull; {{ __('messages.nav.institutionalReform') }}
                                </a>
                            </li>
                            <li style="padding: 10px 0;">
                                <a href="{{ route('publications.strategy', ['locale' => app()->getLocale()]) }}" style="color: #555;">
                                    &bull; {{ __('messages.nav.strategy') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
