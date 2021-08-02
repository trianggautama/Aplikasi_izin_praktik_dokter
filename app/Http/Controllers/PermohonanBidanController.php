<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermohonanBidanController extends Controller
{
    public function pemohon_index()
    {

        return view('pemohon.permohonan_bidan.index');
    }

    public function filter()
    {   
        return view('admin.permohonan_bidan.filter');
    }

    public function admin_index()
    {
        switch (Auth::user()->role) {
            case 1:
                $data = collect([]) ;
                return view('admin.permohonan_bidan.index', compact('data'));
                break;
            case 2:
                $data = collect([]) ;
                return view('petugas.permohonan_bidan.index', compact('data'));
                break;
            case 3:
                $data = collect([]) ;
                return view('kasi_pju.permohonan_bidan.index', compact('data'));
                break;
            case 4:
                $data = collect([]) ;
                return view('kabid.permohonan_bidan.index', compact('data'));
                break;
            case 5:
                $data = collect([]) ;
                return view('sekretaris.permohonan_bidan.index', compact('data'));
                break;
            case 6:
                $data = collect([]) ;
                return view('kadis.permohonan_bidan.index', compact('data'));
                break;
            case 7:
                $data = collect([]) ;
                return view('pemohon.permohonan_bidan.index', compact('data'));
                break;
        }

    }

    public function riwayat()
    {
        if(Auth::user()->role == '7'){
            return view('pemohon.permohonan_bidan.riwayat');
        }elseif(Auth::user()->role == '2'){
            return view('petugas.permohonan_bidan.riwayat');
        }elseif(Auth::user()->role == '4'){
            return view('kabid.permohonan_bidan.riwayat');
        }
    }

    public function add()
    {

        return view('pemohon.permohonan_bidan.add');
    }

    public function edit()
    {

        return view('pemohon.permohonan_bidan.edit');
    }

    public function store(Request $req)
    {
       
    }

    public function detail($id)
    {
        $data = collect([]);
        switch (Auth::user()->role) {
            case 1:
                return view('admin.permohonan_bidan.detail', compact('data'));
                break;
            case 2:
                return view('petugas.permohonan_bidan.detail', compact('data'));
                break;
            case 3:
                return view('kasi_pju.permohonan_bidan.detail', compact('data'));
                break;
            case 4:
                return view('kabid.permohonan_bidan.detail', compact('data'));
                break;
            case 5:
                return view('sekretaris.permohonan_bidan.detail', compact('data'));
                break;
            case 6:
                return view('kadis.permohonan_bidan.detail', compact('data'));
                break;
            case 7:
                return view('pemohon.permohonan_bidan.detail', compact('data'));
                break;
        }
    }

    public function verifikasi($id)
    {

    }
}
