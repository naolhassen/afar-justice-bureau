@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <span class="page-badge">
                        <i class="fa fa-user-circle"></i> Executive Office &bull; {{ __('messages.nav.bureauHead') }}
                    </span>
                    <h1>{{ __('messages.nav.bureauHead') }}</h1>
                    <p class="lead-desc">
                        Executive leadership overseeing public prosecutions, legislative review, constitutional human rights protection, and legal advisory across the Afar National Regional State.
                    </p>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="fa fa-home"></i> {{ __('messages.nav.home') }}</a></li>
                        <li><a href="{{ route('about.leadership', ['locale' => app()->getLocale()]) }}">{{ __('messages.nav.leadership') }}</a></li>
                        <li><span>{{ __('messages.nav.bureauHead') }}</span></li>
                    </ul>
                </div>
                <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                    <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(201, 151, 56, 0.4); border-radius: 20px; padding: 20px 24px; backdrop-filter: blur(8px); text-align: center;">
                        <span style="display: block; font-size: 11px; font-weight: 700; color: var(--afar-accent); letter-spacing: 0.14em; text-transform: uppercase;">
                            Office Status
                        </span>
                        <div style="font-family: 'Bellefair', serif; font-size: 1.5rem; font-weight: 700; color: #fff; margin: 4px 0;">
                            Executive Directorate
                        </div>
                        <span style="font-size: 12px; color: rgba(255,255,255,0.75);">Semera Regional Complex</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bureau Head Profile Section -->
    <section class="civic-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <!-- Main Profile Card -->
                    <div class="civic-card">
                        <div class="row align-items-center">
                            <div class="col-md-5 mb-4 mb-md-0 text-center">
                                <div style="position: relative; display: inline-block;">
                                    <img src="{{ asset('images/leaders/asker-mahammad.jpg') }}" alt="{{ __('messages.leaders.leader1Name') }}"
                                         style="width: 240px; height: 280px; object-fit: cover; object-position: center top; border-radius: 18px; box-shadow: 0 14px 32px rgba(10,34,54,0.18); border: 3px solid #ffffff;">
                                    <div style="position: absolute; bottom: -10px; right: 10px; background: var(--afar-accent); color: var(--afar-navy); width: 38px; height: 38px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; box-shadow: 0 4px 12px rgba(0,0,0,0.2);">
                                        <i class="fa fa-balance-scale"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <span class="civic-badge civic-badge-navy mb-2">
                                    {{ __('messages.nav.bureauHead') }}
                                </span>
                                <h2 style="font-size: 1.85rem; font-weight: 800; color: var(--afar-navy); margin: 8px 0 6px;">
                                    {{ __('messages.leaders.leader1Name') }}
                                </h2>
                                <div style="font-size: 1.05rem; font-weight: 700; color: var(--afar-accent); margin-bottom: 14px;">
                                    {{ __('messages.leaders.leader1Position') }}
                                </div>
                                <p style="font-size: 0.95rem; line-height: 1.7; color: var(--afar-ink); margin-bottom: 16px;">
                                    Leading the Afar National Regional State Justice Bureau with an unwavering dedication to the rule of law, institutional integrity, human rights protection, and harmonizing the pastoralist customary legal order with the Ethiopian constitutional framework.
                                </p>
                                <div class="d-flex align-items-center gap-3" style="font-size: 13px; color: var(--afar-muted); font-weight: 600;">
                                    <span><i class="fa fa-map-marker me-1" style="color: var(--afar-accent);"></i> Semera, Afar</span>
                                    <span>&bull;</span>
                                    <span><i class="fa fa-building-o me-1" style="color: var(--afar-green);"></i> Cabinet Member</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Biography & Leadership Overview -->
                    <div class="civic-card">
                        <h3 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 18px; font-size: 1.45rem; border-bottom: 2px solid rgba(10,34,54,0.06); padding-bottom: 12px;">
                            Executive Mandate & Institutional Overview
                        </h3>
                        <p style="line-height: 1.85; color: var(--afar-ink); margin-bottom: 18px; font-size: 0.98rem;">
                            The Head of the Afar Justice Bureau exercises executive authority over public criminal prosecutions across the region, represents regional and public interests in civil disputes, advises the Regional Administrative Council and President’s Office on high-level legal covenants, and oversees the comprehensive modernization of judicial administration.
                        </p>
                        <p style="line-height: 1.85; color: var(--afar-ink); margin-bottom: 24px; font-size: 0.98rem;">
                            Under his stewardship, the Bureau has achieved key milestones: extending mobile pro-bono legal defense clinics to pastoralist communities, conducting systematic human rights audits of correctional centers, and pioneering structured consultative mechanisms with traditional clan arbiters (<em>Mad'aa</em>) to preserve communal peace.
                        </p>

                        <!-- Key Executive Responsibilities (Authentic from website contents.txt) -->
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-top: 28px; margin-bottom: 16px; font-size: 1.2rem;">
                            <i class="fa fa-gavel" style="color: var(--afar-accent); margin-right: 8px;"></i> Statutory Responsibilities & Powers
                        </h4>
                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 4px solid var(--afar-navy); border-radius: 12px; padding: 18px; height: 100%;">
                                    <h6 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 6px;">Criminal Justice & Prosecution</h6>
                                    <p style="font-size: 0.85rem; color: var(--afar-muted); line-height: 1.6; margin: 0;">Directing investigations, instituting criminal indictments, and recovering assets connected to illegal acts.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 4px solid var(--afar-accent); border-radius: 12px; padding: 18px; height: 100%;">
                                    <h6 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 6px;">Civil Representation & Contract Review</h6>
                                    <p style="font-size: 0.85rem; color: var(--afar-muted); line-height: 1.6; margin: 0;">Safeguarding public interest in civil litigation and negotiating major regional government project contracts.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 4px solid var(--afar-green); border-radius: 12px; padding: 18px; height: 100%;">
                                    <h6 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 6px;">Legislative Drafting & Codification</h6>
                                    <p style="font-size: 0.85rem; color: var(--afar-muted); line-height: 1.6; margin: 0;">Drafting regional proclamations, certifying constitutional consistency, and compiling regional legal codes.</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div style="background: #fdfdfe; border: 1px solid var(--afar-border); border-left: 4px solid var(--afar-navy-2); border-radius: 12px; padding: 18px; height: 100%;">
                                    <h6 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 6px;">Human Rights & Detention Oversight</h6>
                                    <p style="font-size: 0.85rem; color: var(--afar-muted); line-height: 1.6; margin: 0;">Regularly inspecting police stations and correctional facilities to enforce lawful treatment and human rights treaties.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Educational Background -->
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-top: 24px; margin-bottom: 14px; font-size: 1.2rem;">
                            <i class="fa fa-graduation-cap" style="color: var(--afar-navy); margin-right: 8px;"></i> Educational Qualifications & Expertise
                        </h4>
                        <ul style="list-style: none; padding: 0; margin: 0; line-height: 2; font-size: 0.95rem; color: var(--afar-ink);">
                            <li style="display: flex; align-items: center; gap: 10px;">
                                <i class="fa fa-check" style="color: var(--afar-green);"></i>
                                <span><strong>Master of Laws (LL.M)</strong> &mdash; Public Law, Comparative Jurisprudence & Human Rights</span>
                            </li>
                            <li style="display: flex; align-items: center; gap: 10px;">
                                <i class="fa fa-check" style="color: var(--afar-green);"></i>
                                <span><strong>Bachelor of Laws (LL.B)</strong> &mdash; Faculty of Law, Addis Ababa University</span>
                            </li>
                            <li style="display: flex; align-items: center; gap: 10px;">
                                <i class="fa fa-check" style="color: var(--afar-green);"></i>
                                <span><strong>Executive Diploma</strong> &mdash; Strategic Justice Administration & Customary Arbitration Harmonization</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact the Department Form -->
                    <div class="civic-card">
                        <h3 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 8px; font-size: 1.35rem;">
                            Contact the Bureau Head Secretariat
                        </h3>
                        <p style="color: var(--afar-muted); font-size: 0.95rem; margin-bottom: 24px;">
                            Submit formal executive communications, administrative petitions, or scheduled appointment requests.
                        </p>

                        <form action="{{ route('contact', ['locale' => app()->getLocale()]) }}" method="GET">
                            <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label style="font-size: 13px; font-weight: 700; color: var(--afar-navy); margin-bottom: 6px;">{{ __('messages.contact.nameLabel') }}</label>
                                    <input type="text" class="form-control" placeholder="Enter your full name" required style="height: 48px; border-radius: 10px; border: 1px solid var(--afar-border); background: #fdfdfe;">
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label style="font-size: 13px; font-weight: 700; color: var(--afar-navy); margin-bottom: 6px;">{{ __('messages.contact.emailLabel') }}</label>
                                    <input type="email" class="form-control" placeholder="name@domain.com" required style="height: 48px; border-radius: 10px; border: 1px solid var(--afar-border); background: #fdfdfe;">
                                </div>
                                <div class="col-12 form-group mb-3">
                                    <label style="font-size: 13px; font-weight: 700; color: var(--afar-navy); margin-bottom: 6px;">{{ __('messages.contact.subjectLabel') }}</label>
                                    <input type="text" class="form-control" placeholder="Subject of official inquiry" required style="height: 48px; border-radius: 10px; border: 1px solid var(--afar-border); background: #fdfdfe;">
                                </div>
                                <div class="col-12 form-group mb-4">
                                    <label style="font-size: 13px; font-weight: 700; color: var(--afar-navy); margin-bottom: 6px;">{{ __('messages.contact.messageLabel') }}</label>
                                    <textarea class="form-control" rows="4" placeholder="Detail your communication or request..." required style="border-radius: 10px; border: 1px solid var(--afar-border); background: #fdfdfe;"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="theme-btn btn-style-one">
                                        <span class="txt">{{ __('messages.contact.submit') }} &rarr;</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <!-- Sidebar Side -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">

                        <!-- Quick Navigation Widget -->
                        <div class="civic-sidebar-widget">
                            <h4>Bureau Leadership & Sectors</h4>
                            <ul class="civic-menu-list">
                                <li>
                                    <a href="{{ route('departments.minister', ['locale' => app()->getLocale()]) }}" class="active">
                                        <span><i class="fa fa-angle-right me-2" style="color: var(--afar-accent);"></i> {{ __('messages.nav.bureauHead') }}</span>
                                        <span class="civic-badge civic-badge-gold" style="font-size: 10px; padding: 3px 8px;">Office</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('about.leadership', ['locale' => app()->getLocale()]) }}">
                                        <span><i class="fa fa-angle-right me-2" style="color: var(--afar-muted);"></i> Executive Council</span>
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

                        <!-- Direct Assistance Box -->
                        <div class="civic-helpline-box">
                            <div class="icon">
                                <i class="fa fa-phone-square"></i>
                            </div>
                            <h4>Bureau Executive Office</h4>
                            <p>For urgent petitions, public defense coordination, or scheduled audiences:</p>
                            <div class="phone">{{ __('messages.contact.phoneValue') }}</div>
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one" style="width: 100%; justify-content: center;">
                                <span class="txt">Contact Form</span>
                            </a>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </section>
@endsection
