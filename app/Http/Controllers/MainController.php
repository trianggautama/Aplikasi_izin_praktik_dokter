<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function adminBeranda()
    {
        dd(Auth::user());
        return view('admin.index');
    }

    public function pemohonBeranda()
    {
        return view('pemohon.index');
    }
}
