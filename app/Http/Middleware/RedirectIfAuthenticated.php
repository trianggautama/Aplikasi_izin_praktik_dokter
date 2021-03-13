<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (Auth::guard($guard)->check()) {
            switch (Auth::user()->role) {
                case 1:
                    return redirect('/admin/beranda');
                    break;
                case 2:
                    return redirect('/kasi/beranda');
                    break;
                case 3:
                    return redirect('/kasi-pju/beranda');
                    break;
                case 4:
                    return redirect('/kabid/beranda');
                    break;
                case 5:
                    return redirect('/sekretaris/beranda');
                    break;
                case 6:
                    return redirect('/kepala-dinas/beranda');
                    break;
                case 7:
                    return redirect('/pemohon/beranda');
                    break;
            }
        }
        return $next($request);
    }
}
