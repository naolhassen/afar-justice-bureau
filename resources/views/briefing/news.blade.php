@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.news.title') }}"
        titleHighlight="{{ __('messages.news.titleHighlight') }}"
        description="{{ app()->getLocale() === 'am' ? 'ከአፋር ክልል ፍትህ ቢሮ የቅርብ ጊዜ ዜናዎች እና የህግ ዝመናዎች' : 'Official press bulletins, judicial conferences, and regional legal updates from the Afar National Regional State Justice Bureau.' }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="sec-title text-center mb-5">
                <span class="civic-badge civic-badge-navy mb-2">{{ __('messages.news.sectionTag') }}</span>
                <h2 style="font-size: clamp(2rem, 3vw, 2.8rem); font-weight: 800; color: var(--afar-navy);">
                    {{ __('messages.news.title') }} <span>{{ __('messages.news.titleHighlight') }}</span>
                </h2>
            </div>

            <div class="row g-4">
                @forelse ($news as $index => $item)
                    @php
                        $badges = ['civic-badge-gold', 'civic-badge-navy', 'civic-badge-green'];
                        $badge = $badges[$index % 3];
                    @endphp
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="civic-card h-100 d-flex flex-column" style="padding: 0; overflow: hidden;">
                            <a href="{{ route('briefing.news.show', ['locale' => app()->getLocale(), 'id' => $item->id]) }}" style="display: block; height: 220px; width: 100%; overflow: hidden; position: relative;">
                                <img src="{{ $item->image ? (Str::startsWith($item->image, 'uploads/') ? asset('storage/' . $item->image) : asset($item->image)) : asset('images/news/news-' . (($index % 4) + 1) . '.jpg') }}"
                                     alt="{{ $item->title }}"
                                     style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
                                <span class="civic-badge {{ $badge }}" style="position: absolute; top: 14px; left: 14px; font-size: 11px;">
                                    {{ __('messages.news.sectionTag') }}
                                </span>
                            </a>
                            <div style="padding: 26px 22px; display: flex; flex-direction: column; flex-grow: 1;">
                                <div style="font-size: 12px; color: var(--afar-muted); font-weight: 600; margin-bottom: 10px;">
                                    <i class="fa fa-calendar me-1" style="color: var(--afar-accent);"></i>
                                    {{ ($item->published_at ?? $item->created_at)->format('M d, Y') }}
                                </div>
                                <h4 style="font-weight: 800; color: var(--afar-navy); font-size: 1.15rem; line-height: 1.35; margin-bottom: 12px;">
                                    <a href="{{ route('briefing.news.show', ['locale' => app()->getLocale(), 'id' => $item->id]) }}" style="color: inherit; text-decoration: none;">
                                        {{ $item->title }}
                                    </a>
                                </h4>
                                <p style="font-size: 0.9rem; line-height: 1.65; color: var(--afar-muted); margin-bottom: 18px; flex-grow: 1;">
                                    {{ Str::limit(strip_tags($item->excerpt ?? $item->body), 140) }}
                                </p>
                                <div class="pt-3 border-top mt-auto">
                                    <a href="{{ route('briefing.news.show', ['locale' => app()->getLocale(), 'id' => $item->id]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 13px; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                        <span>{{ __('messages.news.readMore') }}</span>
                                        <i class="fa fa-arrow-right" style="color: var(--afar-accent);"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <i class="fa fa-newspaper-o fa-3x mb-3" style="color: #c3d6e5;"></i>
                        <p class="text-muted">{{ app()->getLocale() === 'am' ? 'ምንም ዜና አልተገኘም' : 'No news articles found.' }}</p>
                    </div>
                @endforelse
            </div>

            @if($news->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $news->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection
