@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.manifesto.title') }}"
        titleHighlight="{{ __('messages.pages.manifesto.titleHighlight') }}"
        description="{{ __('messages.pages.manifesto.description') }}"
    />

    <div class="about3 sp1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="service3-slider-box p-4 p-md-5" style="background: #f8f8fa; border-radius: 24px; border: 1px solid #eef0f3;">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="icons">
                                <i class="fa-solid fa-book-open fa-2xl" style="color: #9b59b6;"></i>
                            </div>
                            <div>
                                <h3 class="fs-4 fw-bold mb-1">{{ __('messages.pages.manifesto.title') }}</h3>
                                <p class="text-muted small mb-0">{{ __('messages.metadata.title') }}</p>
                            </div>
                        </div>
                        <p class="lead text-muted mb-4">{{ __('messages.pages.manifesto.description') }}</p>
                        <div class="p-4 bg-white rounded-3 border mb-4">
                            <h5 class="fw-bold mb-2">{{ __('messages.pages.visionMission.vision') }}</h5>
                            <p class="text-muted mb-0">{{ __('messages.pages.visionMission.visionText') }}</p>
                        </div>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="mailto:prosperityafarbranch@gmail.com?subject=Manifesto Request" class="vl-btn1">
                                <i class="fa-solid fa-file-pdf me-2"></i> Request Document
                            </a>
                            <a href="{{ route('about.vision-mission', ['locale' => app()->getLocale()]) }}" class="vl-btn2">
                                {{ __('messages.nav.visionMission') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
