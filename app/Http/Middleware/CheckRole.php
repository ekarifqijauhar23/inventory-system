<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Periksa apakah pengguna memiliki role yang diizinkan
        if (auth()->check() && auth()->user()->role === $role) {
            return $next($request);
        }

        // Redirect jika tidak sesuai role
        return redirect('/unauthorized'); // Atau halaman lain
    }
}