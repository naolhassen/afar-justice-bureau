@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.leadership.title') }}"
        titleHighlight="{{ __('messages.pages.leadership.titleHighlight') }}"
        description="{{ __('messages.pages.leadership.description') }}"
    />

    <div class="team3 sp2">
        <div class="container">
            <div class="row g-4 justify-content-center">
                @foreach ([
                    ['name' => 'messages.leaders.leader1Name', 'position' => 'messages.leaders.leader1Position', 'image' => '/images/leaders/mohammed-hussen-alisa.jpg', 'delay' => '900'],
                    ['name' => 'messages.leaders.leader2Name', 'position' => 'messages.leaders.leader2Position', 'image' => '/images/leaders/weleo-aytile-hussen.jpg', 'delay' => '1000'],
                    ['name' => 'messages.leaders.leader3Name', 'position' => 'messages.leaders.leader3Position', 'image' => '/images/leaders/mohammed-aden-mohammed.jpg', 'delay' => '1100'],
                ] as $leader)
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="{{ $leader['delay'] }}">
                        <div class="team3-widget-boxarea">
                            <div class="team-images">
                                <div class="img1" style="height: 340px; overflow: hidden; border-radius: 16px;">
                                    <img src="{{ $leader['image'] }}" alt="{{ __($leader['name']) }}" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>
                            <div class="text-share-area">
                                <div class="text">
                                    <a href="#">{{ __($leader['name']) }}</a>
                                    <div class="space14"></div>
                                    <p style="color: #9b59b6; font-weight: 500;">{{ __($leader['position']) }}</p>
                                </div>
                                <div class="share">
                                    <a href="mailto:prosperityafarbranch@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                                </div>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-telegram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
