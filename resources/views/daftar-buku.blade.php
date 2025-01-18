@extends('layout.app') <!-- Pastikan Anda punya layout -->

@section('content')
<div class="container book-container" style="background-color: #f4ede1; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h1 class="text-center book-title" style="color: #5e412f; margin-bottom: 30px; font-size: 28px;">Daftar Buku</h1>
    <div class="book-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; justify-content: center;">
        @foreach ($books as $book)
            <div class="book-card" style="background-color: #d7c4ae; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <img src="{{ asset('foto/' . $book->cover_image) }}" alt="{{ $book->title }}" class="book-image" style="width: 100%; height: 250px; object-fit: cover; border-bottom: 2px solid #5e412f;">
                <div class="book-body" style="padding: 15px; color: #5e412f; display: flex; flex-direction: column; justify-content: space-between; height: 200px;">
                    <h5 class="book-title" style="font-size: 18px; font-weight: bold; margin-bottom: 10px;">{{ $book->title }}</h5>
                    <p class="book-info" style="font-size: 14px; line-height: 1.6; margin-bottom: 15px;">
                        <strong>Penulis:</strong> {{ $book->author }}<br>
                        <strong>Tahun:</strong> {{ $book->year }}<br>
                        {{ Str::limit($book->description, 100) }}
                    </p>
                    <a href="{{ route('wishlist.add', $book->id) }}" class="btn-wishlist" style="background-color: #5e412f; color: #f4ede1; padding: 10px; text-align: center; border-radius: 5px; text-decoration: none; font-size: 14px; font-weight: bold; transition: background-color 0.3s ease;">Tambah ke Wishlist</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
