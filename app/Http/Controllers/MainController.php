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

    public function kadisBeranda()
    {
        return view('kadis.index');
    }

    public function sekretarisBeranda()
    {
        return view('sekretaris.index');
    }

    public function kabidBeranda()
    {
        return view('kabid.index');
    }

    public function kasiPjuBeranda()
    {
        return view('kasi_pju.index');
    }

    public function PetugasProsesBeranda()
    {
        return view('petugas.index');
    }

}
