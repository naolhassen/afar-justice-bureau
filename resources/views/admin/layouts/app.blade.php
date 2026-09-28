<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin') | Afar Prosperity Party CMS</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
    <style>
        :root {
            --purple: #9b59b6;
            --purple-dark: #7d3c98;
            --purple-light: #c19cd9;
            --dark: #2B1343;
            --bg: #f8f7fc;
        }
        * { box-sizing: border-box; }
        body {
            background: var(--bg);
            font-family: 'Segoe UI', Roboto, system-ui, sans-serif;
            color: #333;
        }
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 260px;
            background: #fff;
            border-right: 1px solid #ece6f3;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            z-index: 1050;
            transition: transform 0.3s ease;
        }
        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid #ece6f3;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        .sidebar-header img {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            object-fit: cover;
        }
        .sidebar-header .brand {
            font-weight: 700;
            color: var(--dark);
            font-size: 0.95rem;
        }
        .sidebar-header .brand span {
            color: var(--purple);
        }
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
            overflow-y: auto;
            flex: 1;
        }
        .sidebar-menu li a {
            display: flex;
            align-items: center;
            gap: 0.85rem;
            padding: 0.85rem 1.25rem;
            color: #5a4f6d;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            border-left: 4px solid transparent;
        }
        .sidebar-menu li a:hover,
        .sidebar-menu li a.active {
            background: #f6f0fa;
            color: var(--purple);
            border-left-color: var(--purple);
            padding-left: 1.5rem;
        }
        .sidebar-menu li a i {
            width: 22px;
            text-align: center;
            color: var(--purple-light);
            transition: color 0.2s;
        }
        .sidebar-menu li a:hover i,
        .sidebar-menu li a.active i {
            color: var(--purple);
        }
        .sidebar-footer {
            padding: 1rem;
            border-top: 1px solid #ece6f3;
        }
        .main-content {
            flex: 1;
            margin-left: 260px;
            min-width: 0;
            display: flex;
            flex-direction: column;
        }
        .topbar {
            background: #fff;
            border-bottom: 1px solid #ece6f3;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .page-title {
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--dark);
        }
        .user-pill {
            background: #f6f0fa;
            border: 1px solid #e9def3;
            color: var(--purple);
            border-radius: 50px;
            padding: 0.4rem 0.9rem;
            font-weight: 600;
            font-size: 0.85rem;
        }
        .content-area {
            padding: 1.5rem;
            flex: 1;
        }
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(43, 19, 67, 0.06);
            background: #fff;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(43, 19, 67, 0.1);
        }
        .stat-card {
            border-left: 5px solid var(--purple);
            padding: 1.25rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .stat-card i {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: #f6f0fa;
            color: var(--purple);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }
        .stat-value {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--dark);
            line-height: 1;
        }
        .stat-label {
            color: #7a6e8a;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .btn-purple {
            background: var(--purple);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 0.6rem 1.2rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .btn-purple:hover {
            background: var(--purple-dark);
            color: #fff;
            transform: translateY(-1px);
        }
        .btn-outline-purple {
            background: transparent;
            color: var(--purple);
            border: 1px solid var(--purple-light);
            border-radius: 10px;
            padding: 0.5rem 1rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .btn-outline-purple:hover {
            background: var(--purple);
            color: #fff;
        }
        .badge-draft { background: #f0f0f0; color: #666; }
        .badge-published { background: #e9f6ef; color: #27ae60; }
        .table thead th {
            background: #f6f0fa;
            color: var(--dark);
            font-weight: 700;
            border: none;
            padding: 1rem;
        }
        .table tbody td {
            padding: 1rem;
            border-color: #f2eef7;
            vertical-align: middle;
        }
        .table tbody tr:hover td {
            background: #fcfbfe;
        }
        .form-control, .form-select {
            border-radius: 10px;
            border: 1px solid #e2d8ee;
            padding: 0.75rem 1rem;
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--purple);
            box-shadow: 0 0 0 0.2rem rgba(155, 89, 182, 0.15);
        }
        .mobile-toggle {
            display: none;
            background: var(--purple);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0.5rem 0.75rem;
        }
        @media (max-width: 991.98px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.open {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
            }
            .mobile-toggle {
                display: inline-block;
            }
        }
    </style>
</head>
<body>
@php
$menu = [
    ['route' => 'admin.dashboard', 'label' => 'Dashboard', 'icon' => 'fa-gauge'],
    ['route' => 'admin.crud.index', 'param' => 'news', 'label' => 'News', 'icon' => 'fa-newspaper'],
    ['route' => 'admin.crud.index', 'param' => 'announcement', 'label' => 'Announcements', 'icon' => 'fa-bullhorn'],
    ['route' => 'admin.crud.index', 'param' => 'vacancy', 'label' => 'Vacancies', 'icon' => 'fa-briefcase'],
    ['route' => 'admin.crud.index', 'param' => 'document', 'label' => 'Documents', 'icon' => 'fa-file-pdf'],
    ['route' => 'admin.crud.index', 'param' => 'page', 'label' => 'Pages', 'icon' => 'fa-file-lines'],
    ['route' => 'admin.crud.index', 'param' => 'service', 'label' => 'Services', 'icon' => 'fa-hand-holding-heart'],
    ['route' => 'admin.crud.index', 'param' => 'about', 'label' => 'About', 'icon' => 'fa-building-columns'],
    ['route' => 'admin.crud.index', 'param' => 'setting', 'label' => 'Settings', 'icon' => 'fa-gear'],
];
@endphp
<div class="admin-wrapper">
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <img src="{{ asset('images/logo.jpg') }}" alt="logo">
            <div class="brand">Afar <span>Prosperity</span></div>
        </div>
        <ul class="sidebar-menu">
            @foreach($menu as $item)
                @php
                    $url = isset($item['param']) ? route($item['route'], $item['param']) : route($item['route']);
                    $isActive = request()->url() === $url || (isset($item['param']) && request()->route('module') === $item['param']);
                @endphp
                <li>
                    <a href="{{ $url }}" class="{{ $isActive ? 'active' : '' }}">
                        <i class="fa-solid {{ $item['icon'] }}"></i>
                        <span>{{ $item['label'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="sidebar-footer">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-purple w-100">
                    <i class="fa-solid fa-arrow-right-from-bracket me-2"></i> Logout
                </button>
            </form>
        </div>
    </nav>
    <div class="main-content">
        <div class="topbar">
            <div class="d-flex align-items-center gap-3">
                <button class="mobile-toggle" id="sidebarToggle"><i class="fa-solid fa-bars"></i></button>
                <div class="page-title">@yield('title', 'Dashboard')</div>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span class="user-pill"><i class="fa-solid fa-user-shield me-2"></i>{{ auth()->user()?->name }} ({{ auth()->user()?->role }})</span>
            </div>
        </div>
        <div class="content-area">
            @if(session('success'))
                <div class="alert alert-success rounded-3 mb-4">
                    <i class="fa-solid fa-circle-check me-2"></i> {{ session('success') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const toggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    if (toggle) {
        toggle.addEventListener('click', () => sidebar.classList.toggle('open'));
    }
</script>
</body>
</html>
