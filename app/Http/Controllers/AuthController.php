<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {

        return view('auth.login');
    }

    public function register()
    {

        return view('auth.register');
    }

    public function store_register(Request $req)
    {
        $data = User::create($req->all());

        $biodata = $data->biodata_diri()->create($req->all());

        Auth::login($data);

        return redirect()->route('pemohon.beranda')->withSuccess('Data berhasil disimpan');
    }

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect()->route('auth.login')->with('success','Anda berhasil logout');
    }
}
