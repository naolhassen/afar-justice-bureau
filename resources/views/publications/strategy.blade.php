@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <span class="page-badge">
                        <i class="fa fa-line-chart"></i> Strategic Planning &bull; 2025–2030
                    </span>
                    <h1>{{ __('messages.nav.strategy') }}</h1>
                    <p class="lead-desc">
                        The 5-Year Institutional Strategic Framework directing public prosecution excellence, pastoralist legal empowerment, and structural justice reform.
                    </p>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="fa fa-home"></i> {{ __('messages.nav.home') }}</a></li>
                        <li><a href="#">{{ __('messages.nav.resources') }}</a></li>
                        <li><span>{{ __('messages.nav.strategy') }}</span></li>
                    </ul>
                </div>
                <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                    <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(201, 151, 56, 0.4); border-radius: 20px; padding: 20px 24px; backdrop-filter: blur(8px); text-align: center;">
                        <span style="display: block; font-size: 11px; font-weight: 700; color: var(--afar-gold); letter-spacing: 0.14em; text-transform: uppercase;">
                            Plan Horizon
                        </span>
                        <div style="font-family: 'Oswald', sans-serif; font-size: 2.1rem; font-weight: 700; color: #fff; margin: 4px 0;">
                            2025 &ndash; 2030
                        </div>
                        <span style="font-size: 12px; color: rgba(255,255,255,0.75);">Executive Council Ratified</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="civic-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Main Content Column -->
                <div class="col-lg-8 col-md-12">
                    <div class="civic-card">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <span class="civic-badge civic-badge-gold">
                                <i class="fa fa-bookmark me-1"></i> Official Strategic Plan
                            </span>
                            <span style="font-size: 12px; color: var(--afar-muted); font-weight: 600;">
                                <i class="fa fa-map-marker me-1" style="color: var(--afar-gold);"></i> Semera, Afar Regional State
                            </span>
                        </div>

                        <h2 style="font-size: 1.85rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 16px; line-height: 1.25;">
                            Afar National Regional State Justice Bureau 5-Year Strategic Plan (2025–2030)
                        </h2>
                        
                        <p style="font-size: 1.05rem; line-height: 1.8; color: var(--afar-ink); margin-bottom: 24px;">
                            The 5-Year Strategic Plan sets the institutional direction, resource allocation, and key performance indicators for the Afar Justice Bureau to achieve excellence in prosecution, rule of law, and citizen-centered justice delivery.
                        </p>

                        <!-- Strategic Priorities Grid -->
                        <h4 style="font-size: 1.25rem; font-weight: 800; color: var(--afar-navy); margin: 32px 0 18px; display: flex; align-items: center; gap: 10px;">
                            <span style="width: 4px; height: 22px; background: var(--afar-gold); border-radius: 2px;"></span>
                            Four Strategic Pillars
                        </h4>

                        <div class="row g-4">
                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-navy); border-radius: 14px; padding: 22px; height: 100%;">
                                    <div style="font-size: 1.5rem; color: var(--afar-navy); margin-bottom: 10px;">
                                        <i class="fa fa-gavel"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Priority 1: Rule of Law & Prosecution</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        95%+ timely resolution of public prosecution caseloads and strict reduction of pre-trial detention durations across all regional courts.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-gold); border-radius: 14px; padding: 22px; height: 100%;">
                                    <div style="font-size: 1.5rem; color: var(--afar-gold); margin-bottom: 10px;">
                                        <i class="fa fa-handshake-o"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Priority 2: Customary Justice Integration</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Formalizing collaborative protocols with customary clan leaders (<em>Mad'aa</em>) while guaranteeing universal constitutional human rights standards.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-green); border-radius: 14px; padding: 22px; height: 100%;">
                                    <div style="font-size: 1.5rem; color: var(--afar-green); margin-bottom: 10px;">
                                        <i class="fa fa-balance-scale"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Priority 3: Free Legal Aid Expansion</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Establishing functional legal defense and counseling clinics in 100% of Afar woredas with specialized priority for women and children.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-navy-2); border-radius: 14px; padding: 22px; height: 100%;">
                                    <div style="font-size: 1.5rem; color: var(--afar-navy-2); margin-bottom: 10px;">
                                        <i class="fa fa-laptop"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Priority 4: Digital Justice & Transparency</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Deploying electronic case tracking, digital archives of regional proclamations, and open citizen access counters.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Download Callout -->
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mt-4 pt-4 border-top">
                            <div>
                                <span style="font-weight: 700; color: var(--afar-navy); display: block;">Full Strategic Plan Document (2025–2030)</span>
                                <span style="font-size: 12px; color: var(--afar-muted);">Official Publication &bull; Afar Regional Government</span>
                            </div>
                            <a href="#" class="theme-btn btn-style-one" onclick="event.preventDefault(); alert('The full strategic document is available from the Semera Headquarters Planning Directorate.');">
                                <span class="txt"><i class="fa fa-download me-1"></i> Request Copy &rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Column -->
                <div class="col-lg-4 col-md-12">
                    <div class="civic-sidebar-widget">
                        <h4>Publications & Strategy</h4>
                        <ul class="civic-menu-list">
                            <li>
                                <a href="{{ route('publications.strategy', ['locale' => app()->getLocale()]) }}" class="active">
                                    <span><i class="fa fa-angle-right me-2" style="color: var(--afar-gold);"></i> {{ __('messages.nav.strategy') }}</span>
                                    <span class="civic-badge civic-badge-gold" style="font-size: 10px; padding: 3px 8px;">Active</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('initiatives.justice-sector-transformation', ['locale' => app()->getLocale()]) }}">
                                    <span><i class="fa fa-angle-right me-2" style="color: var(--afar-muted);"></i> {{ __('messages.nav.transformationRoadmap') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('initiatives.transitional-justice', ['locale' => app()->getLocale()]) }}">
                                    <span><i class="fa fa-angle-right me-2" style="color: var(--afar-muted);"></i> {{ __('messages.nav.transitionalJustice') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('resources.laws', ['locale' => app()->getLocale()]) }}">
                                    <span><i class="fa fa-angle-right me-2" style="color: var(--afar-muted);"></i> {{ __('messages.nav.laws') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Direct Helpline Box -->
                    <div class="civic-helpline-box">
                        <div class="icon">
                            <i class="fa fa-phone-square"></i>
                        </div>
                        <h4>Policy Directorate</h4>
                        <p>For inquiries regarding strategic KPIs, woreda development data, or partnerships:</p>
                        <div class="phone">{{ __('messages.contact.phoneValue') }}</div>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one" style="width: 100%; justify-content: center;">
                            <span class="txt">Contact Desk</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
