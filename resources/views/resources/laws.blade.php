@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <span class="page-badge">
                        <i class="fa fa-book"></i> Regional Legislation &bull; Legal Repository
                    </span>
                    <h1>{{ __('messages.nav.laws') }} & <span>Directives</span></h1>
                    <p class="lead-desc">
                        Official repository of proclamations, regulations, and operational directives enacted by the Afar National Regional State Council and Justice Bureau.
                    </p>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}"><i class="fa fa-home"></i> {{ __('messages.nav.home') }}</a></li>
                        <li><a href="#">{{ __('messages.nav.resources') }}</a></li>
                        <li><span>{{ __('messages.nav.laws') }}</span></li>
                    </ul>
                </div>
                <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                    <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(201, 151, 56, 0.4); border-radius: 20px; padding: 20px 24px; backdrop-filter: blur(8px); text-align: center;">
                        <span style="display: block; font-size: 11px; font-weight: 700; color: var(--afar-accent); letter-spacing: 0.14em; text-transform: uppercase;">
                            Legal Gazette
                        </span>
                        <div style="font-family: 'Bellefair', serif; font-size: 1.6rem; font-weight: 700; color: #fff; margin: 4px 0;">
                            Afar Deker Gazette
                        </div>
                        <span style="font-size: 12px; color: rgba(255,255,255,0.75);">Official Regional Statute Book</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Laws Section -->
    <section class="civic-section">
        <div class="auto-container">
            <div class="sec-title text-center mb-5">
                <span class="civic-badge civic-badge-navy mb-2">Regional Statutes</span>
                <h2 style="font-size: clamp(2rem, 3vw, 2.8rem); font-weight: 800; color: var(--afar-navy);">
                    Enacted Proclamations & Legal Instruments
                </h2>
                <div class="text" style="max-width: 760px; margin: 12px auto 0; font-size: 1.05rem; color: var(--afar-muted);">
                    Certified statutory documents governing justice administration, customary dispute harmonization, free legal defense, and prosecutorial conduct.
                </div>
            </div>

            <div class="row clearfix g-4">
                <!-- Proclamation 1 -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="civic-card h-100 d-flex flex-column" style="border-left: 5px solid var(--afar-navy);">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="civic-badge civic-badge-navy">Proclamation No. 84/2016</span>
                            <span style="font-size: 12px; color: var(--afar-muted); font-weight: 600;">
                                <i class="fa fa-calendar me-1"></i> Regional Council
                            </span>
                        </div>
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 12px; font-size: 1.25rem;">
                            Afar Region Justice Bureau Establishment & Mandate Proclamation
                        </h4>
                        <p style="color: var(--afar-muted); font-size: 0.92rem; line-height: 1.7; flex-grow: 1;">
                            Defining executive authority, prosecutorial powers, organizational structure, and operational duties of the Afar National Regional State Justice Bureau.
                        </p>
                        <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                            <span class="text-muted small"><i class="fa fa-file-pdf-o text-danger me-1"></i> Official Publication &bull; PDF</span>
                            <a href="#" class="theme-btn btn-style-two" style="padding: 6px 18px; font-size: 12px;" onclick="event.preventDefault(); alert('Document download is available from the Semera Bureau Archive.');">
                                <span class="txt"><i class="fa fa-download me-1"></i> Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proclamation 2 -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="civic-card h-100 d-flex flex-column" style="border-left: 5px solid var(--afar-accent);">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="civic-badge civic-badge-gold">Customary Framework</span>
                            <span style="font-size: 12px; color: var(--afar-muted); font-weight: 600;">
                                <i class="fa fa-calendar me-1"></i> Executive Council
                            </span>
                        </div>
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 12px; font-size: 1.25rem;">
                            Afar Customary Dispute Resolution (Mad'aa) Integration Regulation
                        </h4>
                        <p style="color: var(--afar-muted); font-size: 0.92rem; line-height: 1.7; flex-grow: 1;">
                            Statutory framework for formal legal recognition, coordination with regional courts, and constitutional human rights alignment of traditional Mad'aa arbitration in pastoral communities.
                        </p>
                        <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                            <span class="text-muted small"><i class="fa fa-file-pdf-o text-danger me-1"></i> Regulation &bull; PDF</span>
                            <a href="#" class="theme-btn btn-style-two" style="padding: 6px 18px; font-size: 12px;" onclick="event.preventDefault(); alert('Document download is available from the Semera Bureau Archive.');">
                                <span class="txt"><i class="fa fa-download me-1"></i> Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proclamation 3 -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="civic-card h-100 d-flex flex-column" style="border-left: 5px solid var(--afar-green);">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="civic-badge civic-badge-green">Directive No. 12/2022</span>
                            <span style="font-size: 12px; color: var(--afar-muted); font-weight: 600;">
                                <i class="fa fa-calendar me-1"></i> Justice Bureau
                            </span>
                        </div>
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 12px; font-size: 1.25rem;">
                            Regional Free Legal Aid & Public Defense Eligibility Directive
                        </h4>
                        <p style="color: var(--afar-muted); font-size: 0.92rem; line-height: 1.7; flex-grow: 1;">
                            Establishing criteria, woreda access points, and pro-bono defense services for women, children, persons with disabilities, and low-income litigants.
                        </p>
                        <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                            <span class="text-muted small"><i class="fa fa-file-pdf-o text-danger me-1"></i> Directive &bull; PDF</span>
                            <a href="#" class="theme-btn btn-style-two" style="padding: 6px 18px; font-size: 12px;" onclick="event.preventDefault(); alert('Document download is available from the Semera Bureau Archive.');">
                                <span class="txt"><i class="fa fa-download me-1"></i> Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Proclamation 4 -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="civic-card h-100 d-flex flex-column" style="border-left: 5px solid var(--afar-navy-2);">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="civic-badge civic-badge-navy">Ethics Code</span>
                            <span style="font-size: 12px; color: var(--afar-muted); font-weight: 600;">
                                <i class="fa fa-calendar me-1"></i> Justice Bureau
                            </span>
                        </div>
                        <h4 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 12px; font-size: 1.25rem;">
                            Public Prosecutors Ethical Conduct & Disciplinary Standards
                        </h4>
                        <p style="color: var(--afar-muted); font-size: 0.92rem; line-height: 1.7; flex-grow: 1;">
                            Mandating professional independence, rigorous anti-corruption safeguards, prosecutorial ethics, and public accountability for state attorneys across all regional woredas.
                        </p>
                        <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                            <span class="text-muted small"><i class="fa fa-file-pdf-o text-danger me-1"></i> Code of Conduct &bull; PDF</span>
                            <a href="#" class="theme-btn btn-style-two" style="padding: 6px 18px; font-size: 12px;" onclick="event.preventDefault(); alert('Document download is available from the Semera Bureau Archive.');">
                                <span class="txt"><i class="fa fa-download me-1"></i> Download PDF</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- External Federal Archive Link -->
            <div style="background: rgba(10,34,54,0.03); border: 1px solid var(--afar-border); border-radius: 20px; padding: 28px; margin-top: 10px;">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12 mb-3 mb-lg-0">
                        <h5 style="font-weight: 800; color: var(--afar-navy); margin-bottom: 6px;">Federal Legislation & Negarit Gazette</h5>
                        <p style="color: var(--afar-muted); font-size: 0.92rem; margin: 0;">
                            For federal criminal codes, commercial proclamations, and national transitional justice guidelines, visit the Federal Ministry of Justice online portal.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-12 text-lg-end">
                        <a href="https://justice.gov.et" target="_blank" rel="noopener" class="theme-btn btn-style-one">
                            <span class="txt">Federal Justice Portal <i class="fa fa-external-link"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
