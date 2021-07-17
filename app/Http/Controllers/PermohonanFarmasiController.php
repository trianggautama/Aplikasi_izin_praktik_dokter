<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermohonanFarmasiController extends Controller
{
    public function pemohon_index()
    {

        return view('pemohon.permohonan_farmasi.index');
    }

    public function filter()
    { 
        return view('admin.permohonan_farmasi.filter');
    }

    public function admin_index()
    {
        if(Auth::user()->role == 4){
            return view('kabid.permohonan_farmasi.index');
        }elseif(Auth::user()->role == 2){
            return view('petugas.permohonan_farmasi.index');
        }

    }

    public function riwayat()
    {
        if(Auth::user()->role == 7){
            return view('pemohon.permohonan_farmasi.riwayat');
        }elseif(Auth::user()->role == 2){
            return view('petugas.permohonan_farmasi.riwayat');
        }
        elseif(Auth::user()->role == 4){
            return view('kabid.permohonan_farmasi.riwayat');
        }
    }

    public function add()
    {

        return view('pemohon.permohonan_farmasi.add');
    }

    public function edit()
    {

        return view('pemohon.permohonan_farmasi.edit');
    }

    public function store(Request $req)
    {
       
    }

    public function detail($id)
    {
        if(Auth::user()->role == 7){
            return view('pemohon.permohonan_farmasi.detail');
        }elseif(Auth::user()->role == 2){
            return view('petugas.permohonan_farmasi.detail');
        }elseif(Auth::user()->role == 4){
            return view('kabid.permohonan_farmasi.detail');
        }
    }

    public function verifikasi($id)
    {

    }
}
