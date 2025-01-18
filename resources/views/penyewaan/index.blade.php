@extends('layout.app')

@section('title', 'Formulir Peminjaman Buku')

@section('content')
<div class="container py-5" style="background-color: #f8f7f3; border-radius: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
    <h2 class="text-center mb-4" style="color: #6f4f29; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Formulir Peminjaman Buku</h2>

    <!-- Notifikasi -->
    @if(session('success'))
        <div class="alert alert-success text-center mb-4" role="alert" style="font-weight: bold; background-color: #d4edda; color: #155724;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulir Penyewaan Buku -->
    <div class="card shadow-lg mb-5" style="border-radius: 20px; border: none; background-color: #fff3e3;">
        <div class="card-body">
            <h4 class="card-title text-center mb-4" style="color: #8b4513; font-family: 'Arial', sans-serif;">Isi Data Peminjaman</h4>
            <form action="{{ route('penyewaan.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="form-label" style="color: #6f4f29; font-weight: bold;">Nama Lengkap:</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap" required style="border-radius: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); border: 1px solid #d1a15e;">
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label" style="color: #6f4f29; font-weight: bold;">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required style="border-radius: 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); border: 1px solid #d1a15e;">
                </div>

                <div class="mb-4">
                    <label for="buku_id" class="form-label" style="color: #6f4f29; font-weight: bold;">Pilih Buku:</label>
                    <select name="buku_id" id="buku_id" class="form-select" required style="border-radius: 12px; background-color: #fff7e6; box-shadow: 0 2px 4px rgba(0,0,0,0.1); border: 1px solid #d1a15e;">
                        <option value="" disabled selected>Pilih buku yang ingin dipinjam</option>
                        @foreach($books as $book)
                            <option value="{{ $book->id }}">{{ $book->title }} - {{ $book->author }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100" style="border-radius: 12px; background-color: #d1a15e; border-color: #d1a15e; font-weight: bold;">
                    Pinjam Buku
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
