<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HKU Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0a1628;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 20% 50%, rgba(239, 68, 68, 0.05) 0%, transparent 50%),
                        radial-gradient(circle at 80% 50%, rgba(10, 22, 40, 0.1) 0%, transparent 50%);
            z-index: 0;
        }

        .login-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 440px;
            padding: 15px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            padding: 48px 40px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        .brand-logo {
            font-size: 2rem;
            font-weight: 800;
            color: #ffffff;
            text-align: center;
            margin-bottom: 8px;
        }

        .brand-logo span {
            color: #ef4444;
        }

        .brand-subtitle {
            text-align: center;
            color: #64748b;
            font-size: 0.85rem;
            margin-bottom: 40px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .form-label {
            color: #94a3b8;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 14px 16px;
            color: #ffffff;
            font-size: 0.95rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.15);
            color: #ffffff;
        }

        .form-control::placeholder {
            color: #475569;
        }

        .form-control.is-invalid {
            border-color: #ef4444;
            background: rgba(239, 68, 68, 0.05);
        }

        .invalid-feedback {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 6px;
        }

        .btn-login {
            background: #ef4444;
            color: #ffffff;
            border: none;
            border-radius: 10px;
            padding: 14px;
            font-weight: 700;
            font-size: 0.95rem;
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-login:hover {
            background: #dc2626;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(239, 68, 68, 0.3);
            color: #fff;
        }

        .alert-danger {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
            color: #fca5a5;
            border-radius: 10px;
            font-size: 0.85rem;
            margin-bottom: 24px;
        }

        .back-link {
            text-align: center;
            margin-top: 30px;
        }

        .back-link a {
            color: #64748b;
            text-decoration: none;
            font-size: 0.85rem;
            transition: color 0.3s;
        }

        .back-link a:hover {
            color: #ef4444;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-card">
            <div class="brand-logo">HK<span>U</span></div>
            <p class="brand-subtitle">Admin Panel - Hardjadinata Karya Utama</p>

            @if($errors->any())
                <div class="alert alert-danger">
                    Email atau password yang Anda masukkan salah.
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label class="form-label">Alamat Email</label>
                    <input type="email" 
                           name="email" 
                           class="form-control @error('email') is-invalid @enderror" 
                           placeholder="admin@hku.co.id" 
                           value="{{ old('email') }}" 
                           required autocomplete="email" autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" 
                           name="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           placeholder="Masukkan password" 
                           required autocomplete="current-password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-login">
                    <i class="bi bi-box-arrow-in-right"></i> Masuk ke Dashboard
                </button>
            </form>

            <div class="back-link">
                <a href="/"><i class="bi bi-arrow-left me-1"></i> Kembali ke Website</a>
            </div>
        </div>
    </div>

</body>
</html>