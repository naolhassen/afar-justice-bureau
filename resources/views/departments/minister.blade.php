@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url('{{ asset('counsel/images/background/1.jpg') }}');">
        <div class="auto-container">
            <h1>{{ __('messages.nav.bureauHead') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}">{{ __('messages.nav.home') }}</a></li>
                <li><a href="{{ route('about.leadership', ['locale' => app()->getLocale()]) }}">{{ __('messages.nav.leadership') }}</a></li>
                <li>{{ __('messages.nav.bureauHead') }}</li>
            </ul>
        </div>
    </section>

    <!-- Bureau Head Profile Section -->
    <section class="sidebar-page-container" style="padding: 90px 0 60px;">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="department-detail">

                        <!-- Main Profile Card -->
                        <div class="inner-box" style="background: #fff; padding: 40px; border-radius: 16px; box-shadow: 0 5px 30px rgba(0,0,0,0.06); margin-bottom: 40px;">
                            <div class="row align-items-center">
                                <div class="col-md-5 mb-4 mb-md-0 text-center">
                                    <div class="image-box" style="position: relative; display: inline-block;">
                                        <img src="{{ asset('images/leaders/leader1.jpg') }}" alt="{{ __('messages.leaders.leader1Name') }}"
                                             style="width: 240px; height: 260px; object-fit: cover; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <span class="badge badge-primary mb-2" style="background: var(--justice-primary); font-size: 13px; padding: 6px 14px;">
                                        {{ __('messages.nav.bureauHead') }}
                                    </span>
                                    <h2 style="font-weight: 800; color: #00204c; margin: 8px 0 5px;">{{ __('messages.leaders.leader1Name') }}</h2>
                                    <div class="designation text-muted font-weight-bold mb-3" style="font-size: 16px; color: var(--justice-gold);">
                                        {{ __('messages.leaders.leader1Position') }}
                                    </div>
                                    <p class="text-muted" style="line-height: 1.8;">
                                        Appointed to lead the Afar National Regional State Justice Bureau, spearheading justice sector transformation, rule of law enhancement, human rights protection, and fostering public trust across the region.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Biography & Leadership Overview -->
                        <div class="text-content" style="background: #fff; padding: 40px; border-radius: 16px; box-shadow: 0 5px 30px rgba(0,0,0,0.06); margin-bottom: 40px;">
                            <h3 style="font-weight: 700; color: #00204c; margin-bottom: 20px; border-bottom: 2px solid #eee; padding-bottom: 12px;">
                                Executive Profile & Background
                            </h3>
                            <p style="line-height: 1.9; color: #555; margin-bottom: 20px;">
                                {{ __('messages.leaders.leader1Name') }} serves as the Head of the Afar National Regional State Justice Bureau. In this capacity, he exercises executive oversight over regional public prosecutions, high-level legal advisory services to the Regional Council and President's Office, legislative review, and the modernization of judicial institutions.
                            </p>
                            <p style="line-height: 1.9; color: #555; margin-bottom: 25px;">
                                Under his leadership, the Bureau has expanded its focus on integrating traditional Afar customary resolution systems (Mad'aa) with statutory constitutional principles, expanding pro-bono mobile legal clinics to remote pastoral communities, and ensuring stringent accountability within law enforcement agencies.
                            </p>

                            <!-- Education -->
                            <h4 style="font-weight: 700; color: #00204c; margin-top: 30px; margin-bottom: 15px;">
                                <i class="fa fa-graduation-cap" style="color: var(--justice-primary); margin-right: 8px;"></i> Educational Background
                            </h4>
                            <ul class="list-style-one" style="padding-left: 20px; line-height: 2; color: #555;">
                                <li><strong>Master of Laws (LL.M)</strong> in Public Law & Comparative Jurisprudence</li>
                                <li><strong>Bachelor of Laws (LL.B)</strong> from Addis Ababa University Faculty of Law</li>
                                <li>Specialized Executive Certification in Justice Sector Reform and Human Rights Monitoring</li>
                            </ul>

                            <!-- Core Mandates -->
                            <h4 style="font-weight: 700; color: #00204c; margin-top: 30px; margin-bottom: 15px;">
                                <i class="fa fa-gavel" style="color: var(--justice-gold); margin-right: 8px;"></i> Key Executive Responsibilities
                            </h4>
                            <ul class="list-style-one" style="padding-left: 20px; line-height: 2; color: #555;">
                                <li>Directing regional criminal prosecutions and safeguarding public interest in regional courts.</li>
                                <li>Providing authoritative legal opinions on regional policy, international investments, and interstate agreements.</li>
                                <li>Overseeing the Afar Justice Sector Transformation Roadmap (2025–2030).</li>
                                <li>Strengthening customary dispute resolution institutions in harmony with the FDRE Constitution.</li>
                            </ul>
                        </div>

                        <!-- Contact the Department Form -->
                        <div class="contact-box" style="background: #fff; padding: 40px; border-radius: 16px; box-shadow: 0 5px 30px rgba(0,0,0,0.06);">
                            <h3 style="font-weight: 700; color: #00204c; margin-bottom: 10px;">Contact the Bureau Head Office</h3>
                            <p class="text-muted mb-4">Submit direct formal inquiries, administrative petitions, or official communication to the executive secretariat.</p>

                            <form action="{{ route('contact', ['locale' => app()->getLocale()]) }}" method="GET">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ __('messages.contact.nameLabel') }}" required style="height: 50px; border-radius: 8px;">
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <input type="email" class="form-control" placeholder="{{ __('messages.contact.emailLabel') }}" required style="height: 50px; border-radius: 8px;">
                                    </div>
                                    <div class="col-12 form-group mb-3">
                                        <input type="text" class="form-control" placeholder="{{ __('messages.contact.subjectLabel') }}" required style="height: 50px; border-radius: 8px;">
                                    </div>
                                    <div class="col-12 form-group mb-4">
                                        <textarea class="form-control" rows="4" placeholder="{{ __('messages.contact.messageLabel') }}" required style="border-radius: 8px;"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="theme-btn btn-style-one">
                                            <span class="txt">{{ __('messages.contact.submit') }}</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">

                        <!-- Quick Navigation Widget -->
                        <div class="sidebar-widget categories-widget" style="background: #fff; padding: 30px; border-radius: 16px; box-shadow: 0 5px 30px rgba(0,0,0,0.06); margin-bottom: 30px;">
                            <div class="widget-title" style="border-bottom: 2px solid #eee; padding-bottom: 10px; margin-bottom: 20px;">
                                <h4 style="font-weight: 700; color: #00204c;">Directorates & Offices</h4>
                            </div>
                            <ul class="categories-list" style="list-style: none; padding: 0;">
                                <li style="padding: 10px 0; border-bottom: 1px solid #f2f2f2;">
                                    <a href="{{ route('departments.minister', ['locale' => app()->getLocale()]) }}" style="color: var(--justice-primary); font-weight: 700;">
                                        &bull; {{ __('messages.nav.bureauHead') }}
                                    </a>
                                </li>
                                <li style="padding: 10px 0; border-bottom: 1px solid #f2f2f2;">
                                    <a href="{{ route('initiatives.justice-sector-transformation', ['locale' => app()->getLocale()]) }}" style="color: #555;">
                                        &bull; {{ __('messages.nav.transformationRoadmap') }}
                                    </a>
                                </li>
                                <li style="padding: 10px 0; border-bottom: 1px solid #f2f2f2;">
                                    <a href="{{ route('initiatives.transitional-justice', ['locale' => app()->getLocale()]) }}" style="color: #555;">
                                        &bull; {{ __('messages.nav.transitionalJustice') }}
                                    </a>
                                </li>
                                <li style="padding: 10px 0; border-bottom: 1px solid #f2f2f2;">
                                    <a href="{{ route('initiatives.legal-institutional-reform', ['locale' => app()->getLocale()]) }}" style="color: #555;">
                                        &bull; {{ __('messages.nav.institutionalReform') }}
                                    </a>
                                </li>
                                <li style="padding: 10px 0;">
                                    <a href="{{ route('resources.laws', ['locale' => app()->getLocale()]) }}" style="color: #555;">
                                        &bull; {{ __('messages.nav.laws') }}
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Direct Assistance Box -->
                        <div class="sidebar-widget contact-widget" style="background: linear-gradient(135deg, #00204c 0%, #173663 100%); color: #fff; padding: 35px 25px; border-radius: 16px; text-align: center;">
                            <div class="icon" style="font-size: 40px; color: var(--justice-gold); margin-bottom: 15px;">
                                <i class="fa fa-phone-square"></i>
                            </div>
                            <h4 style="color: #fff; font-weight: 700; margin-bottom: 10px;">Bureau Helpline</h4>
                            <p style="color: rgba(255,255,255,0.8); font-size: 14px; margin-bottom: 20px;">For urgent case inquiries, legal aid, or citizen complaints:</p>
                            <div class="phone" style="font-size: 18px; font-weight: 700; color: var(--justice-gold); margin-bottom: 20px;">
                                {{ __('messages.contact.phoneValue') }}
                            </div>
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-two" style="padding: 8px 20px; font-size: 13px;">
                                Contact Form
                            </a>
                        </div>

                    </aside>
                </div>

            </div>
        </div>
    </section>
@endsection
