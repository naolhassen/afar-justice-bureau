@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.structure.title') }}"
        titleHighlight="{{ __('messages.pages.structure.titleHighlight') }}"
        description="{{ __('messages.pages.structure.description') }}"
    />

    <div class="service3 sp1">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="900">
                    <div class="service3-slider-box h-100 p-4 p-md-5" style="background: #f8f8fa; border-radius: 20px; border: 1px solid #eef0f3;">
                        <div class="icons mb-4">
                            <i class="fa-solid fa-user-tie fa-2xl" style="color: #9b59b6;"></i>
                        </div>
                        <h4 class="title fs-5 fw-bold mb-3">{{ __('messages.leaders.leader1Position') }}</h4>
                        <p class="text-muted leading-relaxed mb-4">{{ __('messages.leaders.leader1Name') }}</p>
                        <a href="{{ route('about.leadership', ['locale' => app()->getLocale()]) }}" class="readmore text-danger fw-bold">{{ __('messages.nav.leadership') }} <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1050">
                    <div class="service3-slider-box h-100 p-4 p-md-5" style="background: #f8f8fa; border-radius: 20px; border: 1px solid #eef0f3;">
                        <div class="icons mb-4">
                            <i class="fa-solid fa-sitemap fa-2xl" style="color: #9b59b6;"></i>
                        </div>
                        <h4 class="title fs-5 fw-bold mb-3">{{ __('messages.leaders.leader2Position') }}</h4>
                        <p class="text-muted leading-relaxed mb-4">{{ __('messages.leaders.leader2Name') }}</p>
                        <a href="{{ route('about.leadership', ['locale' => app()->getLocale()]) }}" class="readmore text-danger fw-bold">{{ __('messages.nav.leadership') }} <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="service3-slider-box h-100 p-4 p-md-5" style="background: #f8f8fa; border-radius: 20px; border: 1px solid #eef0f3;">
                        <div class="icons mb-4">
                            <i class="fa-solid fa-bullhorn fa-2xl" style="color: #9b59b6;"></i>
                        </div>
                        <h4 class="title fs-5 fw-bold mb-3">{{ __('messages.leaders.leader3Position') }}</h4>
                        <p class="text-muted leading-relaxed mb-4">{{ __('messages.leaders.leader3Name') }}</p>
                        <a href="{{ route('about.leadership', ['locale' => app()->getLocale()]) }}" class="readmore text-danger fw-bold">{{ __('messages.nav.leadership') }} <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
