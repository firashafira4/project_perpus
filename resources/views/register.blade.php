<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/foto/perpustakaan.jpeg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: #fff;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.6); /* Overlay hitam dengan transparansi */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .register-container {
            background: rgba(255, 255, 255, 0.8); /* Warna putih dengan transparansi */
            color: #333;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 2;
            max-width: 400px;
            width: 100%;
        }
        .register-container h2 {
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
        <div class="register-container text-center">
            <h2><b>Register</b></h2>
            <hr>
            @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <form action="{{ route('actionregister') }}" method="post">
                @csrf
                <div class="form-group mb-3 text-start">
                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group mb-3 text-start">
                    <label for="username"><i class="fa fa-user"></i> Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
                </div>
                <div class="form-group mb-3 text-start">
                    <label for="password"><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                </div>
                <div class="form-group mb-4 text-start">
                    <label for="role"><i class="fa fa-address-book"></i> Role</label>
                    <select name="role" class="form-control">
                        <option value="Guest">Guest</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-2 w-100"><i class="fa fa-user"></i> Register</button>
                <hr>
                <p class="text-center small-text">Sudah punya akun? <a href="{{ route('login') }}">Login Disini!</a></p>
            </form>
        </div>
    </div>
</body>
</html>
