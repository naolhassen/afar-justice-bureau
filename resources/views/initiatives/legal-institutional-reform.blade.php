@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <span class="page-badge">
                        <i class="fa fa-institution"></i> {{ __('messages.nav.initiatives') }} &bull; Institutional Modernization
                    </span>
                    <h1>{{ __('messages.nav.institutionalReform') }}</h1>
                    <p class="lead-desc">
                        Modernizing regional statutory laws, strengthening prosecutorial standards, and constructing digital case infrastructure for responsive justice delivery.
                    </p>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="fa fa-home"></i> {{ __('messages.nav.home') }}</a></li>
                        <li><a href="#">{{ __('messages.nav.initiatives') }}</a></li>
                        <li><span>{{ __('messages.nav.institutionalReform') }}</span></li>
                    </ul>
                </div>
                <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                    <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(201, 151, 56, 0.4); border-radius: 20px; padding: 20px 24px; backdrop-filter: blur(8px); text-align: center;">
                        <span style="display: block; font-size: 11px; font-weight: 700; color: var(--afar-accent); letter-spacing: 0.14em; text-transform: uppercase;">
                            Reform Mandate
                        </span>
                        <div style="font-family: 'Bellefair', serif; font-size: 1.6rem; font-weight: 700; color: #fff; margin: 4px 0;">
                            Rule of Law
                        </div>
                        <span style="font-size: 12px; color: rgba(255,255,255,0.75);">Accountability & Digital Justice</span>
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
                            <span class="civic-badge civic-badge-green">
                                <i class="fa fa-gavel me-1"></i> Legal Modernization
                            </span>
                            <span style="font-size: 12px; color: var(--afar-muted); font-weight: 600;">
                                <i class="fa fa-check-circle me-1" style="color: var(--afar-green);"></i> Legislative Directorate
                            </span>
                        </div>

                        <h2 style="font-size: 1.85rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 16px; line-height: 1.25;">
                            Legal and Institutional Reform in the Afar Region
                        </h2>
                        
                        <p style="font-size: 1.05rem; line-height: 1.8; color: var(--afar-ink); margin-bottom: 24px;">
                            The Afar National Regional State Justice Bureau is carrying out an extensive review of regional statutes, repealing obsolete regulations, and introducing progressive legislative drafting guidelines that address the contemporary socio-economic realities of pastoralist communities while guaranteeing alignment with the Federal Constitution.
                        </p>

                        <!-- Key Workstreams -->
                        <h4 style="font-size: 1.25rem; font-weight: 800; color: var(--afar-navy); margin: 32px 0 18px; display: flex; align-items: center; gap: 10px;">
                            <span style="width: 4px; height: 22px; background: var(--afar-accent); border-radius: 2px;"></span>
                            Key Reform Workstreams
                        </h4>

                        <div class="row g-4">
                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-navy); border-radius: 14px; padding: 22px; height: 100%;">
                                    <div style="font-size: 1.6rem; color: var(--afar-navy); margin-bottom: 12px;">
                                        <i class="fa fa-book"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Legislative Modernization</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Systematic audit of regional proclamations, codifying scattered decrees, and drafting forward-looking economic and administrative bills.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-accent); border-radius: 14px; padding: 22px; height: 100%;">
                                    <div style="font-size: 1.6rem; color: var(--afar-accent); margin-bottom: 12px;">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Prosecutorial Excellence</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Intensive training programs in evidentiary forensics, criminal procedure standards, and ethical codes of conduct for state prosecutors.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-green); border-radius: 14px; padding: 22px; height: 100%;">
                                    <div style="font-size: 1.6rem; color: var(--afar-green); margin-bottom: 12px;">
                                        <i class="fa fa-laptop"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Digital Justice Systems</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Piloting online case registration, digitized case files, and public access portals to eliminate bureaucratic delays.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-navy-2); border-radius: 14px; padding: 22px; height: 100%;">
                                    <div style="font-size: 1.6rem; color: var(--afar-navy-2); margin-bottom: 12px;">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Citizen Grievance Redress</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Establishing accessible ombudsman counters and confidential complaint channels to maintain public trust in judicial administration.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Column -->
                <div class="col-lg-4 col-md-12">
                    <div class="civic-sidebar-widget">
                        <h4>Strategic Initiatives</h4>
                        <ul class="civic-menu-list">
                            <li>
                                <a href="{{ route('initiatives.legal-institutional-reform', ['locale' => app()->getLocale()]) }}" class="active">
                                    <span><i class="fa fa-angle-right me-2" style="color: var(--afar-accent);"></i> {{ __('messages.nav.institutionalReform') }}</span>
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
                                <a href="{{ route('publications.strategy', ['locale' => app()->getLocale()]) }}">
                                    <span><i class="fa fa-angle-right me-2" style="color: var(--afar-muted);"></i> {{ __('messages.nav.strategy') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Direct Helpline Box -->
                    <div class="civic-helpline-box">
                        <div class="icon">
                            <i class="fa fa-phone-square"></i>
                        </div>
                        <h4>Legal Reform Secretariat</h4>
                        <p>For legislative submissions, public hearing schedules, or stakeholder partnerships:</p>
                        <div class="phone">{{ __('messages.contact.phoneValue') }}</div>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one" style="width: 100%; justify-content: center;">
                            <span class="txt">Submit Feedback</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
