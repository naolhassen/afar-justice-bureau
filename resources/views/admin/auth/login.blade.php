<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login - Afar Prosperity Party</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
    <style>
        :root {
            --purple: #9b59b6;
            --purple-dark: #7d3c98;
            --purple-light: #c19cd9;
            --dark: #2B1343;
        }
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #f6f4ff 0%, #ede9f7 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }
        .login-card {
            width: 100%;
            max-width: 420px;
            border: none;
            border-radius: 24px;
            box-shadow: 0 25px 60px rgba(43, 19, 67, 0.12);
            overflow: hidden;
            background: #fff;
        }
        .login-header {
            background: linear-gradient(135deg, var(--purple) 0%, var(--purple-dark) 100%);
            color: #fff;
            padding: 2.5rem;
            text-align: center;
        }
        .login-header i {
            font-size: 3rem;
            margin-bottom: 0.75rem;
        }
        .form-control {
            border-radius: 12px;
            border: 1px solid #e2d8ee;
            padding: 0.85rem 1rem;
        }
        .form-control:focus {
            border-color: var(--purple);
            box-shadow: 0 0 0 0.2rem rgba(155, 89, 182, 0.2);
        }
        .btn-login {
            background: var(--purple);
            border: none;
            border-radius: 12px;
            padding: 0.85rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .btn-login:hover {
            background: var(--purple-dark);
            transform: translateY(-1px);
        }
        .input-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--purple);
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <i class="fa-solid fa-shield-halved"></i>
            <h4 class="mb-0">Afar Prosperity Party</h4>
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
                    <label class="form-label fw-semibold" style="color: var(--dark);">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="admin@admin.com" value="{{ old('email') }}" required autofocus>
                    <i class="fa-solid fa-envelope input-icon"></i>
                </div>
                <div class="mb-4 position-relative">
                    <label class="form-label fw-semibold" style="color: var(--dark);">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password" required>
                    <i class="fa-solid fa-lock input-icon"></i>
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
