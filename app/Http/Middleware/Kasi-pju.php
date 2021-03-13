<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pju
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('auth.login');
        }
        switch (Auth::user()->role) {
            case 1:
                return redirect()->route('admin.beranda');
                break;
            case 2:
                return redirect()->route('kasi.beranda');
                break;
            case 3:
                return $next($request);
                break;
            case 4:
                return redirect()->route('kabid.beranda');
                break;
            case 5:
                return redirect()->route('sekretaris.beranda');
                break;
            case 6:
                return redirect()->route('kepala-dinas.beranda');
                break;
            case 7:
                return redirect()->route('pemohon.beranda');
                break;
        }

    }
}
