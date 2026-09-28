@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.logoMeaning.title') }}"
        titleHighlight="{{ __('messages.pages.logoMeaning.titleHighlight') }}"
        description="{{ __('messages.pages.logoMeaning.description') }}"
    />

    <div class="about3 sp1">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-xl-5 text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="p-4 bg-white shadow-lg" style="border-radius: 24px; border: 1px solid #eef0f3; display: inline-block;">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Prosperity Party Emblem" style="max-width: 320px; width: 100%; border-radius: 16px;">
                    </div>
                </div>

                <div class="col-xl-7" data-aos="fade-left" data-aos-duration="1000">
                    <div class="heading2">
                        <h2 class="vl-section-title">
                            {{ __('messages.pages.logoMeaning.title') }} <span style="color: #9b59b6;">{{ __('messages.pages.logoMeaning.titleHighlight') }}</span>
                        </h2>
                        <div class="space16"></div>
                        <p class="lead text-muted mb-4">
                            {{ __('messages.pages.logoMeaning.description') }}
                        </p>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-3 h-100 border">
                                    <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-sun text-warning me-2"></i> {{ __('messages.services.peaceBuilding') }}</h6>
                                    <p class="small text-muted mb-0">{{ __('messages.services.peaceBuildingDesc') }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-3 h-100 border">
                                    <h6 class="fw-bold text-dark mb-2"><i class="fa-solid fa-seedling text-success me-2"></i> {{ __('messages.services.economicDev') }}</h6>
                                    <p class="small text-muted mb-0">{{ __('messages.services.economicDevDesc') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
