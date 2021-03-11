<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemohonController extends Controller
{
    public function index()
    {

        return view('admin.pemohon.index');
    }

    public function edit()
    {

        return view('admin.pemohon.edit');
    }
}
