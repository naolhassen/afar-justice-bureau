@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <h1>{{ __('messages.nav.services') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('messages.nav.home') }}</a></li>
                <li>{{ __('messages.nav.services') }}</li>
            </ul>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-page-section" style="padding: 90px 0 60px;">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="title">{{ __('messages.services.sectionTag') }}</div>
                <h2>{{ __('messages.services.title') }} <span>{{ __('messages.services.titleHighlight') }}</span></h2>
                <div class="text" style="max-width: 750px; margin: 15px auto 0;">
                    Citizen-centered legal services delivered across our main bureau in Semera, zone directorates, and all woreda offices in the Afar Region.
                </div>
            </div>

            <div class="row clearfix">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-block-two" style="background: #fff; padding: 35px 25px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.06); height: 100%; text-align: center;">
                        <div class="inner-box">
                            <div class="icon-box" style="font-size: 40px; color: var(--justice-primary); margin-bottom: 20px;">
                                <i class="fa fa-balance-scale"></i>
                            </div>
                            <h4 style="font-weight: 700; margin-bottom: 15px;">{{ __('messages.services.politicalEducation') }}</h4>
                            <p class="text-muted" style="line-height: 1.7;">{{ __('messages.services.politicalEducationDesc') }}</p>
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="read-more" style="color: var(--justice-primary); font-weight: 600; display: inline-block; margin-top: 15px;">Inquire Service &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-block-two" style="background: #fff; padding: 35px 25px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.06); height: 100%; text-align: center;">
                        <div class="inner-box">
                            <div class="icon-box" style="font-size: 40px; color: var(--justice-gold); margin-bottom: 20px;">
                                <i class="fa fa-handshake-o"></i>
                            </div>
                            <h4 style="font-weight: 700; margin-bottom: 15px;">{{ __('messages.services.communityDev') }}</h4>
                            <p class="text-muted" style="line-height: 1.7;">{{ __('messages.services.communityDevDesc') }}</p>
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="read-more" style="color: var(--justice-primary); font-weight: 600; display: inline-block; margin-top: 15px;">Inquire Service &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-block-two" style="background: #fff; padding: 35px 25px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.06); height: 100%; text-align: center;">
                        <div class="inner-box">
                            <div class="icon-box" style="font-size: 40px; color: var(--justice-primary); margin-bottom: 20px;">
                                <i class="fa fa-gavel"></i>
                            </div>
                            <h4 style="font-weight: 700; margin-bottom: 15px;">{{ __('messages.services.youthEngagement') }}</h4>
                            <p class="text-muted" style="line-height: 1.7;">{{ __('messages.services.youthEngagementDesc') }}</p>
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="read-more" style="color: var(--justice-primary); font-weight: 600; display: inline-block; margin-top: 15px;">Inquire Service &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-block-two" style="background: #fff; padding: 35px 25px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.06); height: 100%; text-align: center;">
                        <div class="inner-box">
                            <div class="icon-box" style="font-size: 40px; color: var(--justice-gold); margin-bottom: 20px;">
                                <i class="fa fa-users"></i>
                            </div>
                            <h4 style="font-weight: 700; margin-bottom: 15px;">{{ __('messages.services.womenEmpowerment') }}</h4>
                            <p class="text-muted" style="line-height: 1.7;">{{ __('messages.services.womenEmpowermentDesc') }}</p>
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="read-more" style="color: var(--justice-primary); font-weight: 600; display: inline-block; margin-top: 15px;">Inquire Service &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-block-two" style="background: #fff; padding: 35px 25px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.06); height: 100%; text-align: center;">
                        <div class="inner-box">
                            <div class="icon-box" style="font-size: 40px; color: var(--justice-primary); margin-bottom: 20px;">
                                <i class="fa fa-shield"></i>
                            </div>
                            <h4 style="font-weight: 700; margin-bottom: 15px;">{{ __('messages.services.goodGovernance') }}</h4>
                            <p class="text-muted" style="line-height: 1.7;">{{ __('messages.services.goodGovernanceDesc') }}</p>
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="read-more" style="color: var(--justice-primary); font-weight: 600; display: inline-block; margin-top: 15px;">Inquire Service &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-block-two" style="background: #fff; padding: 35px 25px; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.06); height: 100%; text-align: center;">
                        <div class="inner-box">
                            <div class="icon-box" style="font-size: 40px; color: var(--justice-gold); margin-bottom: 20px;">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <h4 style="font-weight: 700; margin-bottom: 15px;">{{ __('messages.services.peaceBuilding') }}</h4>
                            <p class="text-muted" style="line-height: 1.7;">{{ __('messages.services.peaceBuildingDesc') }}</p>
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="read-more" style="color: var(--justice-primary); font-weight: 600; display: inline-block; margin-top: 15px;">Inquire Service &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
