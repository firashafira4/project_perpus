@extends('layout.app')

@section('title', 'Penyewaan Buku')

@section('content')
<div class="container py-5" style="background-color: #f3f4f6; border-radius: 15px;">
    <h2 class="text-center mb-4" style="color: #6c757d;">Penyewaan Buku</h2>

    <!-- Notifikasi -->
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form Biodata -->
    <div class="card shadow-lg mb-5" style="border-radius: 15px;">
        <div class="card-body">
            <h4 class="card-title text-center mb-4" style="color: #007bff;">Formulir Penyewaan Buku</h4>
            <form action="{{ route('penyewaan.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label" style="color: #495057;">Nama Lengkap:</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap" required style="border-radius: 10px;">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label" style="color: #495057;">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required style="border-radius: 10px;">
                </div>

                <div class="mb-3">
                    <label for="buku_id" class="form-label" style="color: #495057;">Pilih Buku:</label>
                    <select name="buku_id" id="buku_id" class="form-select" required style="border-radius: 10px;">
                        <option value="" disabled selected>Pilih buku yang ingin dipinjam</option>
                        @foreach($books as $book)
                            <option value="{{ $book->id }}">{{ $book->title }} - {{ $book->author }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100" style="border-radius: 10px; background-color: #66c7ff; border-color: #66c7ff;">Pinjam Buku</button>
            </form>
        </div>
    </div>

    <!-- Daftar Buku -->
    <h3 class="text-center mb-4" style="color: #6c757d;">Daftar Buku</h3>
    <div class="row g-4">
        @foreach($books as $book)
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm h-100" style="border-radius: 15px;">
                    <img src="{{ asset('foto/' . $book->cover_image) }}" alt="{{ $book->title }}" class="card-img-top" style="height: 250px; object-fit: cover; border-radius: 15px 15px 0 0;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #007bff;">{{ $book->title }}</h5>
                        <p class="card-text" style="color: #495057;"><strong>Penulis:</strong> {{ $book->author }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
