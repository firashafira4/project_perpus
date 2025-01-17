<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
{
    $books = \App\Models\Book::all(); // Mengambil semua data buku dari database
    return view('daftar-buku', compact('books'));
}
}
