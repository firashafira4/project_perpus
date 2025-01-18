<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4ede1;
            margin: 0;
            padding: 0;
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
            color:rgb(250, 249, 247);
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

        /* Hero Section */
        .hero {
            position: relative;
            text-align: center;
            padding: 0;
            margin-bottom: 50px;
        }
        .hero img {
            width: 100%;
            height: auto;
            display: block;
        }
        .hero .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color:rgb(204, 58, 58);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .hero .hero-text h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero .hero-text p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .hero .hero-text .btn-hero {
            background-color: #5e412f;
            color: #f4ede1;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .hero .hero-text .btn-hero:hover {
            background-color: #3b2b23;
        }

        /* Popular Categories */
        .categories-section {
            padding: 50px 20px;
            background-color: #f4ede1;
        }
        .categories-title {
            font-size: 24px;
            font-weight: bold;
            color:#5e412f;
            text-align: center;
            margin-bottom: 30px;
        }
        .categories-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .category-box {
            background-color: #d7c4ae;
            border-radius: 8px;
            padding: 20px;
            width: 200px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .category-box img {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }
        .category-box h4 {
            font-size: 18px;
            color: #5e412f;
        }

        /* Latest Items */
        .latest-section {
            padding: 50px 20px;
            background-color: #ffffff;
        }
        .latest-title {
            font-size: 24px;
            font-weight: bold;
            color: #5e412f;
            text-align: center;
            margin-bottom: 30px;
        }
        .latest-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .latest-item {
            background-color: #f4ede1;
            border-radius: 8px;
            padding: 20px;
            width: 200px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(255, 254, 254, 0.1);
        }
        .latest-item img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .latest-item h5 {
            font-size: 18px;
            color: #5e412f;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #5e412f;
            color: #f4ede1;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Perpustakaan Litera</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('daftar-buku.index')}}">Books</a></li>
                        <li><a href="{{route('penyewaan.index')}}">Peminjaman</a></li>
                        <li><a href="{{route('login')}}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="hero">
            <img src="/foto/perpus2.jpeg" alt="Books">
            <div class="hero-text">
                <h1>Picked Books Your Door</h1>
                <p>Buy two selected books and get one for free.</p>
                <button class="btn btn-hero" data-toggle="modal" data-target="#contactModal">Contact</button>
            </div>
        </div>

        <!-- Modal Contact -->
        <div id="contactModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Konten Modal -->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Kontak Kami</h4>
                    </div>
                    <div class="modal-body">
                        <p><strong>Email:</strong> <a href="mailto:perpustakaan@example.com">perpustakaanlitera@gmail.com</a></p>
                        <p><strong>Instagram:</strong> <a href="https://www.instagram.com/nakhwagra_?igsh=ZWJvazZmZ29rMjQ=" target="_blank">@perpustakaanLitera</a></p>
                        <p><strong>WhatsApp:</strong> <a href="https://wa.me/qr/CUQU2Z4JKKEIL1 " target="_blank">Klik di sini untuk WhatsApp</a></p>
                        <p><strong>Facebook:</strong> <a href="https://facebook.com/perpustakaan" target="_blank">Perpustakaan FB</a></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Categories Section -->
        <div class="categories-section">
            <h2 class="categories-title">Popular Categories</h2>
            <div class="categories-container">
                <div class="category-box">
                    <img src="/foto/buku1.jpeg" alt="Category">
                    <h4>History Books</h4>
                </div>
                <div class="category-box">
                    <img src="/foto/buku2.jpeg" alt="Category">
                    <h4>Science Books</h4>
                </div>
                <div class="category-box">
                    <img src="/foto/buku3.jpeg" alt="Category">
                    <h4>Fiction Books</h4>
                </div>
            </div>
        </div>

        <!-- Latest Items Section -->
        <div class="latest-section">
            <h2 class="latest-title">Our Latest Items</h2>
            <div class="latest-container">
                <div class="latest-item">
                    <img src="/foto/buku4.jpeg" alt="Latest Item">
                    <h5>Book Title 1</h5>
                </div>
                <div class="latest-item">
                    <img src="/foto/buku5.jpeg" alt="Latest Item">
                    <h5>Book Title 2</h5>
                </div>
                <div class="latest-item">
                    <img src="/foto/buku6.jpeg" alt="Latest Item">
                    <h5>Book Title 3</h5>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2025 Perpustakaan. All rights reserved.</p>
        </div>
    </div>
</body>
</html>