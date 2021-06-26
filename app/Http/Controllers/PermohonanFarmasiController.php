<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('petugas.permohonan_farmasi.index');
    }

    public function riwayat()
    {
        return view('pemohon.permohonan_farmasi.riwayat');
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
        return view('pemohon.permohonan_farmasi.detail');
    }

    public function verifikasi($id)
    {

    }
}
