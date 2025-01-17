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
        $credentials = $request->only('email', 'password');
    
        // Validasi kredensial
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            // Redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'user') {
                return redirect()->route('home');
            }
        }
    
        // Jika login gagal
        return redirect()->back()->with('error', 'Email atau password salah.');
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}