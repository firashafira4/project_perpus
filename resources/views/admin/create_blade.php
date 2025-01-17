<!-- resources/views/admin/books/create.blade.php -->
@extends('layout.app')

@section('title', 'Tambah Buku')

@section('content')
<div class="container mt-5">
    <h2>Tambah Buku Baru</h2>
    <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Judul Buku</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="author">Penulis</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>

        <div class="form-group">
            <label for="cover_image">Cover Buku</label>
            <input type="file" class="form-control" id="cover_image" name="cover_image" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan Buku</button>
    </form>
</div>
@endsection
