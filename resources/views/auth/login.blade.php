<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akademik</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body{
            background: linear-gradient(135deg, #0f172a, #1e293b, #334155);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .login-card{
            width: 400px;
            border: none;
            border-radius: 20px;
            overflow: hidden;
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
            color: white;
        }

        .login-header{
            text-align: center;
            padding: 30px 20px 10px;
        }

        .login-header i{
            font-size: 70px;
            color: #38bdf8;
        }

        .login-header h2{
            margin-top: 10px;
            font-weight: bold;
        }

        .form-control{
            background: rgba(255,255,255,0.15);
            border: none;
            color: white;
            border-radius: 10px;
            padding: 12px;
        }

        .form-control:focus{
            background: rgba(255,255,255,0.2);
            color: white;
            box-shadow: none;
            border: 1px solid #38bdf8;
        }

        .form-control::placeholder{
            color: #d1d5db;
        }

        .btn-login{
            background: #38bdf8;
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-login:hover{
            background: #0ea5e9;
            transform: scale(1.02);
        }

        .footer-text{
            text-align: center;
            font-size: 14px;
            color: #cbd5e1;
            margin-top: 15px;
        }

        .alert{
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="card login-card">

        <div class="login-header">
            <i class="bi bi-mortarboard-fill"></i>
            <h2>Sistem Akademik</h2>
            <p>Silahkan login untuk melanjutkan</p>
        </div>

        <div class="card-body p-4">

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">
                        <i class="bi bi-envelope-fill"></i> Email
                    </label>

                    <input type="email"
                        name="email"
                        class="form-control"
                        placeholder="Masukkan email"
                        required>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        <i class="bi bi-lock-fill"></i> Password
                    </label>

                    <input type="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        required>
                </div>

                <button type="submit" class="btn btn-login w-100">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Login
                </button>

            </form>

            <div class="footer-text">
                © 2026 Sistem Akademik
            </div>

        </div>
    </div>

</body>
</html>