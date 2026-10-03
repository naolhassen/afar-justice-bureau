<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login - Afar Regional State Justice Bureau</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --afar-deep: #0F2942;
            --afar-deep-2: #0B1F33;
            --afar-accent: #C8102E;
            --afar-accent-dark: #A20D24;
        }
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, var(--afar-deep) 0%, var(--afar-deep-2) 60%, #10293f 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Source Sans Pro', 'Segoe UI', system-ui, sans-serif;
        }
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background:
                radial-gradient(ellipse 60% 50% at 15% 10%, rgba(200,16,46,0.14), transparent),
                radial-gradient(ellipse 50% 40% at 90% 85%, rgba(14,122,70,0.12), transparent);
            pointer-events: none;
        }
        .login-card {
            width: 100%;
            max-width: 430px;
            border: none;
            border-radius: 20px;
            box-shadow: 0 30px 80px rgba(0,0,0,0.4);
            overflow: hidden;
            background: #fff;
        }
        .login-header {
            background: var(--afar-deep);
            color: #fff;
            padding: 2.2rem 2.5rem 1.8rem;
            text-align: center;
            border-bottom: 4px solid var(--afar-accent);
        }
        .login-header img {
            width: 64px; height: 64px;
            border-radius: 14px;
            object-fit: cover;
            background: #fff;
            padding: 4px;
            margin-bottom: 0.9rem;
        }
        .login-header h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            margin-bottom: 0.2rem;
            font-size: 1.25rem;
        }
        .login-header small {
            color: #9fb4c8;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            font-size: 0.7rem;
            font-weight: 600;
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #d7e2ec;
            padding: 0.8rem 1rem;
            padding-right: 2.6rem;
        }
        .form-control:focus {
            border-color: #1C4E80;
            box-shadow: 0 0 0 0.2rem rgba(28,78,128,0.12);
        }
        .btn-login {
            background: var(--afar-accent);
            border: none;
            border-radius: 10px;
            padding: 0.85rem;
            font-weight: 700;
            transition: all 0.2s ease;
        }
        .btn-login:hover {
            background: var(--afar-accent-dark);
        }
        .input-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #1C4E80;
        }
        .form-label { color: var(--afar-deep); }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <img src="{{ asset('logo.png') }}" alt="Afar Regional State">
            <h4>Afar Regional State<br>Justice Bureau</h4>
            <small>Content Management System</small>
        </div>
        <div class="p-4 p-md-5">
            @if($errors->any())
                <div class="alert alert-danger rounded-3">
                    <i class="fa-solid fa-circle-exclamation me-2"></i> {{ $errors->first() }}
                </div>
            @endif
            <form method="POST" action="{{ route('admin.login.post') }}">
                @csrf
                <div class="mb-3 position-relative">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="admin@admin.com" value="{{ old('email') }}" required autofocus>
                    <i class="fa-solid fa-envelope input-icon"></i>
                </div>
                <div class="mb-3 position-relative">
                    <label class="form-label fw-semibold">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                    <i class="fa-solid fa-lock input-icon"></i>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-login">
                        <i class="fa-solid fa-arrow-right-to-bracket me-2"></i> Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
