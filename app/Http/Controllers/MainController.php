<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function adminBeranda()
    {
        return view('admin.index');
    }

    public function pemohonBeranda()
    {
        return view('pemohon.index');
    }
}
