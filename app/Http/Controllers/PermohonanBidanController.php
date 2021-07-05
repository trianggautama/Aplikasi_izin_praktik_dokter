<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('petugas.permohonan_bidan.index');
    }

    public function riwayat()
    {
        return view('pemohon.permohonan_bidan.riwayat');
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
        return view('pemohon.permohonan_bidan.detail');
    }

    public function verifikasi($id)
    {

    }
}
