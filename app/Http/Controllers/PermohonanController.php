<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function pemohon_index()
    {

        return view('pemohon.permohonan.index');
    }

    public function admin_index()
    {

        return view('admin.permohonan.index');
    }

    public function add()
    {

        return view('pemohon.permohonan.add');
    }

    public function detail()
    {

        return view('pemohon.permohonan.detail');
    }

    public function admin_detail()
    {

        return view('admin.permohonan.detail');
    }
}
