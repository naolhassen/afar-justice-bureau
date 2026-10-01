<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>{{ __('messages.metadata.title') }}</title>
    <meta name="description" content="{{ __('messages.metadata.description') }}">

    <!-- Stylesheets -->
    <link href="{{ asset('counsel/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('counsel/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('counsel/css/responsive.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Bellefair&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <style>
        /* ============================================================
           AFAR JUSTICE BUREAU — Design System v4
           Inspired by Afar Regional State: desert dunes, volcanic rock, Ethiopian flag colors
           
           Palette:  --afar-deep    #1E3A5F  (deep blue - Ethiopian flag)
                     --afar-blue    #2C5F8D  (sky blue - clarity)
                     --afar-gold    #F7B500  (Ethiopian gold - prosperity)
                     --afar-green    #009B3E  (Ethiopian green - growth)
                     --afar-red     #D92323  (Ethiopian red - strength)
                     --sand-light   #F5F1E8  (desert sand)
                     --sand-warm    #E8E0D0  (warm sand)
                     --stone-dark   #3D3D3D  (volcanic stone)
                     --stone-light  #6B6B6B  (weathered stone)
           
           Type:     Display — Merriweather (professional serif)
                     Body    — Inter (clean sans-serif)
                     Mono    — JetBrains Mono (technical)
           
           Signature: Ethiopian-inspired gold accents + professional institutional feel
        ============================================================ */

        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap');

        :root {
            --afar-deep:      #1E3A5F;
            --afar-blue:      #2C5F8D;
            --afar-gold:      #F7B500;
            --afar-gold-dark: #D49A00;
            --afar-gold-light: #FFD54F;
            --afar-green:     #009B3E;
            --afar-green-dark: #007A30;
            --afar-red:       #D92323;
            --sand-light:     #F5F1E8;
            --sand-warm:      #E8E0D0;
            --stone-dark:     #3D3D3D;
            --stone-light:    #6B6B6B;
            --surface:        #FFFFFF;
            --ink:            #1A1A1A;
            --muted:          #555555;
            --border:         rgba(61, 61, 61, 0.12);
            --shadow:         0 4px 20px rgba(26, 26, 26, 0.08);
            --shadow-deep:    0 12px 40px rgba(26, 26, 26, 0.12);

            /* Spacing scale */
            --space-xs: 8px;
            --space-sm: 16px;
            --space-md: 24px;
            --space-lg: 40px;
            --space-xl: 64px;
            --space-2xl: 104px;

            /* Type scale */
            --text-xs: 0.75rem;
            --text-sm: 0.875rem;
            --text-base: 1rem;
            --text-lg: 1.125rem;
            --text-xl: 1.5rem;
            --text-2xl: 2rem;
            --text-3xl: 2.5rem;
            --text-4xl: 3.5rem;
        }

        *, *::before, *::after { box-sizing: border-box; }

        body {
            background: var(--sand-light);
            color: var(--ink);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: var(--text-base);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
            letter-spacing: -0.01em;
        }

        .page-wrapper { background: var(--sand-light); }

        a { transition: color 0.2s ease, opacity 0.2s ease; }

        /* ── Auto-container ── */
        .auto-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 var(--space-lg);
        }

        /* ============================================================
           HEADER — Minimalist Editorial
        ============================================================ */

        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            transition: border-color 0.3s ease;
        }
        .site-header.scrolled {
            border-bottom-color: var(--afar-gold);
        }

        /* Main nav bar */
        .header-main {
            padding: 0;
        }
        .header-main-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 80px;
            gap: var(--space-lg);
        }

        /* Logo */
        .site-logo {
            display: flex;
            align-items: center;
            gap: var(--space-sm);
            text-decoration: none;
            flex-shrink: 0;
        }
        .site-logo-img {
            height: 44px;
            width: auto;
            border-radius: 6px;
            object-fit: contain;
        }
        .site-logo-text {
            display: flex;
            flex-direction: column;
        }
        .site-logo-text strong {
            display: block;
            font-family: 'Merriweather', Georgia, serif;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--afar-deep);
            line-height: 1.2;
            letter-spacing: -0.02em;
        }
        .site-logo-text span {
            display: block;
            font-size: 10px;
            font-weight: 600;
            color: var(--afar-gold);
            letter-spacing: 0.15em;
            text-transform: uppercase;
            margin-top: 2px;
        }

        /* Nav wrapper */
        .header-nav-wrap {
            display: flex;
            align-items: center;
            gap: var(--space-md);
        }

        /* Desktop nav */
        .site-nav { display: flex; }
        .nav-list {
            display: flex;
            align-items: center;
            gap: var(--space-xs);
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .nav-list > li {
            position: relative;
        }
        .nav-list > li > a,
        .nav-list > li > a.nav-parent {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 0 var(--space-sm);
            height: 80px;
            color: var(--stone-light);
            font-size: var(--text-sm);
            font-weight: 600;
            letter-spacing: 0.02em;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .nav-list > li:hover > a,
        .nav-list > li.active > a {
            color: var(--afar-deep);
        }
        .nav-arrow {
            font-size: 9px;
            opacity: 0.5;
            transition: transform 0.2s;
        }
        .has-dropdown:hover .nav-arrow {
            transform: rotate(180deg);
        }

        /* Dropdowns */
        .nav-dropdown {
            position: absolute;
            top: calc(100% + 2px);
            left: 0;
            min-width: 200px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 8px;
            box-shadow: var(--shadow-deep);
            list-style: none;
            padding: var(--space-xs) 0;
            margin: 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
            z-index: 1001;
            pointer-events: none;
        }
        .has-dropdown:hover .nav-dropdown,
        .has-dropdown.open .nav-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            pointer-events: auto;
        }
        .nav-dropdown li a {
            display: block;
            padding: 10px var(--space-md);
            color: var(--stone);
            font-size: var(--text-sm);
            font-weight: 500;
            text-decoration: none;
            transition: background 0.15s, color 0.15s;
        }
        .nav-dropdown li a:hover {
            background: var(--sand-warm);
            color: var(--afar-deep);
        }

        /* Language dropdown */
        .lang-dropdown-wrapper {
            position: relative;
        }
        .lang-dropdown-toggle {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            background: var(--sand-warm);
            border: 1px solid var(--border);
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--stone);
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .lang-dropdown-toggle:hover {
            background: var(--sand-warm);
            color: var(--afar-deep);
        }
        .lang-dropdown-toggle i {
            font-size: 9px;
            opacity: 0.6;
            transition: transform 0.2s;
        }
        .lang-dropdown-toggle[aria-expanded="true"] i {
            transform: rotate(180deg);
        }
        .lang-dropdown-menu {
            position: absolute;
            top: calc(100% + 8px);
            right: 0;
            min-width: 180px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 8px;
            box-shadow: var(--shadow-deep);
            list-style: none;
            padding: var(--space-xs) 0;
            margin: 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
            z-index: 1002;
            pointer-events: none;
        }
        .lang-dropdown-menu.open {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
            pointer-events: auto;
        }
        .lang-dropdown-item {
            display: block;
            padding: 10px var(--space-md);
            color: var(--stone);
            font-size: var(--text-sm);
            font-weight: 500;
            text-decoration: none;
            transition: background 0.15s, color 0.15s;
        }
        .lang-dropdown-item:hover {
            background: var(--sand-warm);
            color: var(--afar-deep);
        }
        .lang-dropdown-item--active {
            color: var(--afar-gold);
            font-weight: 600;
        }

        /* Mobile toggle */
        .mobile-toggle {
            display: none;
            flex-direction: column;
            justify-content: center;
            gap: 5px;
            width: 40px;
            height: 40px;
            background: none;
            border: 1px solid var(--border);
            border-radius: 6px;
            padding: 8px;
            cursor: pointer;
        }
        .mobile-toggle span {
            display: block;
            height: 2px;
            background: var(--afar-deep);
            border-radius: 2px;
            transition: all 0.3s;
        }

        /* Mobile overlay + drawer */
        .mobile-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(26, 26, 26, 0.6);
            z-index: 1100;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .mobile-overlay.open {
            display: block;
            opacity: 1;
        }
        .mobile-drawer {
            position: fixed;
            top: 0;
            right: -340px;
            width: 320px;
            max-width: 90vw;
            height: 100dvh;
            background: var(--surface);
            z-index: 1200;
            overflow-y: auto;
            transition: right 0.35s cubic-bezier(.22,.61,.36,1);
            display: flex;
            flex-direction: column;
        }
        .mobile-drawer.open { right: 0; }
        .mobile-drawer-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: var(--space-md);
            border-bottom: 1px solid var(--border);
        }
        .mobile-close {
            background: var(--sand-warm);
            border: 1px solid var(--border);
            border-radius: 6px;
            width: 36px; height: 36px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .mobile-drawer-lang {
            display: flex;
            gap: 6px;
            padding: var(--space-md);
            border-bottom: 1px solid var(--border);
            flex-wrap: wrap;
        }
        .mobile-nav { flex: 1; }
        .mobile-nav-list {
            list-style: none;
            padding: var(--space-sm) 0;
            margin: 0;
        }
        .mobile-nav-list li a,
        .mobile-sub-toggle {
            display: block;
            width: 100%;
            padding: 14px var(--space-md);
            color: var(--ink);
            font-size: var(--text-base);
            font-weight: 500;
            text-decoration: none;
            background: none;
            border: none;
            text-align: left;
            cursor: pointer;
            border-bottom: 1px solid var(--border);
        }
        .mobile-nav-list li a:hover,
        .mobile-sub-toggle:hover {
            background: var(--sand-warm);
            color: var(--afar-deep);
        }
        .mobile-sub {
            display: none;
            list-style: none;
            padding: 0;
            margin: 0;
            background: var(--sand-warm);
        }
        .mobile-has-sub.open .mobile-sub { display: block; }
        .mobile-sub li a {
            padding: 12px var(--space-lg);
            font-size: var(--text-sm);
            color: var(--stone-light);
        }

        @media (max-width: 1024px) {
            .site-logo-text { display: none; }
        }
        @media (max-width: 900px) {
            .site-nav { display: none; }
            .mobile-toggle { display: flex; }
            .header-main-inner { height: 72px; }
        }
        @media (max-width: 520px) {
            .site-logo-text { display: none; }
            .auto-container { padding: 0 var(--space-md); }
        }

        /* ============================================================
           HERO — Professional Institutional
        ============================================================ */

        .hero-cinematic {
            position: relative;
            background: var(--afar-deep);
            overflow: hidden;
            min-height: 85vh;
            display: flex;
            align-items: center;
        }

        /* Slide track */
        .hero-slides {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: 85vh;
        }

        /* Individual slide */
        .hero-slide {
            position: absolute;
            inset: 0;
            background-image: var(--hero-bg);
            background-size: cover;
            background-position: center center;
            opacity: 0;
            transition: opacity 1s ease;
            pointer-events: none;
        }
        .hero-slide.active {
            opacity: 1;
            pointer-events: auto;
        }

        /* Subtle gradient overlay */
        .hero-slide::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(
                135deg,
                rgba(30, 58, 95, 0.90) 0%,
                rgba(30, 58, 95, 0.70) 50%,
                rgba(30, 58, 95, 0.45) 100%
            );
        }

        .hero-slide-inner {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            height: 100%;
            padding: var(--space-2xl) 0;
            gap: 0;
        }

        /* Signature element: gold accent line */
        .hero-pillar {
            flex-shrink: 0;
            width: 4px;
            height: 140px;
            background: linear-gradient(180deg, var(--afar-gold-light) 0%, var(--afar-gold) 100%);
            border-radius: 2px;
            margin-right: var(--space-lg);
            box-shadow: 0 0 20px rgba(247, 181, 0, 0.25);
        }

        .hero-content {
            max-width: 720px;
        }

        .hero-eyebrow {
            display: inline-block;
            padding: 8px 18px;
            border: 1px solid rgba(247, 181, 0, 0.5);
            background: rgba(247, 181, 0, 0.12);
            color: var(--afar-gold-light);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            border-radius: 4px;
            margin-bottom: var(--space-md);
        }

        .hero-headline {
            font-family: 'Merriweather', Georgia, serif;
            font-size: clamp(2.8rem, 5vw, 5.5rem);
            font-weight: 700;
            line-height: 1.08;
            letter-spacing: -0.03em;
            color: #ffffff;
            margin: 0 0 var(--space-md);
        }
        .hero-headline em {
            font-style: italic;
            color: var(--afar-gold-light);
        }

        .hero-sub {
            font-size: var(--text-lg);
            line-height: 1.75;
            color: rgba(255,255,255,0.85);
            max-width: 580px;
            margin: 0 0 var(--space-lg);
            font-weight: 400;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: var(--space-sm);
            align-items: center;
        }

        .hero-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 16px 32px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .hero-btn--primary {
            background: var(--afar-gold);
            color: var(--afar-deep);
            border: 2px solid var(--afar-gold);
        }
        .hero-btn--primary:hover {
            background: var(--afar-gold-dark);
            border-color: var(--afar-gold-dark);
            color: var(--afar-deep);
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(247, 181, 0, 0.35);
        }
        .hero-btn--ghost {
            background: transparent;
            color: rgba(255,255,255,0.92);
            border: 2px solid rgba(255,255,255,0.35);
        }
        .hero-btn--ghost:hover {
            background: rgba(255,255,255,0.10);
            border-color: rgba(255,255,255,0.70);
            color: #fff;
        }

        /* Slide controls */
        .hero-controls {
            position: absolute;
            bottom: var(--space-xl);
            right: var(--space-lg);
            z-index: 10;
            display: flex;
            align-items: center;
            gap: var(--space-sm);
        }
        .hero-ctrl {
            width: 44px;
            height: 44px;
            border-radius: 4px;
            background: rgba(255,255,255,0.10);
            border: 1px solid rgba(255,255,255,0.25);
            color: #fff;
            font-size: 13px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }
        .hero-ctrl:hover { background: var(--afar-gold); border-color: var(--afar-gold); color: var(--afar-deep); }
        .hero-dots {
            display: flex;
            gap: 8px;
            align-items: center;
        }
        .hero-dot {
            width: 6px; height: 6px;
            border-radius: 50%;
            background: rgba(255,255,255,0.30);
            border: none; cursor: pointer;
            transition: all 0.3s;
            padding: 0;
        }
        .hero-dot.active {
            width: 28px;
            border-radius: 3px;
            background: var(--afar-gold);
        }

        /* Stat strip */
        .hero-stats {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 10;
            display: flex;
            align-items: center;
            background: rgba(30, 58, 95, 0.80);
            backdrop-filter: blur(12px);
            border-top: 1px solid rgba(247, 181, 0, 0.20);
        }
        .hero-stat {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: var(--space-md) var(--space-sm);
            text-align: center;
        }
        .hero-stat strong {
            font-family: 'Merriweather', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--afar-gold-light);
            line-height: 1.1;
        }
        .hero-stat span {
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.55);
            margin-top: 4px;
        }
        .hero-stat-sep {
            width: 1px;
            height: 40px;
            background: rgba(255,255,255,0.10);
            flex-shrink: 0;
        }

        @media (max-width: 768px) {
            .hero-slides { height: auto; min-height: 75vh; }
            .hero-pillar { height: 80px; margin-right: var(--space-md); }
            .hero-headline { font-size: clamp(2.2rem, 7vw, 3.5rem); }
            .hero-sub { font-size: var(--text-base); }
            .hero-controls { bottom: var(--space-lg); right: var(--space-md); }
            .hero-stat span { display: none; }
            .hero-stat strong { font-size: 1.4rem; }
            .hero-slide-inner { padding: var(--space-xl) 0; }
        }
        @media (max-width: 480px) {
            .hero-content { max-width: 100%; }
            .hero-pillar { display: none; }
            .hero-stat { padding: var(--space-sm) 8px; }
            .hero-btn { padding: 14px 24px; }
        }

        /* ============================================================
           SECTION UTILITIES
        ============================================================ */

        section {
            position: relative;
        }

        .sec-title {
            margin-bottom: var(--space-xl);
        }
        .sec-title h2 {
            font-family: 'Merriweather', serif;
            font-size: clamp(2.2rem, 3.5vw, 3.5rem);
            font-weight: 700;
            color: var(--afar-deep);
            line-height: 1.1;
            letter-spacing: -0.03em;
            margin: 0 0 var(--space-sm);
        }
        .sec-title h2 span {
            color: var(--afar-gold);
            font-style: italic;
        }
        .sec-title .title {
            display: inline-block;
            padding: 6px 16px;
            background: rgba(247, 181, 0, 0.12);
            color: var(--afar-gold);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            border-radius: 4px;
            margin-bottom: var(--space-md);
        }

        /* Theme buttons */
        .theme-btn {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .theme-btn.btn-style-one .txt,
        .theme-btn.btn-style-two .txt,
        .theme-btn.btn-style-three .txt {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 28px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .theme-btn.btn-style-one .txt {
            background: var(--afar-gold);
            color: var(--afar-deep);
            border: 2px solid var(--afar-gold);
        }
        .theme-btn.btn-style-one .txt:hover {
            background: var(--afar-gold-dark);
            border-color: var(--afar-gold-dark);
            transform: translateY(-2px);
        }
        .theme-btn.btn-style-two .txt {
            background: transparent;
            color: var(--afar-deep);
            border: 2px solid var(--afar-deep);
        }
        .theme-btn.btn-style-two .txt:hover {
            background: var(--afar-deep);
            color: var(--surface);
        }
        .theme-btn.btn-style-three .txt {
            background: var(--afar-green);
            color: var(--surface);
            border: 2px solid var(--afar-green);
        }
        .theme-btn.btn-style-three .txt:hover {
            background: var(--afar-green-dark);
            border-color: var(--afar-green-dark);
        }

        /* ── Services Section ── */
        .services-section {
            padding: var(--space-2xl) 0 var(--space-xl);
            background: var(--surface);
        }
        .services-block .inner-box {
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            background: var(--surface);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            overflow: hidden;
        }
        .services-block .inner-box:hover {
            transform: translateY(-4px);
            border-color: rgba(247, 181, 0, 0.35);
            box-shadow: var(--shadow-deep);
        }
        .services-block .content {
            padding: var(--space-lg) var(--space-md) var(--space-md);
        }
        .services-block .inner-box .content .icon {
            color: var(--afar-gold);
            font-size: 2rem;
            display: inline-flex;
            width: 56px; height: 56px;
            align-items: center; justify-content: center;
            border-radius: 8px;
            background: rgba(247, 181, 0, 0.12);
            margin-bottom: var(--space-md);
        }
        .services-block h4 a {
            color: var(--afar-deep);
            font-weight: 700;
            letter-spacing: -0.01em;
            font-size: 1.1rem;
        }
        .services-block .inner-box .text {
            color: var(--stone-light);
            font-size: var(--text-sm);
            line-height: 1.7;
        }

        /* ── Welcome / About Section ── */
        .welcome-section {
            padding: var(--space-2xl) 0 var(--space-xl);
            background: var(--sand-light);
        }
        .welcome-section .image img {
            border-radius: 12px;
            box-shadow: var(--shadow-deep);
            width: 100%;
            height: 480px;
            object-fit: cover;
        }
        .welcome-section .experience {
            position: absolute;
            bottom: -16px;
            right: -16px;
            background: var(--afar-gold);
            color: var(--afar-deep);
            border-radius: 12px;
            padding: var(--space-md) var(--space-lg);
            font-weight: 700;
            box-shadow: 0 12px 32px rgba(247, 181, 0, 0.30);
            z-index: 2;
        }
        .welcome-section .experience .count {
            font-family: 'Merriweather', serif;
            font-size: 2.8rem;
            display: block;
            line-height: 1;
        }
        .list-style-one {
            list-style: none;
            padding: 0;
            margin: 0 0 var(--space-lg);
        }
        .list-style-one li {
            padding: 12px 0 12px var(--space-md);
            position: relative;
            color: var(--afar-deep);
            font-weight: 600;
            font-size: var(--text-base);
            border-bottom: 1px solid var(--border);
        }
        .list-style-one li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--afar-gold);
        }

        /* ── Counter Section ── */
        .counter-section {
            padding: var(--space-2xl) 0;
            position: relative;
            overflow: hidden;
        }
        .counter-section .image-layer {
            position: absolute;
            inset: 0;
            background-image: linear-gradient(135deg, rgba(30, 58, 95, 0.92), rgba(44, 95, 141, 0.88));
            background-size: cover;
            background-position: center;
        }
        .counter-section .auto-container { position: relative; z-index: 2; }
        .counter-section .sec-title h2 { color: #fff; }
        .counter-section .sec-title .text { color: rgba(255,255,255,0.75); }
        .counter-column .inner {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 12px;
            padding: var(--space-lg) var(--space-md) var(--space-md);
            text-align: center;
        }
        .counter-column .icon {
            color: var(--afar-gold-light);
            font-size: 2rem;
            display: inline-flex;
            width: 56px; height: 56px;
            align-items: center; justify-content: center;
            border-radius: 10px;
            background: rgba(247, 181, 0, 0.15);
            margin-bottom: var(--space-md);
        }
        .counter-column .count-outer {
            color: #fff;
            font-family: 'Merriweather', serif;
            font-size: 2.6rem;
            font-weight: 700;
            line-height: 1;
        }
        .counter-column .count-outer sup {
            font-size: 1.3rem;
            top: -8px;
            color: var(--afar-gold-light);
        }
        .counter-column h6 {
            color: rgba(255,255,255,0.70);
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.10em;
            text-transform: uppercase;
            margin-top: 12px;
        }

        /* ── Practice Section ── */
        .practice-section {
            padding: var(--space-2xl) 0 var(--space-xl);
            background: var(--surface);
        }
        .practice-block .inner-box {
            border-radius: 12px;
            border: 1px solid var(--border);
            background: var(--surface);
            padding: var(--space-lg) var(--space-md);
            transition: all 0.3s ease;
            min-height: 240px;
            box-shadow: var(--shadow);
        }
        .practice-block .inner-box:hover {
            transform: translateY(-4px);
            background: var(--afar-deep);
            border-color: var(--afar-deep);
            box-shadow: var(--shadow-deep);
        }
        .practice-block .inner-box:hover h5 a,
        .practice-block .inner-box:hover .text {
            color: #fff;
        }
        .practice-block .inner-box:hover .icon {
            background: rgba(247, 181, 0, 0.20);
            color: var(--afar-gold-light);
        }
        .practice-block .icon {
            color: var(--afar-gold);
            font-size: 2rem;
            display: inline-flex;
            width: 56px; height: 56px;
            align-items: center; justify-content: center;
            border-radius: 8px;
            background: rgba(247, 181, 0, 0.12);
            margin-bottom: var(--space-md);
            transition: all 0.3s;
        }
        .practice-block h5 a {
            color: var(--afar-deep);
            font-weight: 700;
            letter-spacing: -0.01em;
            font-size: 1.1rem;
        }
        .practice-block .text {
            color: var(--stone-light);
            font-size: var(--text-sm);
            line-height: 1.7;
        }

        /* ── Team Section ── */
        .team-section {
            padding: var(--space-2xl) 0 var(--space-xl);
            background: var(--surface);
            border-bottom: 1px solid var(--border);
        }
        .team-block .inner-box {
            border-radius: 12px;
            overflow: hidden;
            background: var(--surface);
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }
        .team-block .inner-box:hover {
            transform: translateY(-4px);
            border-color: rgba(247, 181, 0, 0.35);
            box-shadow: var(--shadow-deep);
        }
        .team-block .image {
            overflow: hidden;
        }
        .team-block .image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            object-position: center top;
            display: block;
            transition: transform 0.5s ease;
        }
        .team-block .inner-box:hover .image img {
            transform: scale(1.04);
        }
        .team-block .lower-content {
            padding: var(--space-lg) var(--space-md) var(--space-lg);
            background: var(--sand-light);
        }
        .team-block .lower-content h4 {
            margin: 0 0 8px;
            font-family: 'Merriweather', serif;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--afar-deep);
        }
        .team-block .lower-content h4 a { color: var(--afar-deep); text-decoration: none; }
        .team-block .designation {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--afar-gold);
        }

        /* ── News Section ── */
        .news-section {
            padding: var(--space-2xl) 0 var(--space-xl);
            background: var(--surface);
        }
        .news-block .inner-box {
            border-radius: 12px;
            overflow: hidden;
            background: var(--surface);
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }
        .news-block .inner-box:hover {
            transform: translateY(-4px);
            border-color: rgba(247, 181, 0, 0.35);
            box-shadow: var(--shadow-deep);
        }
        .news-block .image img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }
        .news-block .inner-box:hover .image img { transform: scale(1.04); }
        .news-block .lower-content {
            padding: var(--space-md) var(--space-md) var(--space-lg);
        }
        .news-block h4 a {
            color: var(--afar-deep);
            font-weight: 700;
            letter-spacing: -0.01em;
            font-size: 1.1rem;
            line-height: 1.4;
        }
        .post-meta {
            list-style: none;
            padding: 0;
            margin: 0 0 12px;
            display: flex;
            gap: var(--space-sm);
            font-size: 12px;
            color: var(--stone-light);
        }
        .post-meta .icon { color: var(--afar-gold); margin-right: 4px; }
        a.read-more {
            color: var(--afar-gold);
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            letter-spacing: 0.06em;
        }
        a.read-more:hover { color: var(--afar-deep); }

        /* ── CTA Section ── */
        .cta-section {
            padding: var(--space-2xl) 0 var(--space-xl);
            background: var(--sand-light);
        }
        .cta-section .inner-container {
            background: linear-gradient(130deg, var(--afar-deep) 0%, var(--afar-blue) 55%, var(--afar-green) 100%);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow-deep);
            display: flex;
            align-items: center;
            padding: var(--space-xl) var(--space-xl);
            gap: var(--space-lg);
            flex-wrap: wrap;
        }
        .cta-section .image {
            flex-shrink: 0;
        }
        .cta-section .image img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
            border: 3px solid rgba(255,255,255,0.15);
        }
        .cta-section .content {
            flex: 1;
        }
        .cta-section .content h2 {
            font-family: 'Merriweather', serif;
            color: #fff;
            font-size: clamp(2rem, 3vw, 2.8rem);
            font-weight: 700;
            line-height: 1.15;
            letter-spacing: -0.02em;
            margin-bottom: var(--space-md);
        }
        .cta-section .hammer-image {
            display: none;
        }

        /* ── Footer ── */
        .main-footer {
            background: var(--afar-deep);
            color: rgba(255,255,255,0.78);
        }
        .main-footer .footer-widget h5 {
            color: #fff;
            font-family: 'Merriweather', serif;
            font-size: 1.2rem;
            font-weight: 700;
            border-bottom: 1px solid rgba(255,255,255,0.10);
            padding-bottom: 14px;
            margin-bottom: var(--space-md);
        }
        .main-footer .footer-widget .footer-list a:hover { color: var(--afar-gold-light); }
        .main-footer .footer-widget .footer-list a,
        .main-footer .footer-widget ul li {
            color: rgba(255,255,255,0.68);
            font-size: var(--text-sm);
        }
        .footer-bottom {
            background: rgba(0,0,0,0.30);
            color: rgba(255,255,255,0.50);
            font-size: var(--text-sm);
        }

        /* ── Inner page titles ── */
        .page-title {
            position: relative;
            padding: var(--space-2xl) 0 var(--space-xl);
            background-color: var(--afar-deep);
            background-size: cover;
            background-position: center;
            overflow: hidden;
            border-bottom: 3px solid var(--afar-gold);
        }
        .page-title::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(30, 58, 95, 0.92) 0%, rgba(44, 95, 141, 0.85) 55%, rgba(0, 155, 62, 0.42) 100%);
            z-index: 1;
        }
        .page-title .auto-container { position: relative; z-index: 2; }
        .page-title .page-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background: rgba(247, 181, 0, 0.18);
            border: 1px solid rgba(247, 181, 0, 0.55);
            color: var(--afar-gold-light);
            border-radius: 4px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: var(--space-md);
        }
        .page-title h1 {
            font-family: 'Merriweather', serif;
            color: #fff;
            font-size: clamp(2.2rem, 3.5vw, 3.8rem);
            font-weight: 700;
            line-height: 1.12;
            letter-spacing: -0.02em;
            margin: 0 0 var(--space-md);
        }
        .page-title h1 span { color: var(--afar-gold-light); }
        .page-title .lead-desc {
            color: rgba(255,255,255,0.85);
            font-size: var(--text-lg);
            max-width: 720px;
            line-height: 1.75;
            margin-bottom: var(--space-md);
        }
        .page-breadcrumb {
            display: inline-flex;
            align-items: center;
            flex-wrap: wrap;
            gap: var(--space-sm);
            list-style: none;
            padding: 0; margin: 0;
            font-size: var(--text-sm);
            font-weight: 500;
        }
        .page-breadcrumb li {
            display: inline-flex;
            align-items: center;
            gap: var(--space-sm);
            color: rgba(255,255,255,0.65);
        }
        .page-breadcrumb li a { color: rgba(255,255,255,0.82); text-decoration: none; }
        .page-breadcrumb li a:hover { color: var(--afar-gold-light); }
        .page-breadcrumb li:not(:last-child)::after { content: '›'; color: var(--afar-gold-light); font-size: 16px; }
        .page-breadcrumb li:last-child { color: var(--afar-gold-light); }

        /* ── Civic system (inner pages) ── */
        .civic-section {
            padding: var(--space-2xl) 0 var(--space-xl);
            background: var(--sand-light);
        }
        .civic-card {
            background: var(--surface);
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            padding: var(--space-xl) var(--space-lg);
            margin-bottom: var(--space-lg);
            transition: box-shadow 0.3s ease, border-color 0.3s ease;
        }
        .civic-card:hover {
            box-shadow: var(--shadow-deep);
            border-color: rgba(247, 181, 0, 0.30);
        }
        .civic-sidebar-widget {
            background: var(--surface);
            border-radius: 12px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            padding: var(--space-lg) var(--space-md);
            margin-bottom: var(--space-lg);
        }
        .civic-sidebar-widget h4,
        .civic-sidebar-widget .widget-title h4 {
            font-family: 'Merriweather', serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--afar-deep);
            border-bottom: 2px solid var(--border);
            padding-bottom: var(--space-sm);
            margin-bottom: var(--space-md);
        }
        .civic-menu-list {
            list-style: none;
            padding: 0; margin: 0;
        }
        .civic-menu-list li {
            border-bottom: 1px solid var(--border);
        }
        .civic-menu-list li:last-child { border-bottom: none; }
        .civic-menu-list li a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px var(--space-sm);
            color: var(--ink);
            font-size: var(--text-sm);
            font-weight: 500;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.2s;
        }
        .civic-menu-list li a:hover,
        .civic-menu-list li a.active {
            color: var(--afar-deep);
            background: rgba(247, 181, 0, 0.12);
            padding-left: var(--space-md);
        }
        .civic-menu-list li a.active {
            border-left: 4px solid var(--afar-gold);
        }
        .civic-badge {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .civic-badge-navy { background: var(--afar-deep); color: #fff; }
        .civic-badge-gold  { background: var(--afar-gold); color: var(--afar-deep); }
        .civic-badge-green { background: var(--afar-green); color: #fff; }
        .civic-helpline-box {
            background: linear-gradient(135deg, var(--afar-deep), var(--afar-blue));
            border-radius: 12px;
            color: #fff;
            padding: var(--space-xl) var(--space-lg);
            text-align: center;
            border: 1px solid rgba(247, 181, 0, 0.25);
            box-shadow: var(--shadow-deep);
        }
        .civic-helpline-box .icon { font-size: 36px; color: var(--afar-gold-light); margin-bottom: 12px; }
        .civic-helpline-box h4 { color: #fff; font-weight: 700; font-size: 1.3rem; margin-bottom: 10px; }
        .civic-helpline-box .phone { font-size: 1.2rem; font-weight: 700; color: var(--afar-gold-light); margin-bottom: var(--space-md); }

        /* ── Old theme bridge ── */
        .banner-section { display: none; } /* hide old banner if present */
        .main-header { display: none; }    /* hide old header */

        /* Scroll-to-top */
        .scroll-to-top {
            background: var(--afar-gold);
            color: var(--afar-deep);
            border: none;
            border-radius: 6px;
        }
        .scroll-to-top:hover { background: var(--afar-gold-dark); }

        /* Preloader */
        .preloader { display: none; }
    </style>
    @stack('styles')
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        @include('components.header')

        <main>
            @yield('content')
        </main>

        @include('components.footer')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="{{ asset('counsel/js/jquery.js') }}"></script>
    <script src="{{ asset('counsel/js/popper.min.js') }}"></script>
    <script src="{{ asset('counsel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('counsel/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('counsel/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('counsel/js/appear.js') }}"></script>
    <script src="{{ asset('counsel/js/parallax.min.js') }}"></script>
    <script src="{{ asset('counsel/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('counsel/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('counsel/js/owl.js') }}"></script>
    <script src="{{ asset('counsel/js/wow.js') }}"></script>
    <script src="{{ asset('counsel/js/nav-tool.js') }}"></script>
    <script src="{{ asset('counsel/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('counsel/js/script.js') }}"></script>
    @stack('scripts')
</body>

</html>
