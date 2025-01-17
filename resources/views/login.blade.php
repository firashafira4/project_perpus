<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="text-center" style="width: 300px;">
        <h2><b>Login</b><br>Selamat Datang di Perpustakaan</h2>
        <hr>
        @if(session('error'))
        <div class="alert alert-danger">
            <b>Oops!</b> {{session('error')}}
        </div>
        @endif
        <form action="{{ route('actionlogin') }}" method="post">
            @csrf
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="">
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Kata Sandi" required="">
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <p class="text-start">Belum punya akun? <a href="{{ route('register') }}">Daftar</a> sekarang!</p>
                <button type="submit" class="btn btn-primary">Masuk</button>
            </div>
            <hr>
        </form>
    </div>
</div>
</body>
</html>
