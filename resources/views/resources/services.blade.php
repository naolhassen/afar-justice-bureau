@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <span class="page-badge">
                        <i class="fa fa-balance-scale"></i> Public Legal Services &bull; Citizen Charter
                    </span>
                    <h1>{{ __('messages.nav.services') }}</h1>
                    <p class="lead-desc">
                        Providing accessible, transparent, and high-integrity legal services, free public defense, document verification, and prosecutorial assistance across the Afar National Regional State.
                    </p>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="fa fa-home"></i> {{ __('messages.nav.home') }}</a></li>
                        <li><a href="#">{{ __('messages.nav.resources') }}</a></li>
                        <li><span>{{ __('messages.nav.services') }}</span></li>
                    </ul>
                </div>
                <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                    <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(201, 151, 56, 0.4); border-radius: 20px; padding: 20px 24px; backdrop-filter: blur(8px); text-align: center;">
                        <span style="display: block; font-size: 11px; font-weight: 700; color: var(--afar-gold); letter-spacing: 0.14em; text-transform: uppercase;">
                            Citizen Access
                        </span>
                        <div style="font-family: 'Bellefair', serif; font-size: 1.6rem; font-weight: 700; color: #fff; margin: 4px 0;">
                            32+ Woreda Desks
                        </div>
                        <span style="font-size: 12px; color: rgba(255,255,255,0.75);">5 Zone Directorates & Mobile Clinics</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="civic-section">
        <div class="auto-container">
            <div class="sec-title text-center mb-5">
                <div class="title" style="color: var(--afar-gold); font-weight: 800; letter-spacing: 0.12em; text-transform: uppercase; font-size: 12px; margin-bottom: 8px;">
                    Citizen-Centered Mandates
                </div>
                <h2 style="font-size: clamp(2rem, 3vw, 2.8rem); font-weight: 800; color: var(--afar-navy);">
                    Public Justice & Regulatory Services
                </h2>
                <div class="text" style="max-width: 780px; margin: 12px auto 0; font-size: 1.05rem; color: var(--afar-muted); line-height: 1.7;">
                    Delivered through our central headquarters in Semera, zone justice directorates, woreda public prosecution offices, and mobile community legal clinics.
                </div>
            </div>

            <div class="row clearfix g-4">
                <!-- Service 1: Free Legal Aid & Public Defense -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="civic-card h-100 d-flex flex-column" style="padding: 32px 26px;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div style="width: 52px; height: 52px; border-radius: 14px; background: rgba(201, 151, 56, 0.12); color: var(--afar-gold); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                                <i class="fa fa-balance-scale"></i>
                            </div>
                            <span class="civic-badge civic-badge-gold" style="font-size: 10px;">Free Citizen Aid</span>
                        </div>
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 12px; font-size: 1.2rem;">
                            Free Legal Aid & Public Defense
                        </h4>
                        <p style="color: var(--afar-muted); font-size: 0.92rem; line-height: 1.7; flex-grow: 1;">
                            Providing free legal counseling, court representation, and advocacy for low-income citizens, women, children, and vulnerable pastoralist households lacking financial means.
                        </p>
                        <div class="pt-3 border-top mt-3">
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 13px; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                <span>Request Legal Counsel</span>
                                <i class="fa fa-arrow-right" style="color: var(--afar-gold);"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Public Prosecution & Criminal Justice -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="civic-card h-100 d-flex flex-column" style="padding: 32px 26px;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div style="width: 52px; height: 52px; border-radius: 14px; background: rgba(10, 34, 54, 0.08); color: var(--afar-navy); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                                <i class="fa fa-gavel"></i>
                            </div>
                            <span class="civic-badge civic-badge-navy" style="font-size: 10px;">Public Prosecution</span>
                        </div>
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 12px; font-size: 1.2rem;">
                            Public Prosecution & Criminal Justice
                        </h4>
                        <p style="color: var(--afar-muted); font-size: 0.92rem; line-height: 1.7; flex-grow: 1;">
                            Directing criminal investigations under regional jurisdiction and delegated federal authority, conducting trials, enforcing court orders, and recovering illicitly acquired assets.
                        </p>
                        <div class="pt-3 border-top mt-3">
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 13px; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                <span>Prosecutorial Inquiry</span>
                                <i class="fa fa-arrow-right" style="color: var(--afar-gold);"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Document Authentication & Registration -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="civic-card h-100 d-flex flex-column" style="padding: 32px 26px;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div style="width: 52px; height: 52px; border-radius: 14px; background: rgba(11, 122, 90, 0.1); color: var(--afar-green); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                                <i class="fa fa-certificate"></i>
                            </div>
                            <span class="civic-badge civic-badge-green" style="font-size: 10px;">Authentication</span>
                        </div>
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 12px; font-size: 1.2rem;">
                            Document Authentication & Registration
                        </h4>
                        <p style="color: var(--afar-muted); font-size: 0.92rem; line-height: 1.7; flex-grow: 1;">
                            Verification and official attestation of commercial agreements, powers of attorney, property transfers, and official affidavits across the region.
                        </p>
                        <div class="pt-3 border-top mt-3">
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 13px; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                <span>Authentication Guidelines</span>
                                <i class="fa fa-arrow-right" style="color: var(--afar-gold);"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Licensing & Supervision of Lawyers & Associations -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="civic-card h-100 d-flex flex-column" style="padding: 32px 26px;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div style="width: 52px; height: 52px; border-radius: 14px; background: rgba(201, 151, 56, 0.12); color: var(--afar-gold); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                                <i class="fa fa-id-card-o"></i>
                            </div>
                            <span class="civic-badge civic-badge-gold" style="font-size: 10px;">Licensing & Bar</span>
                        </div>
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 12px; font-size: 1.2rem;">
                            Licensing of Lawyers & Associations
                        </h4>
                        <p style="color: var(--afar-muted); font-size: 0.92rem; line-height: 1.7; flex-grow: 1;">
                            Administering professional advocacy licenses, overseeing regional bar compliance, and registering civic, professional, and regional public associations.
                        </p>
                        <div class="pt-3 border-top mt-3">
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 13px; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                <span>Licensing Portal</span>
                                <i class="fa fa-arrow-right" style="color: var(--afar-gold);"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 5: Civil Representation & Contract Negotiation -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="civic-card h-100 d-flex flex-column" style="padding: 32px 26px;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div style="width: 52px; height: 52px; border-radius: 14px; background: rgba(10, 34, 54, 0.08); color: var(--afar-navy); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="civic-badge civic-badge-navy" style="font-size: 10px;">Civil Affairs</span>
                        </div>
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 12px; font-size: 1.2rem;">
                            State Civil Defense & Contract Review
                        </h4>
                        <p style="color: var(--afar-muted); font-size: 0.92rem; line-height: 1.7; flex-grow: 1;">
                            Representing regional government organs in civil litigations, negotiating major public infrastructure contracts, and arbitrating inter-office administrative disputes.
                        </p>
                        <div class="pt-3 border-top mt-3">
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 13px; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                <span>Government Advisory</span>
                                <i class="fa fa-arrow-right" style="color: var(--afar-gold);"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 6: Human Rights Monitoring & Customary Harmony -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="civic-card h-100 d-flex flex-column" style="padding: 32px 26px;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div style="width: 52px; height: 52px; border-radius: 14px; background: rgba(11, 122, 90, 0.1); color: var(--afar-green); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                                <i class="fa fa-shield"></i>
                            </div>
                            <span class="civic-badge civic-badge-green" style="font-size: 10px;">Human Rights</span>
                        </div>
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 12px; font-size: 1.2rem;">
                            Human Rights & Detention Oversight
                        </h4>
                        <p style="color: var(--afar-muted); font-size: 0.92rem; line-height: 1.7; flex-grow: 1;">
                            Conducting regular inspections of police stations and prisons to safeguard constitutional rights, foster Mad'aa customary mediation harmony, and implement national human rights action plans.
                        </p>
                        <div class="pt-3 border-top mt-3">
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 13px; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                <span>File Rights Grievance</span>
                                <i class="fa fa-arrow-right" style="color: var(--afar-gold);"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Citizen Support Banner -->
            <div style="margin-top: 20px; background: linear-gradient(135deg, var(--afar-navy) 0%, var(--afar-navy-2) 60%, var(--afar-green) 100%); border-radius: 24px; padding: 40px; color: #ffffff; box-shadow: 0 20px 48px rgba(10, 34, 54, 0.2);">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12 mb-3 mb-lg-0">
                        <span style="display: inline-block; padding: 4px 12px; background: rgba(201, 151, 56, 0.2); border: 1px solid rgba(201, 151, 56, 0.6); color: var(--afar-gold-soft); border-radius: 999px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 10px;">
                            Fast Assistance
                        </span>
                        <h3 style="color: #ffffff; font-weight: 800; font-size: 1.75rem; margin-bottom: 8px;">
                            Need Immediate Legal Representation or Have a Case Query?
                        </h3>
                        <p style="color: rgba(255,255,255,0.85); font-size: 0.98rem; line-height: 1.6; margin: 0;">
                            Our regional legal aid desks and public prosecution information counters are ready to guide you in Afaraf, Amharic, or English.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-end">
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                            <span class="txt">Contact Legal Desk &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
