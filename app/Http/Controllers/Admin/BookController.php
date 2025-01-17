<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Menampilkan daftar buku
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    // Menampilkan form untuk menambah buku baru
    public function create()
    {
        return view('admin.books.create');
    }

    // Menyimpan data buku baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'cover_image' => 'required|image',
        ]);

        $imagePath = $request->file('cover_image')->store('book_covers', 'public');

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'cover_image' => $imagePath,
        ]);

        return redirect()->route('admin.books.index')->with('success', 'Buku berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit buku
    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    // Mengupdate data buku
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'cover_image' => 'nullable|image',
        ]);

        if ($request->hasFile('cover_image')) {
            $imagePath = $request->file('cover_image')->store('book_covers', 'public');
            $book->cover_image = $imagePath;
        }

        $book->title = $request->title;
        $book->author = $request->author;
        $book->save();

        return redirect()->route('admin.books.index')->with('success', 'Buku berhasil diperbarui');
    }

    // Menghapus buku
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books.index')->with('success', 'Buku berhasil dihapus');
    }

}
