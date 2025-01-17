<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Perpustakaan')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }
        /* Navbar Styling */
        .navbar {
            background-color: #5e412f;
            border-bottom: 2px solid #3b2b23;
            padding: 15px 20px;
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #f4ede1;
        }
        .navbar-nav > li > a {
            color: #f4ede1;
        }
        .navbar-nav > li > a:hover {
            color: #d1c1a7;
        }
        .navbar-right {
            margin-top: 10px;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('daftar-buku.index')}}">Books</a></li>
                        <li><a href="{{route('penyewaan.index')}}">Peminjaman</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i> {{ Auth::user()->email ?? 'Guest' }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            @if(Auth::check())
                                <li><a>Level: {{ Auth::user()->role }}</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('actionlogout') }}"><i class="fa fa-power-off"></i> Log Out</a></li>
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
