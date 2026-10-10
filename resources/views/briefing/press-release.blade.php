@extends('layouts.app')

@section('content')
    @php
        $locale = app()->getLocale() ?: 'aa';
    @endphp

    <x-page-hero
        title="{{ __('messages.pages.pressRelease.title') }}"
        titleHighlight="{{ __('messages.pages.pressRelease.titleHighlight') }}"
        description="{{ __('messages.pages.pressRelease.description') }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">

                    @if($releases->count() > 0)
                        <div class="press-release-list" style="display: flex; flex-direction: column; gap: 28px;">
                            @foreach ($releases as $item)
                                @php
                                    $detailUrl = route('briefing.press-release.show', ['locale' => $locale, 'slug' => $item->slug]);
                                    $titleAm = $item->trans('title', 'am');
                                    $titleEn = $item->trans('title', 'en');
                                    $date = ($item->published_at ?? $item->created_at)->format('F d, Y');
                                @endphp
                                <div class="press-release-item" style="background: #ffffff; border-radius: 14px; border-left: 5px solid var(--afar-accent); box-shadow: 0 6px 24px rgba(10,34,54,0.06); padding: 26px 30px; transition: transform 0.2s ease;">
                                    @if($titleAm)
                                        <h4 style="font-size: 1.15rem; font-weight: 800; line-height: 1.4; margin-bottom: 6px;">
                                            <a href="{{ $detailUrl }}" style="color: var(--afar-navy); text-decoration: none;">{{ $titleAm }}</a>
                                        </h4>
                                    @endif
                                    <h5 style="font-size: 1.05rem; font-weight: 700; line-height: 1.45; margin-bottom: 14px;">
                                        <a href="{{ $detailUrl }}" style="color: var(--afar-muted); text-decoration: none;">{{ $titleEn }}</a>
                                    </h5>
                                    <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 14px; font-size: 0.9rem; color: var(--afar-muted); font-weight: 600;">
                                        <span style="display: inline-flex; align-items: center; gap: 6px;">
                                            <i class="fa fa-calendar" style="color: var(--afar-accent);"></i> {{ $date }}
                                        </span>
                                        @if($item->category)
                                            <span style="display: inline-flex; align-items: center; gap: 6px;">
                                                <i class="fa fa-tag" style="color: var(--afar-accent);"></i>
                                                <span style="background: rgba(10,34,54,0.06); color: var(--afar-navy); padding: 3px 10px; border-radius: 20px; font-size: 0.8rem;">{{ $item->category }}</span>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="d-flex justify-content-center mt-5">
                            {{ $releases->links() }}
                        </div>
                    @else
                        <div class="civic-card text-center py-5">
                            <h4 style="font-weight: 800; color: var(--afar-navy);">{{ __('messages.comingSoon') }}</h4>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection
