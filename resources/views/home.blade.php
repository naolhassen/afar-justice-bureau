@extends('layouts.app')

@section('content')

    <!-- Banner Section -->
    <section class="banner-section">
        <!-- Social Nav -->
        <ul class="social-nav">
            <li class="facebook"><a href="https://www.facebook.com/"><span class="fa fa-facebook-f"></span></a></li>
            <li class="twitter"><a href="https://www.twitter.com/"><span class="fa fa-twitter"></span></a></li>
            <li class="linkedin"><a href="https://www.linkedin.com/"><span class="fa fa-linkedin"></span></a></li>
        </ul>
        <div class="main-slider-carousel owl-carousel owl-theme">

            <div class="slide" style="background-image: url({{ asset('counsel/images/main-slider/image-1.jpg') }})">
                <div class="auto-container">
                    <div class="content-column">
                        <div class="inner-column">
                            <div class="title">{{ __('messages.hero.badge') }}</div>
                            <h1>{{ __('messages.hero.title') }} <br> {{ __('messages.hero.titleHighlight') }}</h1>
                            <div class="text">{{ __('messages.hero.description') }}</div>
                            <div class="btns-box">
                                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                                    <span class="txt">{{ __('messages.hero.cta') }} <i class="arrow flaticon-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image: url({{ asset('counsel/images/main-slider/banner-7.jpg') }})">
                <div class="auto-container">
                    <div class="content-column">
                        <div class="inner-column">
                            <div class="title">{{ __('messages.hero.badge') }}</div>
                            <h1>{{ __('messages.about.title') }} <br> {{ __('messages.about.titleHighlight') }}</h1>
                            <div class="text">{{ __('messages.about.description') }}</div>
                            <div class="btns-box">
                                <a href="{{ route('about.vision-mission', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                                    <span class="txt">{{ __('messages.hero.secondaryCta') }} <i class="arrow flaticon-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image: url({{ asset('counsel/images/main-slider/banner-8.jpg') }})">
                <div class="auto-container">
                    <div class="content-column">
                        <div class="inner-column">
                            <div class="title">{{ __('messages.hero.badge') }}</div>
                            <h1>{{ __('messages.services.title') }} <br> {{ __('messages.services.titleHighlight') }}</h1>
                            <div class="text">{{ __('messages.cta.description') }}</div>
                            <div class="btns-box">
                                <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-one">
                                    <span class="txt">{{ __('messages.news.viewAll') }} <i class="arrow flaticon-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Banner Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Services Block -->
                    <div class="services-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-file"></div>
                                <h4><a href="{{ route('initiatives.transitional-justice', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.politicalEducation') }}</a></h4>
                                <div class="text">{{ __('messages.services.politicalEducationDesc') }}</div>
                            </div>
                            <a href="{{ route('initiatives.transitional-justice', ['locale' => app()->getLocale()]) }}" class="arrow flaticon-right"></a>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-file-1"></div>
                                <h4><a href="{{ route('initiatives.legal-institutional-reform', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.youthEngagement') }}</a></h4>
                                <div class="text">{{ __('messages.services.youthEngagementDesc') }}</div>
                            </div>
                            <a href="{{ route('initiatives.legal-institutional-reform', ['locale' => app()->getLocale()]) }}" class="arrow flaticon-right"></a>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-umbrella-1"></div>
                                <h4><a href="{{ route('initiatives.justice-sector-transformation', ['locale' => app()->getLocale()]) }}">{{ __('messages.services.communityDev') }}</a></h4>
                                <div class="text">{{ __('messages.services.communityDevDesc') }}</div>
                            </div>
                            <a href="{{ route('initiatives.justice-sector-transformation', ['locale' => app()->getLocale()]) }}" class="arrow flaticon-right"></a>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-group"></div>
                                <h4><a href="#">{{ __('messages.services.womenEmpowerment') }}</a></h4>
                                <div class="text">{{ __('messages.services.womenEmpowermentDesc') }}</div>
                            </div>
                            <a href="#" class="arrow flaticon-right"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image" data-tilt data-tilt-max="3">
                            <img src="{{ asset('counsel/images/resource/welcome.jpg') }}" alt="">
                        </div>
                        <div class="experience">
                            <div class="inner">
                                <span class="count">{{ __('messages.about.stats.years') }}</span>
                                {{ __('messages.about.stats.yearsLabel') }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>{{ __('messages.about.title') }} <br> {{ __('messages.about.titleHighlight') }}</h2>
                        </div>
                        <div class="text">{{ __('messages.about.description') }}</div>
                        <ul class="list-style-one">
                            <li>{{ __('messages.services.goodGovernance') }}</li>
                            <li>{{ __('messages.services.peaceBuilding') }}</li>
                            <li>{{ __('messages.services.communityDev') }}</li>
                            <li>{{ __('messages.services.womenEmpowerment') }}</li>
                        </ul>
                        <div class="btns-box">
                            <a href="{{ route('about.vision-mission', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-two">
                                <span class="txt">{{ __('messages.about.learnMore') }} <i class="arrow flaticon-right"></i></span>
                            </a>
                            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-three">
                                <span class="txt">{{ __('messages.nav.contact') }} <i class="arrow flaticon-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Welcome Section -->

    <!-- Counter Section -->
    <section class="counter-section">
        <div class="image-layer" style="background-image: url({{ asset('counsel/images/background/1.jpg') }})"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <h2>{{ __('messages.about.title') }} {{ __('messages.about.titleHighlight') }}</h2>
                <div class="text">{{ __('messages.about.description') }}</div>
            </div>

            <div class="fact-counter">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-briefcase"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="250">0</span><sup>+</sup>
                                </div>
                                <h6 class="counter-title">{{ __('messages.about.stats.membersLabel') }}</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-balance"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="5">0</span><sup>+</sup>
                                </div>
                                <h6 class="counter-title">{{ __('messages.about.stats.officesLabel') }}</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-marketing"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="6">0</span><sup>+</sup>
                                </div>
                                <h6 class="counter-title">{{ __('messages.services.sectionTag') }}</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-trophy-2"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="5">0</span>
                                </div>
                                <h6 class="counter-title">{{ __('messages.about.stats.yearsLabel') }}</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Practice Section -->
    <section class="practice-section" style="background-image: url({{ asset('counsel/images/background/pattern-2.png') }})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ __('messages.services.title') }} {{ __('messages.services.titleHighlight') }}</h2>
            </div>
            <div class="inner-container">
                <div class="clearfix">

                    <!-- Practice Block -->
                    <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon flaticon-file"></div>
                            <h5><a href="#">{{ __('messages.services.politicalEducation') }}</a></h5>
                            <div class="text">{{ Str::limit(__('messages.services.politicalEducationDesc'), 60) }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="#"></a>
                        </div>
                    </div>

                    <!-- Practice Block -->
                    <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon flaticon-briefcase"></div>
                            <h5><a href="#">{{ __('messages.services.youthEngagement') }}</a></h5>
                            <div class="text">{{ Str::limit(__('messages.services.youthEngagementDesc'), 60) }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="#"></a>
                        </div>
                    </div>

                    <!-- Practice Block -->
                    <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon flaticon-handcuffs-1"></div>
                            <h5><a href="#">{{ __('messages.services.communityDev') }}</a></h5>
                            <div class="text">{{ Str::limit(__('messages.services.communityDevDesc'), 60) }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="#"></a>
                        </div>
                    </div>

                    <!-- Practice Block -->
                    <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon flaticon-save-money"></div>
                            <h5><a href="#">{{ __('messages.services.womenEmpowerment') }}</a></h5>
                            <div class="text">{{ Str::limit(__('messages.services.womenEmpowermentDesc'), 60) }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="#"></a>
                        </div>
                    </div>

                    <!-- Practice Block -->
                    <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon flaticon-injury"></div>
                            <h5><a href="#">{{ __('messages.services.goodGovernance') }}</a></h5>
                            <div class="text">{{ Str::limit(__('messages.services.goodGovernanceDesc'), 60) }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="#"></a>
                        </div>
                    </div>

                    <!-- Practice Block -->
                    <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="icon flaticon-law"></div>
                            <h5><a href="#">{{ __('messages.services.peaceBuilding') }}</a></h5>
                            <div class="text">{{ Str::limit(__('messages.services.peaceBuildingDesc'), 60) }}</div>
                            <a class="arrow flaticon-right-arrow-3" href="#"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Practice Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ __('messages.leaders.title') }} {{ __('messages.leaders.titleHighlight') }}</h2>
            </div>
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{ asset('counsel/images/resource/team-1.jpg') }}" alt="">
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">{{ __('messages.leaders.leader1Name') }}</a></h4>
                                <div class="designation">{{ __('messages.leaders.leader1Position') }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{ asset('counsel/images/resource/team-2.jpg') }}" alt="">
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">{{ __('messages.leaders.leader2Name') }}</a></h4>
                                <div class="designation">{{ __('messages.leaders.leader2Position') }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{ asset('counsel/images/resource/team-3.jpg') }}" alt="">
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">{{ __('messages.leaders.leader3Name') }}</a></h4>
                                <div class="designation">{{ __('messages.leaders.leader3Position') }}</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ __('messages.news.title') }} {{ __('messages.news.titleHighlight') }}</h2>
            </div>
            <div class="row clearfix">

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">
                                <img src="{{ asset('counsel/images/resource/news-1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon flaticon-calendar-1"></span> {{ now()->format('M d, Y') }}</li>
                            </ul>
                            <h4><a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">{{ __('messages.news.item1Title') }}</a></h4>
                            <div class="text">{{ Str::limit(__('messages.news.item1Desc'), 120) }}</div>
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}" class="read-more">{{ __('messages.news.readMore') }} <span class="arrow flaticon-right"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">
                                <img src="{{ asset('counsel/images/resource/news-2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon flaticon-calendar-1"></span> {{ now()->subDays(3)->format('M d, Y') }}</li>
                            </ul>
                            <h4><a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">{{ __('messages.news.item2Title') }}</a></h4>
                            <div class="text">{{ Str::limit(__('messages.news.item2Desc'), 120) }}</div>
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}" class="read-more">{{ __('messages.news.readMore') }} <span class="arrow flaticon-right"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">
                                <img src="{{ asset('counsel/images/resource/news-3.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon flaticon-calendar-1"></span> {{ now()->subDays(7)->format('M d, Y') }}</li>
                            </ul>
                            <h4><a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}">{{ __('messages.news.item3Title') }}</a></h4>
                            <div class="text">{{ Str::limit(__('messages.news.item3Desc'), 120) }}</div>
                            <a href="{{ route('briefing.news', ['locale' => app()->getLocale()]) }}" class="read-more">{{ __('messages.news.readMore') }} <span class="arrow flaticon-right"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="image">
                    <img src="{{ asset('counsel/images/resource/cta.jpg') }}" alt="">
                </div>
                <div class="content">
                    <h2>{{ __('messages.cta.title') }} <br> {{ __('messages.cta.titleHighlight') }}</h2>
                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="theme-btn btn-style-two">
                        <span class="txt">{{ __('messages.cta.button') }} <i class="arrow flaticon-right"></i></span>
                    </a>
                </div>
                <div class="hammer-image">
                    <img src="{{ asset('counsel/images/resource/hammer.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA Section -->

@endsection
