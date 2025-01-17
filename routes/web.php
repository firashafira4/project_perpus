<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarBukuController;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\AdminController;

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

// REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('registeraction', [RegisterController::class, 'actionregister'])->name('actionregister');

//HOME
Route::get('home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('/daftar-buku', [DaftarBukuController::class, 'index'])->middleware('auth')->name('daftar-buku.index');
Route::get('/daftar-buku', [App\Http\Controllers\BookController::class, 'index'])->name('daftar-buku.index');
Route::get('/penyewaan', [PenyewaanController::class, 'index'])->name('penyewaan.index');
Route::post('/penyewaan', [PenyewaanController::class, 'store'])->name('penyewaan.store');
Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::resource('books', BookController::class);
});
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Tambahkan route lainnya untuk admin
});
// Route untuk halaman dashboard admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});


