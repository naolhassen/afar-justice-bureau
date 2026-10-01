@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <span class="page-badge">
                        <i class="fa fa-compass"></i> {{ __('messages.nav.initiatives') }} &bull; Strategic Horizon
                    </span>
                    <h1>{{ __('messages.nav.transformationRoadmap') }}</h1>
                    <p class="lead-desc">
                        A comprehensive regional blueprint formulating strategic policies, institutional modernisation, and pastoralist legal protection across all zones of the Afar National Regional State.
                    </p>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="fa fa-home"></i> {{ __('messages.nav.home') }}</a></li>
                        <li><a href="#">{{ __('messages.nav.initiatives') }}</a></li>
                        <li><span>{{ __('messages.nav.transformationRoadmap') }}</span></li>
                    </ul>
                </div>
                <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                    <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(201, 151, 56, 0.4); border-radius: 20px; padding: 20px 24px; backdrop-filter: blur(8px); text-align: center;">
                        <span style="display: block; font-size: 11px; font-weight: 700; color: var(--afar-gold); letter-spacing: 0.14em; text-transform: uppercase;">
                            Roadmap Timeline
                        </span>
                        <div style="font-family: 'Oswald', sans-serif; font-size: 2.1rem; font-weight: 700; color: #fff; margin: 4px 0;">
                            2025 &ndash; 2030
                        </div>
                        <span style="font-size: 12px; color: rgba(255,255,255,0.75);">5-Year Transformation Cycle</span>
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
                            <span class="civic-badge civic-badge-navy">
                                <i class="fa fa-bookmark me-1"></i> Strategic Transformation
                            </span>
                            <span style="font-size: 12px; color: var(--afar-muted); font-weight: 600;">
                                <i class="fa fa-map-marker me-1" style="color: var(--afar-gold);"></i> Semera, Afar Regional State
                            </span>
                        </div>

                        <h2 style="font-size: 1.85rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 16px; line-height: 1.25;">
                            Afar Justice Sector Transformation Roadmap (2025–2030)
                        </h2>
                        
                        <p style="font-size: 1.05rem; line-height: 1.8; color: var(--afar-ink); margin-bottom: 24px;">
                            Aligned with the overarching national justice vision championed by the Federal Ministry of Justice (<a href="https://justice.gov.et" target="_blank" rel="noopener" style="color: var(--afar-green); font-weight: 700; text-decoration: underline;">justice.gov.et</a>), the Afar National Regional State Justice Bureau has formulated a milestone-driven 5-year transformation plan designed to overcome regional geographical dispersion, enhance pastoralist access, and entrench the supremacy of constitutional law.
                        </p>

                        <!-- Key Pillars Grid -->
                        <h4 style="font-size: 1.25rem; font-weight: 800; color: var(--afar-navy); margin: 32px 0 18px; display: flex; align-items: center; gap: 10px;">
                            <span style="width: 4px; height: 22px; background: var(--afar-gold); border-radius: 2px;"></span>
                            Core Transformation Pillars
                        </h4>

                        <div class="row g-4">
                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-navy); border-radius: 14px; padding: 22px; height: 100%; transition: all 0.2s ease;">
                                    <div style="font-size: 1.6rem; color: var(--afar-navy); margin-bottom: 12px;">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Equitable Pastoral Access</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Eliminating geographical and financial barriers through mobile circuit courts and pro-bono legal counsel clinics for remote pastoralist communities.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-gold); border-radius: 14px; padding: 22px; height: 100%; transition: all 0.2s ease;">
                                    <div style="font-size: 1.6rem; color: var(--afar-gold); margin-bottom: 12px;">
                                        <i class="fa fa-handshake-o"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Customary Justice Harmony</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Fostering constructive synergy between the customary Afar dispute resolution system (<em>Mad'aa</em>) and constitutional human rights frameworks.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-green); border-radius: 14px; padding: 22px; height: 100%; transition: all 0.2s ease;">
                                    <div style="font-size: 1.6rem; color: var(--afar-green); margin-bottom: 12px;">
                                        <i class="fa fa-shield"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Human Rights Mainstreaming</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Rigorous oversight of police custody, detention facilities, due process protections, and legal aid representation for women and children.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-navy-2); border-radius: 14px; padding: 22px; height: 100%; transition: all 0.2s ease;">
                                    <div style="font-size: 1.6rem; color: var(--afar-navy-2); margin-bottom: 12px;">
                                        <i class="fa fa-flash"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">Speedy Case Disposal</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Implementing electronic case registers, tracking docket backlogs, and certifying prosecutorial proficiency across all 32+ regional woredas.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Expected Strategic Outcomes -->
                        <div style="margin-top: 30px; background: rgba(11, 122, 90, 0.06); border: 1px solid rgba(11, 122, 90, 0.2); border-radius: 16px; padding: 26px;">
                            <h5 style="font-weight: 800; color: var(--afar-green); margin-bottom: 14px; font-size: 1.1rem;">
                                <i class="fa fa-check-circle me-1"></i> Key Anticipated 2030 Milestones
                            </h5>
                            <ul style="list-style: none; padding: 0; margin: 0; line-height: 1.9; font-size: 0.95rem; color: var(--afar-ink);">
                                <li style="display: flex; align-items: baseline; gap: 10px; margin-bottom: 8px;">
                                    <i class="fa fa-chevron-right" style="color: var(--afar-gold); font-size: 11px;"></i>
                                    <span><strong>100% Woreda Legal Aid Coverage:</strong> Fully operational public defense and counseling desks across all regional administrative divisions.</span>
                                </li>
                                <li style="display: flex; align-items: baseline; gap: 10px; margin-bottom: 8px;">
                                    <i class="fa fa-chevron-right" style="color: var(--afar-gold); font-size: 11px;"></i>
                                    <span><strong>Standardized Customary Recording:</strong> Codified harmonization guidelines ensuring clan settlements fully respect women and child rights.</span>
                                </li>
                                <li style="display: flex; align-items: baseline; gap: 10px;">
                                    <i class="fa fa-chevron-right" style="color: var(--afar-gold); font-size: 11px;"></i>
                                    <span><strong>Unified Digital Docket System:</strong> Real-time prosecutorial filing, evidence tracking, and custodial compliance monitoring.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Column -->
                <div class="col-lg-4 col-md-12">
                    <div class="civic-sidebar-widget">
                        <h4>Strategic Initiatives</h4>
                        <ul class="civic-menu-list">
                            <li>
                                <a href="{{ route('initiatives.justice-sector-transformation', ['locale' => app()->getLocale()]) }}" class="active">
                                    <span><i class="fa fa-angle-right me-2" style="color: var(--afar-gold);"></i> {{ __('messages.nav.transformationRoadmap') }}</span>
                                    <span class="civic-badge civic-badge-gold" style="font-size: 10px; padding: 3px 8px;">Active</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('initiatives.transitional-justice', ['locale' => app()->getLocale()]) }}">
                                    <span><i class="fa fa-angle-right me-2" style="color: var(--afar-muted);"></i> {{ __('messages.nav.transitionalJustice') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('initiatives.legal-institutional-reform', ['locale' => app()->getLocale()]) }}">
                                    <span><i class="fa fa-angle-right me-2" style="color: var(--afar-muted);"></i> {{ __('messages.nav.institutionalReform') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('publications.strategy', ['locale' => app()->getLocale()]) }}">
                                    <span><i class="fa fa-angle-right me-2" style="color: var(--afar-muted);"></i> {{ __('messages.nav.strategy') }}</span>
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
                            <i class="fa fa-balance-scale"></i>
                        </div>
                        <h4>Transformation Taskforce</h4>
                        <p>Inquiries regarding stakeholder consultations, woreda deployments, or policy feedback:</p>
                        <div class="phone">{{ __('messages.contact.phoneValue') }}</div>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one" style="width: 100%; justify-content: center;">
                            <span class="txt">Submit Inquiry</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
