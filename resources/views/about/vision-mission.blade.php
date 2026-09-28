@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.visionMission.title') }}"
        titleHighlight="{{ __('messages.pages.visionMission.titleHighlight') }}"
        description="{{ __('messages.pages.visionMission.description') }}"
    />

    <div class="about3 sp1">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-6 col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="service3-slider-box h-100 p-4 p-md-5" style="border-radius: 20px; background: #f8f8fa; border: 1px solid #eef0f3;">
                        <div class="icons mb-4">
                            <i class="fa-solid fa-eye fa-2xl" style="color: #9b59b6;"></i>
                        </div>
                        <h3 class="title fs-4 fw-bold mb-3">{{ __('messages.pages.visionMission.vision') }}</h3>
                        <p class="text-muted leading-relaxed" style="font-size: 16px;">{{ __('messages.pages.visionMission.visionText') }}</p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="service3-slider-box h-100 p-4 p-md-5" style="border-radius: 20px; background: #f8f8fa; border: 1px solid #eef0f3;">
                        <div class="icons mb-4">
                            <i class="fa-solid fa-bullseye fa-2xl" style="color: #9b59b6;"></i>
                        </div>
                        <h3 class="title fs-4 fw-bold mb-3">{{ __('messages.pages.visionMission.mission') }}</h3>
                        <p class="text-muted leading-relaxed" style="font-size: 16px;">{{ __('messages.pages.visionMission.missionText') }}</p>
                    </div>
                </div>

                <div class="col-xl-12 mt-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cta-bg-area text-center py-5 px-4" style="border-radius: 20px;">
                        <h3 class="text-white fw-bold mb-3 fs-3">{{ __('messages.pages.visionMission.values') }}</h3>
                        <div class="space16"></div>
                        <p class="text-white-50 lead mx-auto" style="max-width: 800px;">
                            {{ __('messages.pages.visionMission.valuesItems') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
