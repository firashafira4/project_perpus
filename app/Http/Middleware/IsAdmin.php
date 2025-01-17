<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa role dari sesi (misalnya disimpan di session 'role')
        if ($request->session()->has('role') && $request->session()->get('role') === 'Admin') {
            return $next($request);
        }

        // Redirect jika bukan admin
        return redirect('/home')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
