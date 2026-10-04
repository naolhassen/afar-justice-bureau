<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') | Afar Regional State Justice Bureau CMS</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <style>
        :root {
            --afar-deep: #0F2942;
            --afar-deep-2: #0B1F33;
            --afar-blue: #1C4E80;
            --afar-accent: #C8102E;
            --afar-accent-dark: #A20D24;
            --afar-green: #0E7A46;
            --afar-light: #E9F2F8;
            --bg: #f4f7fa;
            --ink: #22303e;
            --muted: #6b7a8a;
            --line: #e3eaf1;
        }
        * { box-sizing: border-box; }
        body {
            background: var(--bg);
            font-family: 'Source Sans Pro', 'Segoe UI', system-ui, sans-serif;
            color: var(--ink);
        }
        h1, h2, h3, h4, h5, .page-title { font-family: 'Playfair Display', serif; }

        .admin-wrapper { display: flex; min-height: 100vh; }

        /* ---------- Sidebar ---------- */
        .sidebar {
            width: 264px;
            background: linear-gradient(180deg, var(--afar-deep) 0%, var(--afar-deep-2) 100%);
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            z-index: 1050;
            transition: transform 0.3s ease;
            color: #cfdbe6;
        }
        .sidebar-header {
            padding: 1.4rem 1.25rem;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }
        .sidebar-header img {
            width: 44px; height: 44px;
            border-radius: 10px;
            object-fit: cover;
            background: #fff;
            padding: 3px;
        }
        .sidebar-header .brand {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #fff;
            font-size: 1.02rem;
            line-height: 1.15;
        }
        .sidebar-header .brand small {
            display: block;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 0.68rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--afar-accent);
            font-weight: 700;
        }
        .sidebar-menu {
            list-style: none;
            padding: 0.5rem 0;
            margin: 0;
            overflow-y: auto;
            flex: 1;
        }
        .sidebar-section {
            padding: 1.1rem 1.4rem 0.4rem;
            font-size: 0.66rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #5f7690;
        }
        .sidebar-menu li a {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            padding: 0.68rem 1.4rem;
            color: #b9c9d8;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.93rem;
            transition: all 0.18s ease;
            border-left: 3px solid transparent;
        }
        .sidebar-menu li a:hover { background: rgba(255,255,255,0.06); color: #fff; }
        .sidebar-menu li a.active {
            background: rgba(200,16,46,0.16);
            color: #fff;
            border-left-color: var(--afar-accent);
        }
        .sidebar-menu li a i { width: 20px; text-align: center; color: #7d93a9; transition: color 0.2s; }
        .sidebar-menu li a:hover i, .sidebar-menu li a.active i { color: #ff7d90; }
        .sidebar-footer {
            padding: 1rem 1.25rem;
            border-top: 1px solid rgba(255,255,255,0.08);
        }

        /* ---------- Main ---------- */
        .main-content {
            flex: 1;
            margin-left: 264px;
            min-width: 0;
            display: flex;
            flex-direction: column;
        }
        .topbar {
            background: #fff;
            border-bottom: 1px solid var(--line);
            padding: 0.9rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .page-title { font-size: 1.35rem; font-weight: 700; color: var(--afar-deep); }
        .user-pill {
            background: var(--afar-light);
            border: 1px solid #cfe0ec;
            color: var(--afar-blue);
            border-radius: 50px;
            padding: 0.4rem 0.95rem;
            font-weight: 600;
            font-size: 0.85rem;
        }
        .user-pill .role-tag {
            text-transform: uppercase;
            font-size: 0.66rem;
            letter-spacing: 0.08em;
            background: var(--afar-deep);
            color: #fff;
            border-radius: 20px;
            padding: 0.15rem 0.55rem;
            margin-left: 0.4rem;
        }
        .content-area { padding: 1.6rem; flex: 1; }

        /* ---------- Cards / table ---------- */
        .card {
            border: 1px solid var(--line);
            border-radius: 14px;
            box-shadow: 0 2px 14px rgba(15,41,66,0.05);
            background: #fff;
        }
        .stat-card {
            padding: 1.2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            height: 100%;
            text-decoration: none;
        }
        .stat-card i {
            width: 48px; height: 48px;
            border-radius: 12px;
            background: var(--afar-light);
            color: var(--afar-blue);
            display: flex; align-items: center; justify-content: center;
            font-size: 1.25rem;
        }
        .stat-card:hover { border-color: #b9d0e2; box-shadow: 0 8px 24px rgba(15,41,66,0.09); }
        .stat-value { font-size: 1.7rem; font-weight: 800; color: var(--afar-deep); line-height: 1; font-family: 'Source Sans Pro', sans-serif; }
        .stat-label { color: var(--muted); font-size: 0.85rem; font-weight: 600; }

        .table thead th {
            background: #f0f5f9;
            color: var(--afar-deep);
            font-weight: 700;
            font-size: 0.8rem;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            border: none;
            padding: 0.9rem 1rem;
            white-space: nowrap;
        }
        .table tbody td { padding: 0.85rem 1rem; border-color: #eef3f8; vertical-align: middle; }
        .table tbody tr:hover td { background: #f8fbfd; }
        .row-thumb {
            width: 52px; height: 38px; object-fit: cover; border-radius: 8px;
            border: 1px solid var(--line); display: block;
        }
        .row-thumb-empty {
            width: 52px; height: 38px; border-radius: 8px; background: #edf2f7;
            display: flex; align-items: center; justify-content: center; color: #9db3c5;
        }

        /* ---------- Buttons / badges ---------- */
        .btn-afar {
            background: var(--afar-accent);
            color: #fff; border: none;
            border-radius: 10px; padding: 0.6rem 1.2rem;
            font-weight: 700; transition: all 0.2s ease;
        }
        .btn-afar:hover, .btn-afar:focus { background: var(--afar-accent-dark); color: #fff; }
        .btn-ghost {
            background: transparent; color: var(--afar-blue);
            border: 1px solid #c3d6e5; border-radius: 10px;
            padding: 0.55rem 1rem; font-weight: 600; transition: all 0.2s ease;
        }
        .btn-ghost:hover { background: var(--afar-deep); border-color: var(--afar-deep); color: #fff; }
        .badge-draft { background: #eef1f4; color: #6b7a8a; }
        .badge-published { background: #e3f4ec; color: var(--afar-green); }

        .pub-toggle .form-check-input {
            width: 2.6em; height: 1.35em; cursor: pointer;
        }
        .pub-toggle .form-check-input:checked {
            background-color: var(--afar-green); border-color: var(--afar-green);
        }

        .bulk-bar {
            display: none;
            align-items: center; gap: 0.75rem;
            background: var(--afar-deep);
            color: #fff;
            border-radius: 12px;
            padding: 0.7rem 1.1rem;
            margin-bottom: 1rem;
        }
        .bulk-bar.show { display: flex; }
        .bulk-bar .btn { font-size: 0.85rem; }

        /* ---------- Forms ---------- */
        .form-label { color: var(--afar-deep); }
        .form-control, .form-select {
            border-radius: 10px;
            border: 1px solid #d7e2ec;
            padding: 0.7rem 1rem;
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--afar-blue);
            box-shadow: 0 0 0 0.2rem rgba(28,78,128,0.12);
        }

        /* ---------- Locale tabs ---------- */
        .locale-tabs {
            display: inline-flex;
            background: #edf2f7;
            border-radius: 50px;
            padding: 4px;
            gap: 2px;
        }
        .locale-tabs .locale-btn {
            border: none;
            background: transparent;
            color: var(--muted);
            font-weight: 700;
            font-size: 0.82rem;
            padding: 0.4rem 1.1rem;
            border-radius: 50px;
            transition: all 0.18s;
        }
        .locale-tabs .locale-btn.active {
            background: var(--afar-deep);
            color: #fff;
            box-shadow: 0 2px 8px rgba(15,41,66,0.25);
        }
        .locale-pane { display: none; }
        .locale-pane.active { display: block; }
        .locale-hint { font-size: 0.78rem; color: var(--muted); }

        /* ---------- Quill ---------- */
        .ql-toolbar.ql-snow {
            border: 1px solid #d7e2ec; border-radius: 10px 10px 0 0;
            background: #f7fafc;
        }
        .ql-container.ql-snow {
            border: 1px solid #d7e2ec; border-top: none;
            border-radius: 0 0 10px 10px;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 0.95rem;
            min-height: 160px;
        }
        .ql-editor { min-height: 160px; }

        /* ---------- File drop zone ---------- */
        .file-drop {
            border: 2px dashed #c3d6e5;
            border-radius: 12px;
            padding: 1.6rem;
            text-align: center;
            cursor: pointer;
            background: #f8fbfd;
            transition: all 0.2s;
            position: relative;
        }
        .file-drop:hover, .file-drop.dragover {
            border-color: var(--afar-blue);
            background: var(--afar-light);
        }
        .file-drop i { font-size: 1.8rem; color: var(--afar-blue); margin-bottom: 0.5rem; }
        .file-drop .file-drop-text { color: var(--muted); font-size: 0.9rem; }
        .file-drop input[type="file"] { display: none; }
        .file-drop .file-preview img {
            max-height: 130px; border-radius: 8px; border: 1px solid var(--line);
        }
        .file-drop .file-preview .file-name {
            font-weight: 600; color: var(--afar-deep); font-size: 0.9rem; word-break: break-all;
        }

        /* ---------- Show page ---------- */
        .show-field { padding: 0.9rem 0; border-bottom: 1px solid #eef3f8; }
        .show-field:last-child { border-bottom: none; }
        .show-label {
            font-size: 0.72rem; font-weight: 700; letter-spacing: 0.09em;
            text-transform: uppercase; color: var(--muted); margin-bottom: 0.3rem;
        }
        .locale-chip {
            display: inline-block;
            font-size: 0.66rem; font-weight: 700;
            background: var(--afar-light); color: var(--afar-blue);
            border-radius: 4px; padding: 0.1rem 0.4rem;
            text-transform: uppercase; letter-spacing: 0.06em;
        }

        .mobile-toggle {
            display: none;
            background: var(--afar-deep);
            color: #fff; border: none;
            border-radius: 8px; padding: 0.5rem 0.75rem;
        }
        .sidebar-backdrop {
            display: none;
            position: fixed; inset: 0;
            background: rgba(11,31,51,0.5);
            z-index: 1040;
        }
        @media (max-width: 991.98px) {
            .sidebar { transform: translateX(-100%); }
            .sidebar.open { transform: translateX(0); }
            .sidebar-backdrop.show { display: block; }
            .main-content { margin-left: 0; }
            .mobile-toggle { display: inline-block; }
        }
    </style>
</head>
<body>
@php
$menu = [
    'content' => [
        ['route' => 'admin.news',          'label' => 'News',          'icon' => 'fa-newspaper'],
        ['route' => 'admin.announcements', 'label' => 'Announcements', 'icon' => 'fa-bullhorn'],
        ['route' => 'admin.initiatives',   'label' => 'Initiatives',   'icon' => 'fa-lightbulb'],
        ['route' => 'admin.publications',  'label' => 'Articles',  'icon' => 'fa-book-open'],
        ['route' => 'admin.videos',        'label' => 'Videos',        'icon' => 'fa-video'],
        ['route' => 'admin.galleries',     'label' => 'Gallery',       'icon' => 'fa-images'],
        ['route' => 'admin.vacancies',     'label' => 'Vacancies',     'icon' => 'fa-briefcase'],
        ['route' => 'admin.documents',     'label' => 'Documents',     'icon' => 'fa-file-pdf'],
        ['route' => 'admin.pages',         'label' => 'Pages',         'icon' => 'fa-file-lines'],
        ['route' => 'admin.services',      'label' => 'Services',      'icon' => 'fa-hand-holding-heart'],
        ['route' => 'admin.about',         'label' => 'About',         'icon' => 'fa-building-columns'],
    ],
    'system' => [
        ['route' => 'admin.users',    'label' => 'Users',    'icon' => 'fa-users-gear', 'admin' => true],
        ['route' => 'admin.settings', 'label' => 'Settings', 'icon' => 'fa-gear'],
    ],
];
@endphp
<div class="admin-wrapper">
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <img src="{{ asset('logo.png') }}" alt="logo">
            <div class="brand">Afar Justice<small>Content Studio</small></div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fa-solid fa-gauge"></i><span>Dashboard</span>
                </a>
            </li>
            @foreach($menu as $section => $items)
                <li class="sidebar-section">{{ $section === 'content' ? 'Content' : 'System' }}</li>
                @foreach($items as $item)
                    @if(empty($item['admin']) || auth()->user()?->role === 'admin')
                        <li>
                            <a href="{{ route($item['route'] . '.index') }}" class="{{ request()->routeIs($item['route'] . '.*') ? 'active' : '' }}">
                                <i class="fa-solid {{ $item['icon'] }}"></i><span>{{ $item['label'] }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            @endforeach
        </ul>
        <div class="sidebar-footer">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-ghost w-100" style="color:#cfdbe6; border-color: rgba(255,255,255,0.2);">
                    <i class="fa-solid fa-arrow-right-from-bracket me-2"></i> Logout
                </button>
            </form>
        </div>
    </nav>
    <div class="sidebar-backdrop" id="sidebarBackdrop"></div>
    <div class="main-content">
        <div class="topbar">
            <div class="d-flex align-items-center gap-3">
                <button class="mobile-toggle" id="sidebarToggle"><i class="fa-solid fa-bars"></i></button>
                <div class="page-title">@yield('title', 'Dashboard')</div>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="{{ url('/en') }}" target="_blank" class="btn btn-ghost btn-sm d-none d-md-inline-block">
                    <i class="fa-solid fa-globe me-1"></i> View Site
                </a>
                <span class="user-pill">
                    <i class="fa-solid fa-user-shield me-1"></i>{{ auth()->user()?->name }}
                    <span class="role-tag">{{ auth()->user()?->role }}</span>
                </span>
            </div>
        </div>
        <div class="content-area">
            @if(session('success'))
                <div class="alert alert-success rounded-3 mb-4">
                    <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
                </div>
            @endif
            @if($errors->any() && request()->routeIs('*.index'))
                <div class="alert alert-danger rounded-3 mb-4">
                    <i class="fa-solid fa-circle-exclamation me-2"></i> {{ $errors->first() }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
<script>
    // Sidebar (mobile)
    const sidebar = document.getElementById('sidebar');
    const backdrop = document.getElementById('sidebarBackdrop');
    document.getElementById('sidebarToggle')?.addEventListener('click', () => {
        sidebar.classList.toggle('open');
        backdrop.classList.toggle('show');
    });
    backdrop.addEventListener('click', () => {
        sidebar.classList.remove('open');
        backdrop.classList.remove('show');
    });

    // Locale tabs — one switcher controls every [data-locale] input on the page
    document.querySelectorAll('.locale-tabs').forEach(tabs => {
        tabs.querySelectorAll('.locale-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const locale = btn.dataset.locale;
                const form = tabs.closest('form') || document;
                tabs.querySelectorAll('.locale-btn').forEach(b => b.classList.toggle('active', b === btn));
                form.querySelectorAll('.locale-pane').forEach(p => p.classList.toggle('active', p.dataset.locale === locale));
            });
        });
    });

    // Quill rich-text: [data-richtext] wraps .quill-editor + hidden input
    document.querySelectorAll('[data-richtext]').forEach(wrap => {
        const editor = wrap.querySelector('.quill-editor');
        const input = wrap.querySelector('input[type="hidden"]');
        const quill = new Quill(editor, {
            theme: 'snow',
            modules: { toolbar: [['bold', 'italic', 'underline'], [{ 'list': 'bullet' }, { 'list': 'ordered' }], [{ 'header': [2, 3, false] }], ['link'], ['clean']] }
        });
        editor.querySelector('.ql-editor').innerHTML = input.value;
        wrap.closest('form').addEventListener('submit', () => {
            input.value = quill.getSemanticHTML ? quill.getSemanticHTML() : editor.querySelector('.ql-editor').innerHTML;
        });
    });

    // Drag-drop file zones: .file-drop > input[type=file]
    document.querySelectorAll('.file-drop').forEach(zone => {
        const input = zone.querySelector('input[type="file"]');
        const preview = zone.querySelector('.file-preview');
        zone.addEventListener('click', () => input.click());
        ['dragover', 'dragenter'].forEach(ev => zone.addEventListener(ev, e => { e.preventDefault(); zone.classList.add('dragover'); }));
        ['dragleave', 'drop'].forEach(ev => zone.addEventListener(ev, e => { e.preventDefault(); zone.classList.remove('dragover'); }));
        zone.addEventListener('drop', e => {
            if (e.dataTransfer.files.length) { input.files = e.dataTransfer.files; renderPreview(); }
        });
        input.addEventListener('change', renderPreview);
        function renderPreview() {
            const f = input.files[0];
            if (!f) return;
            if (f.type.startsWith('image/')) {
                const url = URL.createObjectURL(f);
                preview.innerHTML = '<img src="' + url + '" alt=""><div class="file-name mt-2">' + f.name + '</div>';
            } else {
                preview.innerHTML = '<i class="fa-solid fa-file-arrow-up"></i><div class="file-name mt-1">' + f.name + '</div>';
            }
        }
    });

    // Slug autogen: title[en] -> slug input (until manually edited)
    const slugInput = document.querySelector('input[name="slug"]');
    const titleEn = document.querySelector('input[name="title[en]"]');
    if (slugInput && titleEn) {
        let slugTouched = slugInput.value !== '';
        slugInput.addEventListener('input', () => slugTouched = true);
        titleEn.addEventListener('input', () => {
            if (slugTouched) return;
            slugInput.value = titleEn.value.toLowerCase().trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
        });
    }

    // Bulk selection
    const bulkForm = document.getElementById('bulkForm');
    if (bulkForm) {
        const bar = document.getElementById('bulkBar');
        const selectAll = document.getElementById('selectAll');
        const boxes = document.querySelectorAll('.row-check');
        const count = document.getElementById('bulkCount');
        function refresh() {
            const n = bulkForm.querySelectorAll('.row-check:checked').length;
            bar.classList.toggle('show', n > 0);
            if (count) count.textContent = n + ' selected';
        }
        selectAll?.addEventListener('change', () => { boxes.forEach(b => b.checked = selectAll.checked); refresh(); });
        boxes.forEach(b => b.addEventListener('change', refresh));
        bulkForm.querySelectorAll('[data-bulk-action]').forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.dataset.bulkAction === 'delete' && !confirm('Delete the selected items? This cannot be undone.')) return;
                bulkForm.querySelector('#bulkAction').value = btn.dataset.bulkAction;
                bulkForm.submit();
            });
        });
    }
</script>
</body>
</html>
