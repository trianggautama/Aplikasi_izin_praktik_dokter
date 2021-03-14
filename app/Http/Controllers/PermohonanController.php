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
        $data = Permohonan_SIP::where('biodata_diri_id', Auth::user()->biodata_diri->id)->where('status','!=',6)->latest()->get();

        return view('pemohon.permohonan.index', compact('data'));
    }

    public function admin_index()
    {
        switch (Auth::user()->role) {
            case 1:
                $data = Permohonan_SIP::where('status','!=',6)->latest()->get();
                return view('admin.permohonan.index', compact('data'));
                break;
            case 2:
                $data = Permohonan_SIP::where('status','>=','3')->where('status','!=',6)->latest()->get();
                return view('petugas.permohonan.index', compact('data'));
                break;
            case 3: 
                $data = Permohonan_SIP::where('status','>=','2')->where('status','!=',6)->latest()->get();
                return view('kasi_pju.permohonan.index',compact('data'));
                break;
            case 4:
                $data = Permohonan_SIP::where('status','>=','1')->where('status','!=',6)->latest()->get();
                return view('kabid.permohonan.index', compact('data'));
                break;
            case 5:
                $data = Permohonan_SIP::where('status','>=','4')->where('status','!=',6)->latest()->get();
                return view('sekretaris.permohonan.index',compact('data'));
                break;
            case 6:
                $data = Permohonan_SIP::where('status','>=','5')->where('status','!=',6)->latest()->get();
                return view('kadis.permohonan.index',compact('data'));
                break;
            case 7:
                $data = Permohonan_SIP::where('biodata_diri_id', Auth::user()->biodata_diri->id)->where('status','!=',6)->latest()->get();
                return view('pemohon.permohonan.index', compact('data'));
                break;
        }
    }

    public function riwayat()
    {
        $data = Permohonan_SIP::where('status',6)->latest()->get();

        switch (Auth::user()->role) {
            case 1:
                return view('admin.permohonan.riwayat', compact('data'));
                break;
            case 2:
                return view('petugas.permohonan.riwayat', compact('data'));
                break;
            case 3: 
                return view('kasi_pju.permohonan.riwayat',compact('data'));
                break;
            case 4:
                return view('kabid.permohonan.riwayat', compact('data'));
                break;
            case 5:
                return view('sekretaris.permohonan.riwayat',compact('data'));
                break;
            case 6:
                return view('kadis.permohonan.riwayat',compact('data'));
                break;
            case 7:
                $riwayat = Permohonan_SIP::where('biodata_diri_id', Auth::user()->biodata_diri->id)->where('status',6)->latest()->get();
                return view('pemohon.permohonan.riwayat', compact('riwayat'));
                break;
        }
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
        switch (Auth::user()->role) {
            case 1:
                return view('admin.permohonan.detail',compact('data'));
                break;
            case 2:
                return view('petugas.permohonan.detail',compact('data'));
                break;
            case 3:
                return view('kasi_pju.permohonan.detail',compact('data'));
                break;
            case 4:
                return view('kabid.permohonan.detail',compact('data'));
                break;
            case 5:
                return view('sekretaris.permohonan.detail',compact('data'));
                break;
            case 6:
                return view('kadis.permohonan.detail',compact('data'));
                break;
            case 7:
                return view('pemohon.permohonan.detail', compact('data'));
                break;
        }
    }

}
