@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ __('messages.pages.articles.title') }}"
        titleHighlight="{{ __('messages.pages.articles.titleHighlight') }}"
        description="{{ app()->getLocale() === 'am' ? 'የሕግ ጥናቶች፣ ዶክተራል ጽሑፎች እና የክልሉ ስትራቴጂካዊ ትንታኔዎች' : 'Legal studies, research papers, and strategic analysis from the Afar Regional Justice Bureau.' }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <div class="sec-title text-center mb-5">
                <span class="civic-badge civic-badge-navy mb-2">{{ app()->getLocale() === 'am' ? 'ሕግና ምርምር' : 'Legal Jurisprudence & Research' }}</span>
                <h2 style="font-size: clamp(2rem, 3vw, 2.8rem); font-weight: 800; color: var(--afar-navy);">
                    {{ __('messages.pages.articles.title') }} <span>{{ __('messages.pages.articles.titleHighlight') }}</span>
                </h2>
            </div>

            <div class="row g-4">
                @forelse ($articles as $index => $item)
                    @php
                        $badges = ['civic-badge-gold', 'civic-badge-navy', 'civic-badge-green'];
                        $badge = $badges[$index % 3];
                        $img = $item->image
                            ? (Str::startsWith($item->image, 'uploads/') ? asset('storage/' . $item->image) : asset($item->image))
                            : asset('images/gallery/gallery-' . (($index % 4) + 8) . '.jpg');
                    @endphp
                    <div class="col-lg-6 mb-4">
                        <div class="civic-card h-100 d-flex flex-column" style="padding: 0; overflow: hidden;">
                            <a href="{{ route('briefing.articles.show', ['locale' => app()->getLocale(), 'id' => $item->id]) }}" style="display: block; height: 240px; width: 100%; overflow: hidden; position: relative;">
                                <img src="{{ $img }}" alt="{{ $item->title }}" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;">
                                <span class="civic-badge {{ $badge }}" style="position: absolute; top: 14px; left: 14px; font-size: 11px;">
                                    {{ app()->getLocale() === 'am' ? 'መጣጥፍ' : 'Article' }}
                                </span>
                            </a>
                            <div style="padding: 28px 24px; display: flex; flex-direction: column; flex-grow: 1;">
                                <div style="font-size: 12px; color: var(--afar-muted); font-weight: 600; margin-bottom: 10px;">
                                    <i class="fa fa-calendar me-1" style="color: var(--afar-accent);"></i>
                                    {{ ($item->published_at ?? $item->created_at)->format('M d, Y') }}
                                    @if($item->author)
                                        &bull; <i class="fa fa-user ms-1"></i> {{ $item->author->name }}
                                    @endif
                                </div>
                                <h4 style="font-weight: 800; color: var(--afar-navy); font-size: 1.25rem; line-height: 1.35; margin-bottom: 12px;">
                                    <a href="{{ route('briefing.articles.show', ['locale' => app()->getLocale(), 'id' => $item->id]) }}" style="color: inherit; text-decoration: none;">
                                        {{ $item->title }}
                                    </a>
                                </h4>
                                <p style="font-size: 0.92rem; line-height: 1.7; color: var(--afar-muted); margin-bottom: 20px; flex-grow: 1;">
                                    {{ Str::limit(strip_tags($item->excerpt ?? $item->body), 180) }}
                                </p>
                                <div class="pt-3 border-top mt-auto">
                                    <a href="{{ route('briefing.articles.show', ['locale' => app()->getLocale(), 'id' => $item->id]) }}" style="color: var(--afar-navy); font-weight: 700; font-size: 13px; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
                                        <span>{{ __('messages.news.readMore') }}</span>
                                        <i class="fa fa-arrow-right" style="color: var(--afar-accent);"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <i class="fa fa-book-open fa-3x mb-3" style="color: #c3d6e5;"></i>
                        <p class="text-muted">{{ app()->getLocale() === 'am' ? 'ምንም ጽሑፎች አልተገኙም' : 'No articles found.' }}</p>
                    </div>
                @endforelse
            </div>

            @if($articles->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $articles->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection
