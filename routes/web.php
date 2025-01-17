<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarBukuController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// LOGIN
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Menampilkan form register
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');

// Memproses register
Route::post('/register', [RegisterController::class, 'register'])->name('actionregister');

// Halaman dashboard Admin
Route::get('/admin-dashboard', function () {
    if (!Session::has('user') || Session::get('user')->role !== 'Admin') {
        return redirect('/register')->with('error', 'Anda tidak memiliki akses.');
    }

    $user = Session::get('user');
    return view('dashboard.admin', ['user' => $user]);
})->name('admin-dashboard');

// Halaman dashboard User
Route::get('/user-dashboard', function () {
    if (!Session::has('user') || Session::get('user')->role !== 'User') {
        return redirect('/register')->with('error', 'Anda tidak memiliki akses.');
    }

    $user = Session::get('user');
    return view('dashboard.user', ['user' => $user]);
})->name('user-dashboard');

// Logout
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/register')->with('success', 'Logout berhasil!');
})->name('logout');

//HOME
Route::get('home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('/daftar-buku', [DaftarBukuController::class, 'index'])->middleware('auth')->name('daftar-buku.index');
Route::get('/daftar-buku', [App\Http\Controllers\BookController::class, 'index'])->name('daftar-buku.index');
Route::get('/penyewaan', [PenyewaanController::class, 'index'])->name('penyewaan.index');
Route::post('/penyewaan', [PenyewaanController::class, 'store'])->name('penyewaan.store');
// Rute untuk Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth', 'isAdmin');

// Rute untuk User
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');


