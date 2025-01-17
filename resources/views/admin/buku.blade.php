<!-- resources/views/admin/books/index.blade.php -->
@extends('layout.app')

@section('title', 'Daftar Buku')

@section('content')
<div class="container mt-5">
    <h2>Daftar Buku</h2>
    <a href="{{ route('admin.books.create') }}" class="btn btn-primary mb-3">Tambah Buku Baru</a>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Cover</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td><img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}" width="100"></td>
                    <td>
                        <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
