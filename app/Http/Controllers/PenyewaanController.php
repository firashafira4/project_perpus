<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; // Model Buku
use App\Models\Peminjaman; // Model Peminjaman

class PenyewaanController extends Controller
{
    public function index()
    {
        // Ambil data buku dari database
        $books = Book::all();
        return view('penyewaan.index', compact('books'));
    }

    public function store(Request $request)
    {
        // Validasi data biodata dan buku
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'buku_id' => 'required|exists:books,id',
        ]);

        // Simpan data peminjaman
        Peminjaman::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'buku_id' => $validated['buku_id'],
        ]);

        return redirect()->route('penyewaan.index')->with('success', 'Peminjaman berhasil!');
    }
}
