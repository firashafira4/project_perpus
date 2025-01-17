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
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* General Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

/* Navbar Styling */
.navbar {
    background-color: #ffffff;
    border-bottom: 1px solid #ddd;
    padding: 15px 20px;
}
.navbar-brand {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}
.navbar-nav > li > a {
    color: #333;
}
.navbar-nav > li > a:hover {
    color: #007bff;
}
.navbar-right {
    margin-top: 10px;
}

/* Hero Section */
.hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 50px 20px;
    background-color: #fef6e4;
    border-radius: 10px;
    margin-top: 20px;
}
.hero-media {
    width: 100%; /* Sesuai lebar kontainer */
    height: auto; /* Tinggi otomatis untuk menjaga rasio */
    border-radius: 10px; /* Opsional: untuk tampilan lebih estetis */
    object-fit: cover; /* Menjaga proporsi gambar */
}

.hero-image {
    width: 50%;
    max-width: 400px;
    border-radius: 10px;
    animation: zoomIn 3s ease-in-out infinite alternate;
}

@keyframes zoomIn {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.1);
    }
}

.hero-text {
    max-width: 50%;
}
.hero h2 {
    font-size: 36px;
    color: #333;
}
.hero p {
    font-size: 16px;
    color: #666;
}

/* Rekomendasi Buku Section */
.recommendation-section {
    margin-top: 40px;
}
.recommendation-title {
    font-size: 24px;
    margin-bottom: 20px;
    font-weight: bold;
}
.card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 20px;
}
.card img {
    width: 100%;
    height: auto;
}
.card-title {
    font-size: 18px;
    margin: 10px 0;
}
.card-text {
    font-size: 14px;
    color: #777;
}

/* Top Categories Section */
.categories-section {
    margin-top: 40px;
}
.categories-title {
    font-size: 24px;
    margin-bottom: 20px;
    font-weight: bold;
}
.categories-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    justify-content: center;
}
.category-box {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s;
}
.category-box:hover {
    transform: scale(1.05);
}
.category-box img {
    width: 100px;
    height: 100px;
    margin-bottom: 10px;
}
.category-title {
    font-size: 18px;
    color: #333;
    margin-top: 10px;
}

</style>
<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}">Perpustakaan Web</a>
                    <a class="navbar-brand" href="{{ route('daftar-buku.index') }}">Daftar Buku</a>
                    <a class="navbar-brand" href="{{ route('penyewaan.index') }}">Penyewaan</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="{{route('actionlogout')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{Auth::user()->email}} <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a>Level: {{Auth::user()->role}}</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{route('actionlogout')}}"><i class="fa fa-power-off"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>

        <!-- Kontak Section -->
    <div class="container mt-5">
        <!-- Kontak Button -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#contactModal">
            <i class="fa fa-phone"></i> Kontak Kami
        </button>

        <!-- Modal untuk Kontak -->
        <div id="contactModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Kontak Kami</h4>
                    </div>
                    <div class="modal-body">
                        <p><strong>Email:</strong> <a href="mailto:perpustakaan@example.com">perpustakaan@example.com</a></p>
                        <p><strong>Instagram:</strong> <a href="https://www.instagram.com/perpustakaan" target="_blank">@perpustakaan</a></p>
                        <p><strong>WhatsApp:</strong> <a href="https://wa.me/1234567890" target="_blank">Klik disini untuk WhatsApp</a></p>
                        <p><strong>Facebook:</strong> <a href="https://facebook.com/perpustakaan" target="_blank">Perpustakaan FB</a></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS dan jQuery -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Hero Section -->
        <div class="hero">
            <div class="hero-text">
                <h2>Build Your Library</h2>
                <p>Buy two selected books and get one for free. Explore a variety of genres in our collection!</p>
                <a href="#" class="btn btn-primary">View All</a>
            </div>
            <img src="/foto/perpus3.jpg" alt="Hero Image">
        </div>

        <!-- Top Categories -->
        <div class="categories-section">
            <h3 class="categories-title">Top Categories</h3>
            <div class="categories-container">
                <!-- Category 1 -->
                <div class="category-box">
                    <img src="/foto/buku4.jpeg" alt="Category 1">
                    <h4 class="category-title">Fiksi</h4>
                </div>
                <!-- Category 2 -->
                <div class="category-box">
                    <img src="/foto/buku5.jpeg" alt="Category 2">
                    <h4 class="category-title">Non-Fiksi</h4>
                </div>
                <!-- Category 3 -->
                <div class="category-box">
                    <img src="/foto/buku6.jpeg" alt="Category 3">
                    <h4 class="category-title">Biografi</h4>
                </div>
                <!-- Category 4 -->
                <div class="category-box">
                    <img src="/foto/buku7.jpeg" alt="Category 4">
                    <h4 class="category-title">Teknologi</h4>
                </div>
            </div>
        </div>

        <!-- Rekomendasi Buku -->
        <div class="recommendation-section">
            <h3 class="recommendation-title">Popular Now</h3>
            <div class="row">
                <!-- Buku 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="/foto/buku1.jpeg" alt="Buku 1">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 1</h5>
                            <p class="card-text">Deskripsi singkat buku 1 yang menarik pembaca.</p>
                        </div>
                    </div>
                </div>
                <!-- Buku 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="/foto/buku2.jpeg" alt="Buku 2">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 2</h5>
                            <p class="card-text">Deskripsi singkat buku 2 yang menarik pembaca.</p>
                        </div>
                    </div>
                </div>
                <!-- Buku 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="/foto/buku3.jpeg" alt="Buku 3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Buku 3</h5>
                            <p class="card-text">Deskripsi singkat buku 3 yang menarik pembaca.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
