<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Kasi
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
            return redirect()->route('login');
        }
        switch (Auth::user()->role) {
            case 1:
                return redirect()->route('admin.beranda');
                break;
            case 2:
                return $next($request);
                break;
            case 3:
                return redirect()->route('kasi-pju.beranda');
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
