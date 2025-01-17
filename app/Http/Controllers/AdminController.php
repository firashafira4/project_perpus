<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Di sini, Anda bisa menambahkan data yang ingin ditampilkan pada dashboard admin
        return view('admin.dashboard');  // Pastikan ada view admin/dashboard.blade.php
    }
}
