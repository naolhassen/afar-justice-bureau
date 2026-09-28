@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <h1>{{ __('messages.nav.transitionalJustice') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('messages.nav.home') }}</a></li>
                <li>{{ __('messages.nav.transitionalJustice') }}</li>
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
                            Regional Justice Policy
                        </span>
                        <h2 style="font-weight: 800; color: #00204c; margin-bottom: 20px;">
                            Transitional Justice Policy Implementation in Afar Region
                        </h2>
                        <p class="lead text-muted" style="line-height: 1.8;">
                            In line with the Federal Democratic Republic of Ethiopia’s National Transitional Justice Policy, the Afar National Regional State Justice Bureau is spearheading regional initiatives that weave truth-seeking, reconciliation, reparations, and institutional guarantees of non-recurrence.
                        </p>
                        <hr style="margin: 30px 0;">
                        <h4 style="font-weight: 700; color: #00204c; margin-bottom: 15px;">Four Pillars of the Transitional Justice Framework</h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded" style="border-left: 4px solid var(--justice-primary); height: 100%;">
                                    <h5 style="font-weight: 700;">1. Truth-Seeking & Documentation</h5>
                                    <p class="text-muted small mb-0">Documenting past human rights grievances, community conflicts, and establishing impartial historical records.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded" style="border-left: 4px solid var(--justice-gold); height: 100%;">
                                    <h5 style="font-weight: 700;">2. Customary Reconciliation (Mad'aa)</h5>
                                    <p class="text-muted small mb-0">Harnessing time-honored Afar customary resolution mechanisms to facilitate healing and inter-communal harmony.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded" style="border-left: 4px solid var(--justice-primary); height: 100%;">
                                    <h5 style="font-weight: 700;">3. Reparations & Victim Support</h5>
                                    <p class="text-muted small mb-0">Providing targeted rehabilitative support, pro-bono legal advocacy, and restorative measures for impacted victims.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded" style="border-left: 4px solid var(--justice-gold); height: 100%;">
                                    <h5 style="font-weight: 700;">4. Institutional Reform</h5>
                                    <p class="text-muted small mb-0">Reforming law enforcement, prosecutorial services, and judicial oversight to guarantee non-repetition.</p>
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
                                <a href="{{ route('initiatives.transitional-justice', ['locale' => app()->getLocale()]) }}" style="color: var(--justice-primary); font-weight: 700;">
                                    &bull; {{ __('messages.nav.transitionalJustice') }}
                                </a>
                            </li>
                            <li style="padding: 10px 0; border-bottom: 1px solid #f2f2f2;">
                                <a href="{{ route('initiatives.legal-institutional-reform', ['locale' => app()->getLocale()]) }}" style="color: #555;">
                                    &bull; {{ __('messages.nav.institutionalReform') }}
                                </a>
                            </li>
                            <li style="padding: 10px 0; border-bottom: 1px solid #f2f2f2;">
                                <a href="{{ route('initiatives.justice-sector-transformation', ['locale' => app()->getLocale()]) }}" style="color: #555;">
                                    &bull; {{ __('messages.nav.transformationRoadmap') }}
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
