@extends('layout.app')

@section('title', 'Daftar Buku')

@section('content')
<div class="container">
    <h1 class="text-center">Daftar Buku</h1>
    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('foto/' . $book->cover_image) }}" alt="{{ $book->title }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">
                            <strong>Penulis:</strong> {{ $book->author }}<br>
                            <strong>Tahun:</strong> {{ $book->year }}<br>
                            {{ Str::limit($book->description, 100) }}
                        </p>
                        <!-- Tombol Love/Wishlist -->
                        <form action="{{ route('wishlist.add', $book->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="fa fa-heart"></i> Tambahkan ke Wishlist
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection