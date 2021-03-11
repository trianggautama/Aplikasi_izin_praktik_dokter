<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function pemohon_index()
    {

        return view('pemohon.permohonan.index');
    }

    public function add()
    {

        return view('pemohon.permohonan.add');
    }

    public function detail()
    {

        return view('pemohon.permohonan.detail');
    }
}
