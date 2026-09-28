@extends('layouts.app')

@section('content')
@php
$locale = app()->getLocale();
$events = [
    [
        'title' => 'messages.services.peaceBuilding',
        'desc' => 'messages.services.peaceBuildingDesc',
        'date' => 'messages.news.item1Date',
        'location' => 'messages.contact.headOffice',
        'img' => 'assets/img/all-images/blog/blog-img6.png',
    ],
    [
        'title' => 'messages.services.economicDev',
        'desc' => 'messages.services.economicDevDesc',
        'date' => 'messages.news.item2Date',
        'location' => 'messages.contact.headOffice',
        'img' => 'assets/img/all-images/blog/blog-img7.png',
    ],
];
@endphp

    <x-page-hero
        title="{{ __('messages.pages.events.title') }}"
        titleHighlight="{{ __('messages.pages.events.titleHighlight') }}"
        description="{{ __('messages.pages.events.description') }}"
    />

    <div class="vl-blog-inner-area sp2">
        <div class="container">
            <div class="row g-4">
                @foreach ($events as $index => $item)
                    <div class="col-xl-6 col-md-6" data-aos="fade-up" data-aos-duration="{{ 900 + ($index * 150) }}">
                        <div class="vl-blog-inner-item h-100">
                            <div class="vl-blog-1-thumb image-anime" style="height: 260px; overflow: hidden; border-radius: 16px;">
                                <img src="{{ asset($item['img']) }}" alt="{{ __($item['title']) }}" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="vl-blog-1-content p-4">
                                <div class="vl-blog-meta">
                                    <ul class="d-flex align-items-center gap-3">
                                        <li>
                                            <a href="#" class="text-danger fw-bold"><i class="fa-solid fa-location-dot me-1"></i> {{ __($item['location']) }}</a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-muted"><i class="fa-solid fa-calendar-days me-1"></i> {{ __($item['date']) }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="space18"></div>
                                <h4 class="vl-blog-1-title fs-5 fw-bold mb-2">
                                    <a href="#">{{ __($item['title']) }}</a>
                                </h4>
                                <div class="space12"></div>
                                <p class="text-muted leading-relaxed mb-4">{{ __($item['desc']) }}</p>
                                <div class="vl-blog-1-icon">
                                    <a href="{{ route('contact', ['locale' => $locale]) }}" class="readmore text-danger fw-bold">{{ __('messages.nav.contact') }} <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
