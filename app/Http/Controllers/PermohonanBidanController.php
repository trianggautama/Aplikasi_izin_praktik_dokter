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
        if(Auth::user()->role == 4){
            return view('kabid.permohonan_bidan.index');
        }elseif(Auth::user()->role == 2){
            return view('petugas.permohonan_bidan.index');
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
        if(Auth::user()->role == '7'){
            return view('pemohon.permohonan_bidan.detail');
        }elseif(Auth::user()->role == '2'){
            return view('petugas.permohonan_bidan.detail');
        }elseif(Auth::user()->role == '4'){
            return view('kabid.permohonan_bidan.detail');
        }
    }

    public function verifikasi($id)
    {

    }
}
