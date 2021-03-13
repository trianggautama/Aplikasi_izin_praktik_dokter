<?php

namespace App\Http\Controllers;

use App\Models\Lampiran;
use App\Models\Permohonan_SIP;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;

class PermohonanController extends Controller
{
    public function pemohon_index()
    {
        $data = Permohonan_SIP::where('biodata_diri_id', Auth::user()->biodata_diri->id)->latest()->get();

        return view('pemohon.permohonan.index', compact('data'));
    }

    public function admin_index()
    {
        $data = Permohonan_SIP::latest()->get();
        return view('admin.permohonan.index', compact('data'));
    }

    public function petugas_index()
    {
        $data = Permohonan_SIP::where('status','>=','3')->latest()->get();
        return view('kabid.permohonan.index', compact('data'));
    }

    public function kabid_index()
    {
        $data = Permohonan_SIP::where('status','>=','1')->latest()->get();
        return view('kabid.permohonan.index', compact('data'));
    }

    public function add()
    {

        return view('pemohon.permohonan.add');
    }

    public function store(Request $req)
    {
        $input = $req->all();

        $input['biodata_diri_id'] = Auth::user()->biodata_diri->id;

        $data = Permohonan_SIP::create($input);

        $lampiran = new Lampiran;
        $lampiran->permohonan__s_i_p_id = $data->id;

        if (isset($req->surat_rekomendasi_dinkes)) {
            $file = $req->file('surat_rekomendasi_dinkes');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_rekomendasi_dinkes = $file_name;
        }

        if (isset($req->surat_rekomendasi_organisasi)) {
            $file = $req->file('surat_rekomendasi_organisasi');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_rekomendasi_organisasi = $file_name;
        }

        if (isset($req->surat_persetujuan_pimpinan)) {
            $file = $req->file('surat_persetujuan_pimpinan');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_persetujuan_pimpinan = $file_name;
        }
        if (isset($req->izin_operasional)) {
            $file = $req->file('izin_operasional');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->izin_operasional = $file_name;
        }
        if (isset($req->NIB)) {
            $file = $req->file('NIB');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->NIB = $file_name;
        }
        if (isset($req->ijazah)) {
            $file = $req->file('ijazah');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->ijazah = $file_name;
        }
        if (isset($req->str)) {
            $file = $req->file('str');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->str = $file_name;
        }
        if (isset($req->npwp)) {
            $file = $req->file('npwp');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->npwp = $file_name;
        }

        if (isset($req->foto)) {
            $file = $req->file('foto');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->foto = $file_name;
        }

        $lampiran->save();

        return redirect()->route('pemohon.permohonan.index')->withSuccess('Data berhasil disimpan');

    }

    public function detail($id)
    {
        $data = Permohonan_SIP::findOrFail($id);
        return view('pemohon.permohonan.detail', compact('data'));
    }

    public function admin_detail($id)
    {
        $data = Permohonan_SIP::findOrFail($id);
        return view('admin.permohonan.detail',compact('data'));
    }
}
