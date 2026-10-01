@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <span class="page-badge">
                        <i class="fa fa-gavel"></i> {{ __('messages.nav.initiatives') }} &bull; Regional Healing & Justice
                    </span>
                    <h1>{{ __('messages.nav.transitionalJustice') }}</h1>
                    <p class="lead-desc">
                        Implementing the national transitional justice architecture in the Afar Region: establishing historical truth, healing past grievances through Mad'aa arbitration, and safeguarding non-recurrence.
                    </p>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="fa fa-home"></i> {{ __('messages.nav.home') }}</a></li>
                        <li><a href="#">{{ __('messages.nav.initiatives') }}</a></li>
                        <li><span>{{ __('messages.nav.transitionalJustice') }}</span></li>
                    </ul>
                </div>
                <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                    <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(201, 151, 56, 0.4); border-radius: 20px; padding: 20px 24px; backdrop-filter: blur(8px); text-align: center;">
                        <span style="display: block; font-size: 11px; font-weight: 700; color: var(--afar-gold); letter-spacing: 0.14em; text-transform: uppercase;">
                            Guiding Principle
                        </span>
                        <div style="font-family: 'Bellefair', serif; font-size: 1.6rem; font-weight: 700; color: #fff; margin: 4px 0;">
                            Truth & Reconciliation
                        </div>
                        <span style="font-size: 12px; color: rgba(255,255,255,0.75);">Customary & Constitutional Synergy</span>
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
                                <i class="fa fa-balance-scale me-1"></i> Regional Justice Policy
                            </span>
                            <span style="font-size: 12px; color: var(--afar-muted); font-weight: 600;">
                                <i class="fa fa-check-circle me-1" style="color: var(--afar-green);"></i> Adopted by Afar Regional Council
                            </span>
                        </div>

                        <h2 style="font-size: 1.85rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 16px; line-height: 1.25;">
                            Transitional Justice Policy Implementation in Afar Region
                        </h2>
                        
                        <p style="font-size: 1.05rem; line-height: 1.8; color: var(--afar-ink); margin-bottom: 24px;">
                            In line with the Federal Democratic Republic of Ethiopia’s National Transitional Justice Policy, the Afar National Regional State Justice Bureau is operationalizing regional consultative platforms. By integrating formal criminal accountability with the Afar customary resolution system (<em>Mad'aa</em>), the policy ensures justice is both culturally rooted and uncompromising in upholding constitutional human rights.
                        </p>

                        <!-- Four Pillars Grid -->
                        <h4 style="font-size: 1.25rem; font-weight: 800; color: var(--afar-navy); margin: 32px 0 18px; display: flex; align-items: center; gap: 10px;">
                            <span style="width: 4px; height: 22px; background: var(--afar-gold); border-radius: 2px;"></span>
                            Four Cornerstones of the Policy
                        </h4>

                        <div class="row g-4">
                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-navy); border-radius: 14px; padding: 22px; height: 100%;">
                                    <div style="font-size: 1.6rem; color: var(--afar-navy); margin-bottom: 12px;">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">1. Truth-Seeking & Documentation</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Documenting historical human rights grievances, border-corridor clashes, and establishing transparent records through community-led witness hearings.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-gold); border-radius: 14px; padding: 22px; height: 100%;">
                                    <div style="font-size: 1.6rem; color: var(--afar-gold); margin-bottom: 12px;">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">2. Customary Reconciliation (Mad'aa)</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Engaging revered clan leaders (<em>Makabantto</em>) and traditional customary jurists to facilitate inter-communal dialogue, healing, and restitution.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-green); border-radius: 14px; padding: 22px; height: 100%;">
                                    <div style="font-size: 1.6rem; color: var(--afar-green); margin-bottom: 12px;">
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">3. Reparations & Victim Rehabilitation</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Providing psychosocial support, pro-bono legal counsel, and community restitution funds for vulnerable displaced pastoralist families.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 5px solid var(--afar-navy-2); border-radius: 14px; padding: 22px; height: 100%;">
                                    <div style="font-size: 1.6rem; color: var(--afar-navy-2); margin-bottom: 12px;">
                                        <i class="fa fa-university"></i>
                                    </div>
                                    <h5 style="font-size: 1.05rem; font-weight: 800; color: var(--afar-navy); margin-bottom: 8px;">4. Institutional Guarantees</h5>
                                    <p style="font-size: 0.9rem; line-height: 1.6; color: var(--afar-muted); margin-bottom: 0;">
                                        Strengthening accountability mechanisms within regional police, prosecutorial services, and custodial detention centers to guarantee non-recurrence.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Special Focus Callout -->
                        <div style="margin-top: 30px; background: rgba(10, 34, 54, 0.03); border: 1px solid var(--afar-border); border-radius: 16px; padding: 26px;">
                            <h5 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 12px; font-size: 1.1rem;">
                                <i class="fa fa-info-circle me-1" style="color: var(--afar-gold);"></i> Public Participation & Submissions
                            </h5>
                            <p style="font-size: 0.95rem; color: var(--afar-muted); line-height: 1.7; margin-bottom: 0;">
                                Pastoral communities, civil society representatives, and community elders are encouraged to participate in woreda consultations or submit official documentation to the Regional Transitional Justice Secretariat in Semera.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Column -->
                <div class="col-lg-4 col-md-12">
                    <div class="civic-sidebar-widget">
                        <h4>Initiatives & Reform</h4>
                        <ul class="civic-menu-list">
                            <li>
                                <a href="{{ route('initiatives.transitional-justice', ['locale' => app()->getLocale()]) }}" class="active">
                                    <span><i class="fa fa-angle-right me-2" style="color: var(--afar-gold);"></i> {{ __('messages.nav.transitionalJustice') }}</span>
                                    <span class="civic-badge civic-badge-gold" style="font-size: 10px; padding: 3px 8px;">Active</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('initiatives.justice-sector-transformation', ['locale' => app()->getLocale()]) }}">
                                    <span><i class="fa fa-angle-right me-2" style="color: var(--afar-muted);"></i> {{ __('messages.nav.transformationRoadmap') }}</span>
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
                        </ul>
                    </div>

                    <!-- Direct Helpline Box -->
                    <div class="civic-helpline-box">
                        <div class="icon">
                            <i class="fa fa-phone-square"></i>
                        </div>
                        <h4>Secretariat Desk</h4>
                        <p>For victim assistance, woreda hearing schedules, or confidential petition filing:</p>
                        <div class="phone">{{ __('messages.contact.phoneValue') }}</div>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one" style="width: 100%; justify-content: center;">
                            <span class="txt">Contact Bureau</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
