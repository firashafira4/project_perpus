@extends('layouts.app') <!-- Pastikan Anda punya layout -->

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
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
