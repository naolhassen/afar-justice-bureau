@extends('layouts.app')

@section('content')
    <x-page-hero
        title="{{ app()->getLocale() === 'am' ? 'የፎቶ እና የቪዲዮ' : 'Media Gallery' }}"
        titleHighlight="{{ app()->getLocale() === 'am' ? 'ጋለሪ' : 'Gallery' }}"
        description="{{ app()->getLocale() === 'am' ? 'የክልሉ ፍትህ ቢሮን የሚገነዘቡ ፎቶዎች እና የመረጃ ቪዲዮዎች' : 'Photos and videos from the Afar Regional Justice Bureau.' }}"
    />

    <section class="civic-section">
        <div class="auto-container">
            <!-- Tabs -->
            <div class="d-flex justify-content-center mb-5" role="tablist">
                <button class="gallery-tab active" data-tab="images" role="tab" aria-selected="true" aria-controls="images-panel">
                    <i class="fa fa-images me-2"></i> {{ app()->getLocale() === 'am' ? 'ፎቶዎች' : 'Images' }}
                </button>
                <button class="gallery-tab" data-tab="videos" role="tab" aria-selected="false" aria-controls="videos-panel">
                    <i class="fa fa-video me-2"></i> {{ app()->getLocale() === 'am' ? 'ቪዲዮዎች' : 'Videos' }}
                </button>
            </div>

            <!-- Images panel -->
            <div id="images-panel" class="gallery-panel active" role="tabpanel">
                @if($images->count() > 0)
                    <div class="gallery-grid">
                        @foreach($images as $image)
                            <div class="gallery-item" data-gallery-image="{{ asset('storage/' . $image->image) }}" data-caption="{{ $image->title }}">
                                <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->title }}">
                                <div class="gallery-overlay">
                                    <i class="fa fa-search-plus"></i>
                                    @if($image->title)
                                        <span class="gallery-caption">{{ $image->title }}</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if($images->hasPages())
                        <div class="d-flex justify-content-center mt-4">
                            {{ $images->links() }}
                        </div>
                    @endif
                @else
                    <div class="text-center py-5">
                        <i class="fa fa-images fa-3x mb-3" style="color: #c3d6e5;"></i>
                        <p class="text-muted">{{ app()->getLocale() === 'am' ? 'ምንም ፎቶዎች አልተገኙም' : 'No images available.' }}</p>
                    </div>
                @endif
            </div>

            <!-- Videos panel -->
            <div id="videos-panel" class="gallery-panel" role="tabpanel" hidden>
                @if($videos->count() > 0)
                    <div class="row g-4">
                        @foreach($videos as $video)
                            @php
                                $embedUrl = null;
                                $videoUrl = $video->video_url;
                                if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/)([a-zA-Z0-9_-]+)/', $videoUrl, $matches)) {
                                    $embedUrl = 'https://www.youtube.com/embed/' . $matches[1];
                                } elseif (preg_match('/vimeo\.com\/(\d+)/', $videoUrl, $matches)) {
                                    $embedUrl = 'https://player.vimeo.com/video/' . $matches[1];
                                }
                                $thumb = $video->thumbnail ? asset('storage/' . $video->thumbnail) : asset('images/gallery/gallery-11.jpg');
                            @endphp
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="gallery-video-card" data-video-url="{{ $videoUrl }}">
                                    <div class="gallery-video-thumb" style="background-image: url('{{ $thumb }}')">
                                        <button class="gallery-play-btn" aria-label="Play video">
                                            <i class="fa fa-play"></i>
                                        </button>
                                    </div>
                                    <div class="gallery-video-info">
                                        <h5>{{ $video->title }}</h5>
                                        @if($video->description)
                                            <p>{{ Str::limit(strip_tags($video->description), 100) }}</p>
                                        @endif
                                    </div>
                                </div>
                                @if($embedUrl)
                                    <template class="video-embed-template">
                                        <iframe width="100%" height="100%" src="{{ $embedUrl }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
                                    </template>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    @if($videos->hasPages())
                        <div class="d-flex justify-content-center mt-4">
                            {{ $videos->links() }}
                        </div>
                    @endif
                @else
                    <div class="text-center py-5">
                        <i class="fa fa-video fa-3x mb-3" style="color: #c3d6e5;"></i>
                        <p class="text-muted">{{ app()->getLocale() === 'am' ? 'ምንም ቪዲዮዎች አልተገኙም' : 'No videos available.' }}</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Image Lightbox -->
    <div id="galleryLightbox" class="gallery-lightbox" aria-hidden="true">
        <button class="gallery-lightbox-close" aria-label="Close"><i class="fa fa-times"></i></button>
        <button class="gallery-lightbox-prev" aria-label="Previous"><i class="fa fa-chevron-left"></i></button>
        <button class="gallery-lightbox-next" aria-label="Next"><i class="fa fa-chevron-right"></i></button>
        <div class="gallery-lightbox-content">
            <img src="" alt="">
            <div class="gallery-lightbox-caption"></div>
        </div>
    </div>

    <!-- Video Modal -->
    <div id="galleryVideoModal" class="gallery-video-modal" aria-hidden="true">
        <div class="gallery-video-modal-backdrop"></div>
        <div class="gallery-video-modal-content">
            <button class="gallery-video-modal-close" aria-label="Close"><i class="fa fa-times"></i></button>
            <div class="gallery-video-modal-player"></div>
        </div>
    </div>

    @push('styles')
    <style>
        .gallery-tab {
            background: transparent;
            border: 2px solid var(--afar-navy);
            color: var(--afar-navy);
            padding: 12px 28px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.25s ease;
            margin: 0 6px;
        }
        .gallery-tab.active,
        .gallery-tab:hover {
            background: var(--afar-navy);
            color: #fff;
        }
        .gallery-panel {
            display: none;
        }
        .gallery-panel.active {
            display: block;
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        .gallery-item {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            cursor: zoom-in;
            aspect-ratio: 4 / 3;
            background: #eef3f8;
        }
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.08);
        }
        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: rgba(10, 34, 54, 0.45);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            color: #fff;
            text-align: center;
            padding: 16px;
        }
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        .gallery-overlay i {
            font-size: 2rem;
            margin-bottom: 8px;
        }
        .gallery-caption {
            font-size: 13px;
            font-weight: 600;
            line-height: 1.35;
        }
        .gallery-video-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(15,41,66,0.08);
            cursor: pointer;
        }
        .gallery-video-thumb {
            height: 200px;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .gallery-play-btn {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: var(--afar-red);
            color: #fff;
            border: none;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.2s ease, background 0.2s ease;
            box-shadow: 0 4px 16px rgba(0,0,0,0.2);
        }
        .gallery-play-btn:hover {
            transform: scale(1.1);
            background: #c0102a;
        }
        .gallery-video-info {
            padding: 20px;
        }
        .gallery-video-info h5 {
            font-weight: 800;
            color: var(--afar-navy);
            margin-bottom: 8px;
            font-size: 1.05rem;
        }
        .gallery-video-info p {
            color: var(--afar-muted);
            font-size: 0.9rem;
            margin: 0;
            line-height: 1.55;
        }
        .gallery-lightbox,
        .gallery-video-modal {
            position: fixed;
            inset: 0;
            z-index: 9999;
            background: rgba(10, 20, 30, 0.95);
            display: none;
            align-items: center;
            justify-content: center;
        }
        .gallery-lightbox.active,
        .gallery-video-modal.active {
            display: flex;
        }
        .gallery-lightbox-content {
            position: relative;
            max-width: 90vw;
            max-height: 85vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .gallery-lightbox-content img {
            max-width: 100%;
            max-height: 80vh;
            border-radius: 8px;
            box-shadow: 0 12px 48px rgba(0,0,0,0.35);
        }
        .gallery-lightbox-caption {
            color: #fff;
            margin-top: 14px;
            font-size: 15px;
            text-align: center;
        }
        .gallery-lightbox-close,
        .gallery-video-modal-close {
            position: absolute;
            top: 24px;
            right: 24px;
            background: rgba(255,255,255,0.12);
            color: #fff;
            border: none;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
        }
        .gallery-lightbox-prev,
        .gallery-lightbox-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255,255,255,0.12);
            color: #fff;
            border: none;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .gallery-lightbox-prev { left: 24px; }
        .gallery-lightbox-next { right: 24px; }
        .gallery-video-modal-backdrop {
            position: absolute;
            inset: 0;
        }
        .gallery-video-modal-content {
            position: relative;
            width: 90vw;
            max-width: 900px;
            aspect-ratio: 16 / 9;
            background: #000;
            border-radius: 12px;
            overflow: hidden;
        }
        .gallery-video-modal-player iframe,
        .gallery-video-modal-player video {
            width: 100%;
            height: 100%;
            border: none;
        }
        @media (max-width: 767px) {
            .gallery-lightbox-prev { left: 8px; }
            .gallery-lightbox-next { right: 8px; }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
    (function() {
        // Tabs
        var tabs = document.querySelectorAll('.gallery-tab');
        var panels = document.querySelectorAll('.gallery-panel');
        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                var target = this.dataset.tab;
                tabs.forEach(function(t) { t.classList.remove('active'); t.setAttribute('aria-selected', 'false'); });
                panels.forEach(function(p) { p.classList.remove('active'); p.setAttribute('hidden', ''); });
                this.classList.add('active');
                this.setAttribute('aria-selected', 'true');
                document.getElementById(target + '-panel').classList.add('active');
                document.getElementById(target + '-panel').removeAttribute('hidden');
            });
        });

        // Image lightbox
        var items = Array.from(document.querySelectorAll('.gallery-item'));
        var lightbox = document.getElementById('galleryLightbox');
        var lbImg = lightbox.querySelector('img');
        var lbCaption = lightbox.querySelector('.gallery-lightbox-caption');
        var currentIndex = 0;

        function openLightbox(index) {
            currentIndex = index;
            updateLightbox();
            lightbox.classList.add('active');
            lightbox.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }
        function closeLightbox() {
            lightbox.classList.remove('active');
            lightbox.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
        function updateLightbox() {
            var item = items[currentIndex];
            lbImg.src = item.dataset.galleryImage;
            lbCaption.textContent = item.dataset.caption || '';
        }
        function nextImage() {
            currentIndex = (currentIndex + 1) % items.length;
            updateLightbox();
        }
        function prevImage() {
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            updateLightbox();
        }

        items.forEach(function(item, index) {
            item.addEventListener('click', function() { openLightbox(index); });
        });

        lightbox.querySelector('.gallery-lightbox-close').addEventListener('click', closeLightbox);
        lightbox.querySelector('.gallery-lightbox-next').addEventListener('click', function(e) { e.stopPropagation(); nextImage(); });
        lightbox.querySelector('.gallery-lightbox-prev').addEventListener('click', function(e) { e.stopPropagation(); prevImage(); });
        lightbox.addEventListener('click', function(e) { if (e.target === lightbox) closeLightbox(); });
        document.addEventListener('keydown', function(e) {
            if (!lightbox.classList.contains('active')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') nextImage();
            if (e.key === 'ArrowLeft') prevImage();
        });

        // Video modal
        var videoCards = document.querySelectorAll('.gallery-video-card');
        var videoModal = document.getElementById('galleryVideoModal');
        var player = videoModal.querySelector('.gallery-video-modal-player');

        function openVideoModal(card) {
            var embed = card.parentElement.querySelector('.video-embed-template');
            player.innerHTML = embed ? embed.innerHTML : '<div style="display:flex;align-items:center;justify-content:center;height:100%;color:#fff;"><a href="' + card.dataset.videoUrl + '" target="_blank" style="color:#fff;">Open video <i class="fa fa-external-link"></i></a></div>';
            videoModal.classList.add('active');
            videoModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }
        function closeVideoModal() {
            player.innerHTML = '';
            videoModal.classList.remove('active');
            videoModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
        videoCards.forEach(function(card) {
            card.addEventListener('click', function() { openVideoModal(this); });
        });
        videoModal.querySelector('.gallery-video-modal-close').addEventListener('click', closeVideoModal);
        videoModal.querySelector('.gallery-video-modal-backdrop').addEventListener('click', closeVideoModal);
        document.addEventListener('keydown', function(e) {
            if (videoModal.classList.contains('active') && e.key === 'Escape') closeVideoModal();
        });
    })();
    </script>
    @endpush
@endsection
