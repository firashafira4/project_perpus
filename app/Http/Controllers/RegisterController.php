<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class RegisterController extends Controller
{
    // Menampilkan form register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Memproses register
    public function register(Request $request)
    {
        // Validasi data input
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'username' => 'required|min:3|max:50',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:Admin,User',
        ]);

        // Simpan data ke database
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        // Simpan data pengguna ke session
        Session::put('user', $user);

        // Redirect sesuai role
        if ($user->role === 'Admin') {
            return redirect('/admin-dashboard')->with('success', 'Welcome Admin!');
        } else {
            return redirect('/user-dashboard')->with('success', 'Welcome User!');
        }
    }
}
