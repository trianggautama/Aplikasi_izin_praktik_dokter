<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermohonanApotekerController extends Controller
{
    public function pemohon_index()
    {

        return view('pemohon.permohonan_apoteker.index');
    }

    public function filter()
    {
        return view('admin.permohonan_apoteker.filter');
    }

    public function admin_index()
    {
        return view('pemohon.permohonan_apoteker.index');
    }

    public function riwayat()
    {
        return view('pemohon.permohonan_apoteker.index');
    }

    public function add()
    {

        return view('pemohon.permohonan_apoteker.add');
    }

    public function edit()
    {

        return view('pemohon.permohonan_apoteker.edit');
    }

    public function store(Request $req)
    {
       
    }

    public function detail($id)
    {
        return view('pemohon.permohonan_apoteker.detail');
    }

    public function verifikasi($id)
    {

    }
}
