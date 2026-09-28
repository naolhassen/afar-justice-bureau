@props([
    'title',
    'titleHighlight' => '',
    'description' => null,
])

@php
$currentLocale = app()->getLocale();
@endphp

<!--===== HERO AREA STARTS =======-->
<div class="all-inner-header-area" style="background-image: url({{ asset('assets/img/all-images/bg/hero-bg4.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-8">
                <div class="heading1">
                    <h1 class="text-white">{{ $title }} @if($titleHighlight)<span style="color: #9b59b6;">{{ $titleHighlight }}</span>@endif</h1>
                    <div class="space16"></div>
                    <a href="{{ route('home', ['locale' => $currentLocale]) }}" class="text-white-50">
                        {{ __('messages.nav.home') }} <i class="fa-solid fa-angle-right mx-2 text-danger"></i> <span class="text-white">{{ $title }}</span>
                    </a>
                    @if ($description)
                        <div class="space16"></div>
                        <p class="text-white-50 lead mb-0" style="max-width: 650px;">{{ $description }}</p>
                    @endif
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                <div class="inner-images-area text-end">
                    <img src="{{ asset('assets/img/elements/elements1.png') }}" alt="" class="elements1">
                    <div class="img1">
                        <img src="{{ asset('images/gallery/gallery-11.jpg') }}" alt="Prosperity Afar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->
