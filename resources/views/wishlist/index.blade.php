@extends('layout.app')

@section('content')
<div class="container py-5" style="background-color: #fdf5e6; border-radius: 15px;">
    <h2 class="text-center mb-4" style="color: #8b4513; font-family: 'Georgia', serif;">Wishlist Bacaan</h2>

    <!-- Notifikasi -->
    @if (session('success'))
        <div class="alert alert-success text-center" style="border-radius: 12px;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form Tambah Wishlist -->
    <div class="card shadow-sm mb-4" style="border-radius: 15px; background-color: #fffaf0;">
        <div class="card-body">
            <h4 class="card-title text-center mb-3" style="color: #a0522d;">Tambah Wishlist</h4>
            <form action="{{ route('wishlist.add') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="book_title" class="form-label" style="color: #6f4f29; font-weight: bold;">Judul Buku:</label>
                    <input type="text" class="form-control" id="book_title" name="book_title" placeholder="Masukkan judul buku" required 
                           style="border-radius: 10px; border: 1px solid #d2b48c;">
                </div>

                <div class="mb-3">
                    <label for="book_author" class="form-label" style="color: #6f4f29; font-weight: bold;">Penulis Buku:</label>
                    <input type="text" class="form-control" id="book_author" name="book_author" placeholder="Masukkan nama penulis" required 
                           style="border-radius: 10px; border: 1px solid #d2b48c;">
                </div>

                <div class="mb-3">
                    <label for="book_id" class="form-label" style="color: #6f4f29; font-weight: bold;">ID Buku:</label>
                    <input type="number" class="form-control" id="book_id" name="book_id" placeholder="Masukkan ID buku" required 
                           style="border-radius: 10px; border: 1px solid #d2b48c;">
                </div>

                <button type="submit" class="btn" 
                        style="background-color: #a0522d; color: #fff; font-weight: bold; border-radius: 8px; 
                               border: none; padding: 8px 16px; transition: 0.3s;">
                    Tambah Wishlist
                </button>
            </form>
        </div>
    </div>

    <!-- Tabel Wishlist -->
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-striped" style="background-color: #fffaf0; border-radius: 10px;">
            <thead style="background-color: #a0522d; color: #fff;">
                <tr>
                    <th style="text-align: center;">No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wishlist as $item)
                    <tr>
                        <td style="text-align: center;">{{ $loop->iteration }}</td>
                        <td>{{ $item->book_title }}</td>
                        <td>{{ $item->book_author }}</td>
                        <td style="text-align: center;">
                            <form action="{{ route('wishlist.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" 
                                        style="border-radius: 8px; font-weight: bold; padding: 6px 12px;">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Custom CSS -->
<style>
    .btn:hover {
        background-color: #8b4513 !important;
        color: #fff !important;
        transform: translateY(-2px);
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    th, td {
        vertical-align: middle !important;
    }

    .btn-sm {
        font-size: 14px;
        padding: 6px 12px;
    }

    table {
        margin-top: 10px;
    }
</style>
@endsection
