@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <h1>{{ __('messages.nav.laws') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('messages.nav.home') }}</a></li>
                <li>{{ __('messages.nav.laws') }}</li>
            </ul>
        </div>
    </section>

    <!-- Laws Section -->
    <section class="services-page-section" style="padding: 90px 0 60px;">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="title">{{ __('messages.metadata.title') }}</div>
                <h2>{{ __('messages.nav.laws') }} & <span>{{ __('messages.nav.directives') }}</span></h2>
                <div class="text" style="max-width: 750px; margin: 15px auto 0;">
                    Access regional proclamations, executive regulations, and directives enacted by the Afar National Regional State.
                </div>
            </div>

            <div class="row clearfix">
                <!-- Proclamation 1 -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="service-block-two" style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.06); height: 100%; border-left: 4px solid var(--justice-primary);">
                        <div class="inner-box">
                            <span class="badge badge-primary mb-2" style="background: var(--justice-primary); font-size: 13px; padding: 6px 12px;">Proclamation</span>
                            <h4 style="font-weight: 700; margin: 10px 0;"><a href="#">Afar Region Justice Bureau Establishment & Powers Proclamation</a></h4>
                            <p class="text-muted" style="line-height: 1.7;">Defining the authority, mandates, prosecutorial responsibilities, and structural organization of the Afar Justice Bureau.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                <span class="text-muted small"><i class="fa fa-calendar me-1"></i> Regional Council</span>
                                <a href="#" class="theme-btn btn-style-two" style="padding: 6px 18px; font-size: 13px;"><i class="fa fa-download me-1"></i> PDF</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proclamation 2 -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="service-block-two" style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.06); height: 100%; border-left: 4px solid var(--justice-gold);">
                        <div class="inner-box">
                            <span class="badge badge-warning mb-2" style="background: var(--justice-gold); color: #fff; font-size: 13px; padding: 6px 12px;">Customary Framework</span>
                            <h4 style="font-weight: 700; margin: 10px 0;"><a href="#">Afar Customary Dispute Resolution (Mad'aa) Recognition Regulation</a></h4>
                            <p class="text-muted" style="line-height: 1.7;">Framework for legal recognition, coordination, and human rights harmonization of traditional Mad'aa arbitration in pastoral communities.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                <span class="text-muted small"><i class="fa fa-calendar me-1"></i> Executive Council</span>
                                <a href="#" class="theme-btn btn-style-two" style="padding: 6px 18px; font-size: 13px;"><i class="fa fa-download me-1"></i> PDF</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proclamation 3 -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="service-block-two" style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.06); height: 100%; border-left: 4px solid var(--justice-primary);">
                        <div class="inner-box">
                            <span class="badge badge-primary mb-2" style="background: var(--justice-primary); font-size: 13px; padding: 6px 12px;">Legal Aid Directive</span>
                            <h4 style="font-weight: 700; margin: 10px 0;"><a href="#">Regional Free Legal Aid & Public Defense Directive</a></h4>
                            <p class="text-muted" style="line-height: 1.7;">Establishing criteria, woreda access points, and pro-bono defense services for women, children, and low-income litigants.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                <span class="text-muted small"><i class="fa fa-calendar me-1"></i> Justice Bureau</span>
                                <a href="#" class="theme-btn btn-style-two" style="padding: 6px 18px; font-size: 13px;"><i class="fa fa-download me-1"></i> PDF</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proclamation 4 -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="service-block-two" style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.06); height: 100%; border-left: 4px solid var(--justice-gold);">
                        <div class="inner-box">
                            <span class="badge badge-info mb-2" style="background: #17a2b8; font-size: 13px; padding: 6px 12px;">Code of Conduct</span>
                            <h4 style="font-weight: 700; margin: 10px 0;"><a href="#">Public Prosecutors Ethical Conduct & Professional Standard Directive</a></h4>
                            <p class="text-muted" style="line-height: 1.7;">Mandating ethical requirements, independence, accountability, and disciplinary measures for state prosecutors in Afar.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                <span class="text-muted small"><i class="fa fa-calendar me-1"></i> Justice Bureau</span>
                                <a href="#" class="theme-btn btn-style-two" style="padding: 6px 18px; font-size: 13px;"><i class="fa fa-download me-1"></i> PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
