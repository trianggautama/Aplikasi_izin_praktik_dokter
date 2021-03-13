<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function adminBeranda()
    {
        // Auth::logout();
        return view('admin.index');
    }

    public function pemohonBeranda()
    {
        return view('pemohon.index');
    }
}
