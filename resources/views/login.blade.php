<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/foto/perpustakaan.jpeg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.8);
            color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 350px;
        }
        .login-container h2 {
            color: rgb(155, 96, 63);
        }
        .btn-primary {
            background-color: rgb(155, 96, 63);
            border-color: rgb(155, 96, 63);
        }
        .btn-primary:hover {
            background-color: rgb(139, 86, 56);
            border-color: rgb(139, 86, 56);
        }
        .form-label {
            color: #333;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.2);
            color: #333;
            font-size: 14px;
            padding: 6px 12px;
            height: auto;
            border-radius: 20px;
        }
        .form-control::placeholder {
            color: #666;
            font-size: 12px;
        }
        .form-control:focus {
            background: rgba(255, 255, 255, 0.9);
            border-color: rgb(155, 96, 63);
            box-shadow: none;
        }
        a {
            color: rgb(155, 96, 63);
            text-decoration: none;
            font-size: 14px;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn-lg {
            font-size: 14px;
            padding: 8px 16px;
            border-radius: 20px;
        }
        .small-text {
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="login-container text-center">
            <h2><b>Login</b></h2>
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Oops!</b> {{ session('error') }}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
                @csrf
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Kata Sandi" required>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="{{ route('register') }}">Belum punya akun? Daftar</a>
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100">Masuk</button>
            </form>
            <hr>
            <p class="small-text text-muted">Perpustakaan Online © 2025</p>
        </div>
    </div>
</body>
</html>
