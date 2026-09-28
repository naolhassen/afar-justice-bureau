@extends('layouts.app')

@section('content')
@php
$locale = app()->getLocale();
$releases = [
    [
        'title' => 'messages.pages.pressRelease.title',
        'desc' => 'messages.pages.pressRelease.description',
        'date' => 'messages.news.item1Date',
        'ref' => 'PR-AFAR-2025/01',
    ],
];
@endphp

    <x-page-hero
        title="{{ __('messages.pages.pressRelease.title') }}"
        titleHighlight="{{ __('messages.pages.pressRelease.titleHighlight') }}"
        description="{{ __('messages.pages.pressRelease.description') }}"
    />

    <div class="about3 sp1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    @foreach ($releases as $item)
                        <div class="service3-slider-box p-4 p-md-5 mb-4" style="background: #f8f8fa; border-radius: 24px; border: 1px solid #eef0f3;">
                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                                <span class="badge bg-danger px-3 py-2 rounded-pill">{{ $item['ref'] }}</span>
                                <span class="text-muted small"><i class="fa-solid fa-calendar-days me-1"></i> {{ __($item['date']) }}</span>
                            </div>
                            <h3 class="fs-4 fw-bold mb-3">{{ __($item['title']) }}</h3>
                            <p class="lead text-muted mb-4">{{ __($item['desc']) }}</p>
                            <div class="p-4 bg-white rounded-3 border mb-4">
                                <h6 class="fw-bold mb-2">{{ __('messages.contact.info') }}</h6>
                                <p class="text-muted small mb-1">{{ __('messages.contact.headOffice') }}</p>
                                <p class="text-muted small mb-0"><a href="mailto:prosperityafarbranch@gmail.com" class="text-danger">prosperityafarbranch@gmail.com</a></p>
                            </div>
                            <a href="mailto:prosperityafarbranch@gmail.com?subject=Press Inquiries" class="vl-btn1">
                                <i class="fa-solid fa-microphone me-2"></i> Media Inquiries
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
