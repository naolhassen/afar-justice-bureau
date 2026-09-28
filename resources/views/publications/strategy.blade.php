@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <h1>{{ __('messages.nav.strategy') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('messages.nav.home') }}</a></li>
                <li>{{ __('messages.nav.strategy') }}</li>
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
                            Official Strategic Plan
                        </span>
                        <h2 style="font-weight: 800; color: #00204c; margin-bottom: 20px;">
                            Afar National Regional State Justice Bureau 5-Year Strategic Plan (2025–2030)
                        </h2>
                        <p class="lead text-muted" style="line-height: 1.8;">
                            The 5-Year Strategic Plan sets the institutional direction, resource allocation, and key performance indicators for the Afar Justice Bureau to achieve excellence in prosecution, rule of law, and citizen-centered justice delivery.
                        </p>
                        <hr style="margin: 30px 0;">
                        <h4 style="font-weight: 700; color: #00204c; margin-bottom: 15px;">Strategic Priorities</h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded" style="border-left: 4px solid var(--justice-primary); height: 100%;">
                                    <h5 style="font-weight: 700;">Priority 1: Rule of Law & Public Prosecution</h5>
                                    <p class="text-muted small mb-0">95%+ timely resolution of public prosecution caseloads and reduction of pre-trial detention durations.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded" style="border-left: 4px solid var(--justice-gold); height: 100%;">
                                    <h5 style="font-weight: 700;">Priority 2: Customary Justice Integration</h5>
                                    <p class="text-muted small mb-0">Formalizing collaborative protocols with customary clan leaders (Mad'aa) while upholding constitutional human rights.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded" style="border-left: 4px solid var(--justice-primary); height: 100%;">
                                    <h5 style="font-weight: 700;">Priority 3: Free Legal Aid Expansion</h5>
                                    <p class="text-muted small mb-0">Establishing legal defense clinics in 100% of Afar woredas with specialized support for women and children.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="p-3 bg-light rounded" style="border-left: 4px solid var(--justice-gold); height: 100%;">
                                    <h5 style="font-weight: 700;">Priority 4: Digital Justice & Transparency</h5>
                                    <p class="text-muted small mb-0">Deploying cloud-based case tracking and open public access to regional proclamations and court decisions.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="text-muted"><i class="fa fa-file-pdf-o text-danger me-1"></i> Full Strategy Document (PDF)</span>
                            <a href="#" class="theme-btn btn-style-one"><span class="txt">Download Strategic Plan</span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-widget" style="background: #fff; padding: 30px; border-radius: 16px; box-shadow: 0 5px 30px rgba(0,0,0,0.06); margin-bottom: 30px;">
                        <h4 style="font-weight: 700; color: #00204c; border-bottom: 2px solid #eee; padding-bottom: 10px; margin-bottom: 20px;">
                            Related Publications
                        </h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="padding: 10px 0; border-bottom: 1px solid #f2f2f2;">
                                <a href="{{ route('publications.strategy', ['locale' => app()->getLocale()]) }}" style="color: var(--justice-primary); font-weight: 700;">
                                    &bull; {{ __('messages.nav.strategy') }}
                                </a>
                            </li>
                            <li style="padding: 10px 0; border-bottom: 1px solid #f2f2f2;">
                                <a href="{{ route('initiatives.transformationRoadmap', ['locale' => app()->getLocale()]) }}" style="color: #555;">
                                    &bull; {{ __('messages.nav.transformationRoadmap') }}
                                </a>
                            </li>
                            <li style="padding: 10px 0; border-bottom: 1px solid #f2f2f2;">
                                <a href="{{ route('resources.laws', ['locale' => app()->getLocale()]) }}" style="color: #555;">
                                    &bull; {{ __('messages.nav.laws') }}
                                </a>
                            </li>
                            <li style="padding: 10px 0;">
                                <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}" style="color: #555;">
                                    &bull; {{ __('messages.nav.news') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
