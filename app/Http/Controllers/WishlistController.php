<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    // Method untuk menampilkan daftar wishlist
    public function index()
    {
        // Ambil semua data wishlist
        $wishlist = Wishlist::all(); 

        // Kembalikan tampilan dengan data wishlist
        return view('wishlist.index', compact('wishlist'));
    }

    // Method untuk menambahkan buku ke wishlist
    public function add(Request $request)
    {
        // Validasi input buku
        $validated = $request->validate([
            'book_title' => 'required|string|max:255',
            'book_author' => 'required|string|max:255',
            'book_id' => 'exists:books,id',
        ]);

        // Pastikan Anda menyertakan book_id saat menambahkan buku ke wishlist
    $wishlist = Wishlist::create([
        'book_title' => $request->book_title,
        'book_author' => $request->book_author,
        'book_id' => $request->book_id, // Pastikan book_id ada dalam form atau request
    ]);

    if ($request->ajax()) {
        return response()->json([
            'success' => true,
            'wishlist' => $wishlist,
        ]);
    }

    return redirect()->route('wishlist.index')->with('success', 'Buku berhasil ditambahkan ke wishlist');
}

    // Method untuk menghapus buku dari wishlist
    public function destroy($id)
    {
        // Cari dan hapus data wishlist berdasarkan ID
        Wishlist::findOrFail($id)->delete();

        // Jika permintaan AJAX, kembalikan respons JSON
        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Buku berhasil dihapus',
            ]);
        }

        return redirect()->route('wishlist.index')->with('success', 'Buku berhasil dihapus');
    }
}
