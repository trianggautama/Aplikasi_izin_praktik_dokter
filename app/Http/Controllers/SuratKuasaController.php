<?php

namespace App\Http\Controllers;

use App\Models\Surat_kuasa;
use Illuminate\Http\Request;

class SuratKuasaController extends Controller
{
    public function store(Request $req)
    {
        $surat_kuasa = Surat_kuasa::create($req->only('permohonan__s_i_p_id'));

        $data = $surat_kuasa->surat_kuasa_praktek()->create($req->all());

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data = Surat_kuasa::findOrFail($id);

        return view('pemohon.surat-kuasa.edit', compact('data'));
    }

    public function update($id, Request $req)
    {
        $surat_kuasa = Surat_kuasa::findOrFail($id);

        $data = $surat_kuasa->surat_kuasa_praktek->fill($req->all())->save();

        return redirect()->route('pemohon.permohonan.detail', $surat_kuasa->permohonan__s_i_p_id);
    }
}
