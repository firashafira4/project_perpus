<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class DaftarBukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('daftar-buku.index', compact('buku'));
    }
}
