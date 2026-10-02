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

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/png">
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <style>
        /* ============================================================
           AFAR JUSTICE BUREAU — Design System v5
           Distinctive identity inspired by Afar heritage, justice, and Ethiopian tradition

           Palette:  --afar-deep    #0F2942  (deep institutional blue)
                     --afar-blue    #1E4A6F  (rich sky blue)
                     --afar-accent  #C8102E  (Afar flag red - hoist triangle)
                     --afar-green   #1B5E3E  (forest green)
                     --afar-red     #8B2635  (deep crimson)
                     --sand-light   #F8F6F0  (warm neutral)
                     --sand-warm    #E9E5D9  (earth tone)
                     --stone-dark   #2A2A2A  (volcanic rock)
                     --stone-light  #5A5A5A  (weathered stone)

           Type:     Display — Playfair Display (characterful serif)
                     Body    — Source Sans Pro (refined sans-serif)
                     Mono    — JetBrains Mono (technical)

           Signature: Justice pillar motif + Afar geometric pattern accents
        ============================================================ */

        :root {
            --afar-deep:      #0F2942;
            --afar-blue:      #1E4A6F;
            --afar-accent:      #C8102E;
            --afar-accent-dark: #A20D24;
            --afar-accent-light: #F2A9B0;
            --afar-green:     #1B5E3E;
            --afar-green-dark: #144A31;
            --afar-red:       #8B2635;
            --sand-light:     #F8F6F0;
            --sand-warm:      #E9E5D9;
            --stone-dark:     #2A2A2A;
            --stone-light:    #5A5A5A;
            --surface:        #FFFFFF;
            --ink:            #1A1A1A;
            --muted:          #555555;
            --border:         rgba(42, 42, 42, 0.12);
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
            font-family: 'Source Sans Pro', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: var(--text-base);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
            letter-spacing: -0.005em;
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
            border-bottom-color: var(--afar-accent);
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
            font-family: 'Playfair Display', Georgia, serif;
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
            color: var(--afar-accent);
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

        /* Language switcher - Simple */
        .lang-switcher {
            position: relative;
            margin-left: 12px;
        }
        .lang-current {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            background: linear-gradient(135deg, var(--afar-deep) 0%, #1a4a7a 100%);
            border: 1px solid rgba(200, 16, 46, 0.3);
            border-radius: 24px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: #ffffff;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(26, 74, 122, 0.3);
        }
        .lang-current:hover {
            background: linear-gradient(135deg, #1a4a7a 0%, var(--afar-deep) 100%);
            border-color: var(--afar-accent);
            box-shadow: 0 4px 12px rgba(26, 74, 122, 0.4);
            transform: translateY(-1px);
        }
        .lang-current i.fa-globe {
            font-size: 14px;
            color: var(--afar-accent);
        }
        .lang-current i.fa-chevron-down {
            font-size: 10px;
            opacity: 0.8;
        }
        .lang-menu {
            position: absolute;
            top: calc(100% + 12px);
            right: 0;
            min-width: 200px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            padding: 8px;
            display: none;
            z-index: 9999;
        }
        .lang-menu.show {
            display: block;
        }
        .lang-option {
            display: block;
            padding: 12px 16px;
            color: var(--stone);
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s ease;
            border-radius: 8px;
        }
        .lang-option:hover {
            background: linear-gradient(135deg, var(--sand-warm) 0%, rgba(200, 16, 46, 0.1) 100%);
            color: var(--afar-deep);
        }
        .lang-option.active {
            background: linear-gradient(135deg, rgba(200, 16, 46, 0.15) 0%, rgba(200, 16, 46, 0.05) 100%);
            color: var(--afar-deep);
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
            gap: 8px;
            padding: var(--space-md);
            border-bottom: 1px solid var(--border);
            flex-wrap: wrap;
        }
        .lang-tab {
            flex: 1;
            min-width: 80px;
            padding: 10px 16px;
            background: var(--sand-warm);
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            color: var(--stone);
            transition: all 0.2s ease;
        }
        .lang-tab:hover {
            background: var(--afar-deep);
            color: #ffffff;
            border-color: var(--afar-deep);
        }
        .lang-tab--active {
            background: linear-gradient(135deg, var(--afar-deep) 0%, #1a4a7a 100%);
            color: #ffffff;
            border-color: var(--afar-accent);
            box-shadow: 0 2px 8px rgba(26, 74, 122, 0.3);
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
            --hero-stats-h: 96px;
            position: relative;
            background: var(--afar-deep);
            overflow: hidden;
            min-height: max(85vh, 560px);
            display: flex;
            align-items: center;
        }

        /* Slide track */
        .hero-slides {
            position: relative;
            width: 100%;
            height: 100%;
            min-height: max(85vh, 560px);
        }

        /* Individual slide */
        .hero-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.9s ease, visibility 0.9s;
            pointer-events: none;
        }
        .hero-slide.active {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            z-index: 1;
        }

        /* Slide background — settles from a slight zoom */
        .hero-slide::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image: var(--hero-bg);
            background-size: cover;
            background-position: center center;
            transform: scale(1.07);
            transition: transform 7s cubic-bezier(.22,.61,.36,1);
        }
        .hero-slide.active::after { transform: scale(1); }

        /* Subtle gradient overlay */
        .hero-slide::before {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(
                135deg,
                rgba(15, 41, 66, 0.92) 0%,
                rgba(15, 41, 66, 0.72) 50%,
                rgba(15, 41, 66, 0.45) 100%
            );
        }

        .hero-slide-inner {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            height: 100%;
            padding: var(--space-xl) 0 calc(var(--hero-stats-h) + var(--space-xl));
            gap: 0;
        }

        /* Signature element: Justice pillar motif */
        .hero-pillar {
            flex-shrink: 0;
            width: 48px;
            height: 200px;
            position: relative;
            margin-right: var(--space-lg);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero-pillar::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            width: 3px;
            height: 100%;
            background: linear-gradient(180deg, var(--afar-accent-light) 0%, var(--afar-accent) 100%);
            border-radius: 2px;
            box-shadow: 0 0 20px rgba(200, 16, 46, 0.4);
        }
        .hero-pillar::after {
            content: '';
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 24px;
            height: 24px;
            border: 2px solid var(--afar-accent);
            border-radius: 50%;
            background: var(--surface);
        }
        .hero-pillar-center {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 8px;
            height: 8px;
            background: var(--afar-accent);
            border-radius: 50%;
        }

        .hero-content {
            max-width: 720px;
        }

        .hero-eyebrow {
            display: inline-block;
            padding: 8px 18px;
            border: 1px solid rgba(200, 16, 46, 0.5);
            background: rgba(200, 16, 46, 0.12);
            color: var(--afar-accent-light);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            border-radius: 4px;
            margin-bottom: var(--space-md);
        }

        .hero-tag {
            display: flex;
            align-items: center;
            gap: var(--space-sm);
            flex-wrap: wrap;
            margin-bottom: var(--space-md);
        }
        .hero-tag .hero-eyebrow { margin-bottom: 0; }
        .hero-date {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.65);
        }
        .hero-date i { color: var(--afar-accent-light); margin-right: 6px; }

        /* Content rises in once a slide becomes active */
        .hero-content > * {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .hero-slide.active .hero-content > * { opacity: 1; transform: none; }
        .hero-slide.active .hero-content > *:nth-child(1) { transition-delay: 0.30s; }
        .hero-slide.active .hero-content > *:nth-child(2) { transition-delay: 0.40s; }
        .hero-slide.active .hero-content > *:nth-child(3) { transition-delay: 0.50s; }
        .hero-slide.active .hero-content > *:nth-child(4) { transition-delay: 0.60s; }

        .hero-headline {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(2.8rem, 5vw, 5.5rem);
            font-weight: 800;
            line-height: 1.05;
            letter-spacing: -0.02em;
            color: #ffffff;
            margin: 0 0 var(--space-md);
            text-wrap: balance;
        }
        .hero-headline em {
            font-style: italic;
            font-weight: 600;
            color: var(--afar-accent-light);
            position: relative;
        }
        .hero-headline em::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--afar-accent);
            border-radius: 2px;
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
            background: var(--afar-accent);
            color: #fff;
            border: 2px solid var(--afar-accent);
        }
        .hero-btn--primary:hover {
            background: var(--afar-accent-dark);
            border-color: var(--afar-accent-dark);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(200, 16, 46, 0.35);
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

        /* Slide controls — sit just above the stat strip */
        .hero-controls {
            position: absolute;
            bottom: calc(var(--hero-stats-h) + var(--space-md));
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
        .hero-ctrl:hover { background: var(--afar-accent); border-color: var(--afar-accent); color: #fff; }
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
            background: var(--afar-accent);
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
            min-height: var(--hero-stats-h);
            background: rgba(15, 41, 66, 0.82);
            backdrop-filter: blur(12px);
            border-top: 1px solid rgba(200, 16, 46, 0.20);
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
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--afar-accent-light);
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
            .hero-cinematic { --hero-stats-h: 64px; }
            .hero-slides { height: auto; min-height: max(75vh, 520px); }
            .hero-pillar { height: 80px; margin-right: var(--space-md); }
            .hero-headline { font-size: clamp(2.2rem, 7vw, 3.5rem); }
            .hero-sub { font-size: var(--text-base); }
            .hero-controls { bottom: calc(var(--hero-stats-h) + var(--space-sm)); right: var(--space-md); }
            .hero-stat span { display: none; }
            .hero-stat strong { font-size: 1.4rem; }
            .hero-slide-inner { padding: var(--space-lg) 0 calc(var(--hero-stats-h) + var(--space-lg)); }
        }
        @media (max-width: 480px) {
            .hero-content { max-width: 100%; }
            .hero-pillar { display: none; }
            .hero-stat { padding: var(--space-sm) 8px; }
            .hero-btn { padding: 14px 24px; }
        }
        @media (prefers-reduced-motion: reduce) {
            .hero-slide, .hero-slide::after { transition: none; }
            .hero-slide::after { transform: none; }
            .hero-content > * { transition: none; transform: none; opacity: 1; }
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
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.2rem, 3.5vw, 3.5rem);
            font-weight: 700;
            color: var(--afar-deep);
            line-height: 1.1;
            letter-spacing: -0.03em;
            margin: 0 0 var(--space-sm);
        }
        .sec-title h2 span {
            color: var(--afar-accent);
            font-style: italic;
        }
        .sec-title .title {
            display: inline-block;
            padding: 6px 16px;
            background: rgba(200, 16, 46, 0.12);
            color: var(--afar-accent);
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
            background: var(--afar-accent);
            color: #fff;
            border: 2px solid var(--afar-accent);
        }
        .theme-btn.btn-style-one .txt:hover {
            background: var(--afar-accent-dark);
            border-color: var(--afar-accent-dark);
            color: #fff;
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
        /* Theme pulls cards up over the banner; the announcements grid sits below its title instead */
        .announcements-section .inner-container {
            margin-top: 0;
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
            border-color: rgba(200, 16, 46, 0.35);
            box-shadow: var(--shadow-deep);
        }
        .services-block .content {
            padding: var(--space-lg) var(--space-md) var(--space-md);
        }
        .services-block .inner-box .content .icon {
            color: var(--afar-accent);
            font-size: 2rem;
            display: inline-flex;
            width: 56px; height: 56px;
            align-items: center; justify-content: center;
            border-radius: 8px;
            background: rgba(200, 16, 46, 0.12);
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
        .announcement-date {
            font-family: 'JetBrains Mono', monospace;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 0.06em;
            color: var(--afar-accent-dark);
            margin: -4px 0 10px;
        }
        .announcement-date i { margin-right: 6px; }

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
            background: var(--afar-accent);
            color: var(--afar-deep);
            border-radius: 12px;
            padding: var(--space-md) var(--space-lg);
            font-weight: 700;
            box-shadow: 0 12px 32px rgba(200, 16, 46, 0.30);
            z-index: 2;
        }
        .welcome-section .experience .count {
            font-family: 'Playfair Display', serif;
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
            background: var(--afar-accent);
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
            background-image: linear-gradient(135deg, rgba(15, 41, 66, 0.92), rgba(30, 74, 111, 0.88));
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
            color: var(--afar-accent-light);
            font-size: 2rem;
            display: inline-flex;
            width: 56px; height: 56px;
            align-items: center; justify-content: center;
            border-radius: 10px;
            background: rgba(200, 16, 46, 0.15);
            margin-bottom: var(--space-md);
        }
        .counter-column .count-outer {
            color: #fff;
            font-family: 'Playfair Display', serif;
            font-size: 2.6rem;
            font-weight: 700;
            line-height: 1;
        }
        .counter-column .count-outer sup {
            font-size: 1.3rem;
            top: -8px;
            color: var(--afar-accent-light);
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
        .practice-section .inner-container {
            border: none;
            margin: 0;
        }
        .practice-section .inner-container::before,
        .practice-section .inner-container::after {
            display: none;
        }
        .practice-section .clearfix {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -20px;
        }
        .practice-section .clearfix::before,
        .practice-section .clearfix::after {
            display: none;
        }
        .practice-section .inner-container .practice-block {
            padding: 0 20px;
            float: none;
        }
        .practice-block {
            display: flex;
            margin-bottom: var(--space-lg);
        }
        .practice-block .inner-box {
            flex: 1;
            border-radius: 12px;
            border: 1px solid var(--border);
            background: var(--surface);
            padding: var(--space-xl) var(--space-lg);
            transition: all 0.3s ease;
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
            background: rgba(200, 16, 46, 0.20);
            color: var(--afar-accent-light);
        }
        .practice-block .icon {
            color: var(--afar-accent);
            font-size: 2.2rem;
            display: inline-flex;
            width: 64px; height: 64px;
            align-items: center; justify-content: center;
            border-radius: 10px;
            background: rgba(200, 16, 46, 0.10);
            margin-bottom: var(--space-lg);
            transition: all 0.3s;
        }
        .practice-block h5 a {
            color: var(--afar-deep);
            font-weight: 700;
            letter-spacing: -0.01em;
            font-size: 1.2rem;
            line-height: 1.4;
        }
        .practice-block .text {
            color: var(--stone-light);
            font-size: var(--text-base);
            line-height: 1.75;
            margin-top: var(--space-sm);
        }
        .practice-block .arrow {
            display: inline-block;
            margin-top: var(--space-md);
            color: var(--afar-accent);
            font-size: 1.1rem;
        }

        /* ── Bureau Head Message Section ── */
        .bureau-message-section {
            padding: var(--space-xl) 0;
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            position: relative;
            overflow: hidden;
        }
        .bureau-message-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
            height: 100%;
            background-image:
                repeating-linear-gradient(45deg, transparent, transparent 40px, rgba(200, 16, 46, 0.03) 40px, rgba(200, 16, 46, 0.03) 41px),
                repeating-linear-gradient(-45deg, transparent, transparent 40px, rgba(200, 16, 46, 0.03) 40px, rgba(200, 16, 46, 0.03) 41px);
            pointer-events: none;
        }
        .bureau-message-section .inner-box {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: var(--space-xl);
            background: linear-gradient(135deg, #E9F4FB 0%, #D6EAF6 100%);
            border: 1px solid rgba(30, 74, 111, 0.14);
            border-radius: 16px;
            padding: var(--space-xl);
            color: var(--ink);
            box-shadow: var(--shadow-deep);
        }
        .message-photo {
            flex-shrink: 0;
        }
        .message-photo img {
            display: block;
            width: 250px;
            height: 320px;
            object-fit: cover;
            object-position: center top;
            border-radius: 12px;
            border: 4px solid var(--surface);
            box-shadow: var(--shadow-deep);
        }
        .message-text {
            flex: 1;
            min-width: 0;
        }
        .message-header {
            margin-bottom: var(--space-md);
        }
        .message-badge {
            display: inline-block;
            padding: 6px 16px;
            background: var(--afar-deep);
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            border-radius: 4px;
            margin-bottom: var(--space-md);
        }
        .message-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(1.8rem, 3vw, 2.5rem);
            font-weight: 700;
            color: var(--afar-deep);
            margin: 0 0 var(--space-sm);
            line-height: 1.2;
        }
        .message-position {
            font-size: var(--text-sm);
            color: var(--afar-blue);
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
        .message-body p {
            font-size: var(--text-lg);
            line-height: 1.8;
            color: var(--stone-dark);
            margin-bottom: var(--space-lg);
        }
        .message-footer .theme-btn .txt {
            background: var(--afar-accent);
            color: #fff;
            border: 2px solid var(--afar-accent);
        }
        .message-footer .theme-btn .txt:hover {
            background: var(--afar-accent-dark);
            border-color: var(--afar-accent-dark);
            color: #fff;
        }
        @media (max-width: 820px) {
            .bureau-message-section .inner-box {
                flex-direction: column;
                align-items: flex-start;
                gap: var(--space-lg);
            }
            .message-photo img {
                width: 200px;
                height: 250px;
            }
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
            border-color: rgba(200, 16, 46, 0.35);
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
            font-family: 'Playfair Display', serif;
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
            color: var(--afar-accent);
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
            border-color: rgba(200, 16, 46, 0.35);
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
        .post-meta .icon { color: var(--afar-accent); margin-right: 4px; }
        a.read-more {
            color: var(--afar-accent);
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
            font-family: 'Playfair Display', serif;
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
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            font-weight: 700;
            border-bottom: 1px solid rgba(255,255,255,0.10);
            padding-bottom: 14px;
            margin-bottom: var(--space-md);
        }
        .main-footer .footer-widget .footer-list a:hover { color: var(--afar-accent-light); }
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
            border-bottom: 3px solid var(--afar-accent);
        }
        .page-title::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(15, 41, 66, 0.92) 0%, rgba(30, 74, 111, 0.85) 55%, rgba(27, 94, 62, 0.42) 100%);
            z-index: 1;
        }
        .page-title .auto-container { position: relative; z-index: 2; }
        .page-title .page-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background: rgba(200, 16, 46, 0.18);
            border: 1px solid rgba(200, 16, 46, 0.55);
            color: var(--afar-accent-light);
            border-radius: 4px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: var(--space-md);
        }
        .page-title h1 {
            font-family: 'Playfair Display', serif;
            color: #fff;
            font-size: clamp(2.2rem, 3.5vw, 3.8rem);
            font-weight: 700;
            line-height: 1.12;
            letter-spacing: -0.02em;
            margin: 0 0 var(--space-md);
        }
        .page-title h1 span { color: var(--afar-accent-light); }
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
        .page-breadcrumb li a:hover { color: var(--afar-accent-light); }
        .page-breadcrumb li:not(:last-child)::after { content: '›'; color: var(--afar-accent-light); font-size: 16px; }
        .page-breadcrumb li:last-child { color: var(--afar-accent-light); }

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
            border-color: rgba(200, 16, 46, 0.30);
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
            font-family: 'Playfair Display', serif;
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
            background: rgba(200, 16, 46, 0.12);
            padding-left: var(--space-md);
        }
        .civic-menu-list li a.active {
            border-left: 4px solid var(--afar-accent);
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
        .civic-badge-gold  { background: var(--afar-accent); color: #fff; }
        .civic-badge-green { background: var(--afar-green); color: #fff; }
        .civic-helpline-box {
            background: linear-gradient(135deg, var(--afar-deep), var(--afar-blue));
            border-radius: 12px;
            color: #fff;
            padding: var(--space-xl) var(--space-lg);
            text-align: center;
            border: 1px solid rgba(200, 16, 46, 0.25);
            box-shadow: var(--shadow-deep);
        }
        .civic-helpline-box .icon { font-size: 36px; color: var(--afar-accent-light); margin-bottom: 12px; }
        .civic-helpline-box h4 { color: #fff; font-weight: 700; font-size: 1.3rem; margin-bottom: 10px; }
        .civic-helpline-box .phone { font-size: 1.2rem; font-weight: 700; color: var(--afar-accent-light); margin-bottom: var(--space-md); }

        /* ── Old theme bridge ── */
        .banner-section { display: none; } /* hide old banner if present */
        .main-header { display: none; }    /* hide old header */

        /* Scroll-to-top */
        .scroll-to-top {
            background: var(--afar-accent);
            color: #fff;
            border: none;
            border-radius: 6px;
        }
        .scroll-to-top:hover { background: var(--afar-accent-dark); }

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
