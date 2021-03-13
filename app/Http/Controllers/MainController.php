<?php

namespace App\Http\Controllers;

use App\Models\Permohonan_SIP;
use Carbon\Carbon;

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
        $data = Permohonan_SIP::where('status','1')->whereDate('created_at', Carbon::today())->get();
        return view('kabid.index',compact('data'));
    }

    public function kasiPjuBeranda()
    {
        return view('kasi_pju.index');
    }

    public function PetugasProsesBeranda()
    {
        $data = Permohonan_SIP::where('status','3')->whereDate('created_at', Carbon::today())->get();
        return view('petugas.index',compact('data')); 
    }

}
