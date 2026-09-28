@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.formation.title') }}"
        titleHighlight="{{ __('messages.pages.formation.titleHighlight') }}"
        description="{{ __('messages.pages.formation.description') }}"
    />

    <div class="about3 sp1">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-xl-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="about-images-area">
                        <div class="img1 text-end">
                            <img src="{{ asset('images/gallery/gallery-12.jpg') }}" alt="Gallery" style="border-radius: 20px;">
                        </div>
                        <div class="img2">
                            <img src="{{ asset('images/gallery/gallery-13.jpg') }}" alt="Gallery" style="border-radius: 20px;">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="heading2">
                        <h2 class="vl-section-title">
                            {{ __('messages.pages.formation.title') }} <span style="color: #9b59b6;">{{ __('messages.pages.formation.titleHighlight') }}</span>
                        </h2>
                        <div class="space16"></div>
                        <p class="lead text-muted mb-4">
                            {{ __('messages.pages.formation.description') }}
                        </p>
                        <div class="space16"></div>
                        <div class="p-4 bg-light rounded-4 border">
                            <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-landmark text-danger me-2"></i> {{ __('messages.nav.visionMission') }}</h5>
                            <p class="text-muted mb-0">{{ __('messages.pages.visionMission.visionText') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
