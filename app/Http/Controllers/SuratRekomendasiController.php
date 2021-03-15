<?php

namespace App\Http\Controllers;

use App\Models\Pemohonan_surat_rekomendasi;
use Illuminate\Http\Request;

class SuratRekomendasiController extends Controller
{
    public function store(Request $req)
    {
        $data = Pemohonan_surat_rekomendasi::create($req->all());

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data = Pemohonan_surat_rekomendasi::findOrFail($id);

        return view('pemohon.surat-rekomendasi.edit', compact('data'));
    }

    public function update($id, Request $req)
    {
        $surat_rekomendasi = Pemohonan_surat_rekomendasi::findOrFail($id);

        $surat_rekomendasi->fill($req->all())->save();

        return redirect()->route('pemohon.surat-rekomendasi.detail', $surat_rekomendasi->permohonan__s_i_p_id);
    }
}
