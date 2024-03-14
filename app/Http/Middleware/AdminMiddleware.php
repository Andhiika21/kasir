<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->can('admin')) {
            return $next($request);
        }

        // Jika pengguna tidak memiliki izin 'admin', Anda dapat mengarahkannya ke halaman lain atau menampilkan pesan kesalahan.
        return redirect('/dashboard')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
