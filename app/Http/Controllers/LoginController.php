<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
{
    $data = [
        'email' => $request->input('email'),
        'password' => $request->input('password'),
    ];

    if (Auth::attempt($data)) {
        $request->session()->regenerate();
        
        // Periksa apakah pengguna adalah admin
        if (Auth::user()->role == 'admin') {
            // Arahkan ke dashboard admin
            return redirect()->route('admin.dashboard'); // Pastikan route ini ada di web.php
        }

        // Jika bukan admin, arahkan ke halaman umum (home)
        return redirect()->route('home');
    } else {
        Session::flash('error', 'Email atau Password Salah');
        return redirect()->route('login');
    }
}

    

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}