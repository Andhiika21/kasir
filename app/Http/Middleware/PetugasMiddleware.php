<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class DekanMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->can('petugas') || Auth::user()->can('admin'))) {
            return $next($request);
        }

        return redirect('/dashboard')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
