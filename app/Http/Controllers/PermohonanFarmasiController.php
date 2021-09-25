<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use App\Models\LampiranFarmasi;
use App\Models\PermohonanFarmasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermohonanFarmasiController extends Controller
{
    public function pemohon_index()
    {
        $biodataDiriId = Auth::user()->biodata_diri->id;

        $role = Auth::user()->role;

        $data = PermohonanFarmasi::whereBiodataDiriId($biodataDiriId)->get();

        return view('pemohon.permohonan_farmasi.index', compact('data'));
    }

    public function filter()
    {
        return view('admin.permohonan_farmasi.filter');
    }

    public function admin_index()
    {
        switch (Auth::user()->role) {
            case 1:
                $data = PermohonanFarmasi::where('status', '!=', 6)->latest()->get();
                return view('admin.permohonan_farmasi.index', compact('data'));
                break;
            case 2:
                $data = PermohonanFarmasi::where('status', '>=', '3')->where('status', '!=', 6)->latest()->get();
                return view('petugas.permohonan_farmasi.index', compact('data'));
                break;
            case 3:
                $data = PermohonanFarmasi::where('status', '>=', '2')->where('status', '!=', 6)->latest()->get();
                return view('kasi_pju.permohonan_farmasi.index', compact('data'));
                break;
            case 4:
                $data = PermohonanFarmasi::where('status', '>=', '1')->where('status', '!=', 6)->latest()->get();
                return view('kabid.permohonan_farmasi.index', compact('data'));
                break;
            case 5:
                $data = PermohonanFarmasi::where('status', '>=', '4')->where('status', '!=', 6)->latest()->get();
                return view('sekretaris.permohonan_farmasi.index', compact('data'));
                break;
            case 6:
                $data = PermohonanFarmasi::where('status', '>=', '5')->where('status', '!=', 6)->latest()->get();
                return view('kadis.permohonan_farmasi.index', compact('data'));
                break;
            case 7:
                $data = PermohonanFarmasi::where('biodata_diri_id', Auth::user()->biodata_diri->id)->where('status', '!=', 6)->latest()->get();
                return view('pemohon.permohonan_farmasi.index', compact('data'));
                break;
        }

    }

    public function riwayat()
    {
        $data = PermohonanFarmasi::where('status', 6)->latest()->get();

        switch (Auth::user()->role) {
            case 1:
                return view('admin.permohonan_farmasi.riwayat', compact('data'));
                break;
            case 2:
                return view('petugas.permohonan_farmasi.riwayat', compact('data'));
                break;
            case 3:
                return view('kasi_pju.permohonan_farmasi.riwayat', compact('data'));
                break;
            case 4:
                return view('kabid.permohonan_farmasi.riwayat', compact('data'));
                break;
            case 5:
                return view('sekretaris.permohonan_farmasi.riwayat', compact('data'));
                break;
            case 6:
                return view('kadis.permohonan_farmasi.riwayat', compact('data'));
                break;
            case 7:
                $riwayat = PermohonanFarmasi::where('biodata_diri_id', Auth::user()->biodata_diri->id)->where('status', 6)->latest()->get();
                return view('pemohon.permohonan_farmasi.riwayat', compact('riwayat'));
                break;
        }
    }

    public function add()
    {

        return view('pemohon.permohonan_farmasi.add');
    }

    public function edit($id)
    {
        $data = PermohonanFarmasi::findOrFail($id);
        return view('pemohon.permohonan_farmasi.edit', compact('data'));
    }

    public function store(Request $req)
    {
        $input = $req->all();

        $input['biodata_diri_id'] = Auth::user()->biodata_diri->id;

        $data = PermohonanFarmasi::create($input);

        $lampiran = new LampiranFarmasi;

        $lampiran->permohonan_farmasi_id = $data->id;

        if (isset($req->surat_rekomendasi_dinkes)) {
            $file = $req->file('surat_rekomendasi_dinkes');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_rekomendasi_dinkes = $file_name;
        }

        if (isset($req->surat_rekomendasi_pafi)) {
            $file = $req->file('surat_rekomendasi_pafi');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_rekomendasi_pafi = $file_name;
        }

        if (isset($req->str)) {
            $file = $req->file('str');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->str = $file_name;
        }
        if (isset($req->surat_izin_tempat_kerja)) {
            $file = $req->file('surat_izin_tempat_kerja');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_izin_tempat_kerja = $file_name;
        }
        if (isset($req->izin_operasional)) {
            $file = $req->file('izin_operasional');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->izin_operasional = $file_name;
        }
        if (isset($req->npwp)) {
            $file = $req->file('npwp');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->npwp = $file_name;
        }
        if (isset($req->foto)) {
            $file = $req->file('foto');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->foto = $file_name;
        }
        if (isset($req->surat_keterangan_sehat)) {
            $file = $req->file('surat_keterangan_sehat');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_keterangan_sehat = $file_name;
        }
        if (isset($req->ijazah)) {
            $file = $req->file('ijazah');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->ijazah = $file_name;
        }

        if (isset($req->surat_pernyataan_permohonan)) {
            $file = $req->file('surat_pernyataan_permohonan');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_pernyataan_permohonan = $file_name;
        }

        if (isset($req->surat_pernyataan_mengikuti_uud)) {
            $file = $req->file('surat_pernyataan_mengikuti_uud');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_pernyataan_mengikuti_uud = $file_name;
        }

        if (isset($req->nib)) {
            $file = $req->file('nib');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->nib = $file_name;
        }

        if (isset($req->ktp)) {
            $file = $req->file('ktp');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->ktp = $file_name;
        }

        $lampiran->save();

        return redirect()->route('pemohon.permohonan_farmasi.index')->withSuccess('Permohonan berhasil dikirim');

    }

    public function update(Request $req, $id)
    {
        $input = $req->all();

        $data = PermohonanFarmasi::findOrFail($id);

        $data->update($input);

        $lampiran = LampiranFarmasi::wherePermohonanFarmasiId($data->id)->first();

        $lampiran->permohonan_farmasi_id = $data->id;

        if (isset($req->surat_rekomendasi_dinkes)) {
            $file = $req->file('surat_rekomendasi_dinkes');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_rekomendasi_dinkes = $file_name;
        }

        if (isset($req->surat_rekomendasi_pafi)) {
            $file = $req->file('surat_rekomendasi_pafi');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_rekomendasi_pafi = $file_name;
        }

        if (isset($req->str)) {
            $file = $req->file('str');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->str = $file_name;
        }
        if (isset($req->surat_izin_tempat_kerja)) {
            $file = $req->file('surat_izin_tempat_kerja');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_izin_tempat_kerja = $file_name;
        }
        if (isset($req->izin_operasional)) {
            $file = $req->file('izin_operasional');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->izin_operasional = $file_name;
        }
        if (isset($req->npwp)) {
            $file = $req->file('npwp');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->npwp = $file_name;
        }
        if (isset($req->foto)) {
            $file = $req->file('foto');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->foto = $file_name;
        }
        if (isset($req->surat_keterangan_sehat)) {
            $file = $req->file('surat_keterangan_sehat');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_keterangan_sehat = $file_name;
        }
        if (isset($req->ijazah)) {
            $file = $req->file('ijazah');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->ijazah = $file_name;
        }

        if (isset($req->surat_pernyataan_permohonan)) {
            $file = $req->file('surat_pernyataan_permohonan');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_pernyataan_permohonan = $file_name;
        }

        if (isset($req->surat_pernyataan_mengikuti_uud)) {
            $file = $req->file('surat_pernyataan_mengikuti_uud');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->surat_pernyataan_mengikuti_uud = $file_name;
        }

        if (isset($req->nib)) {
            $file = $req->file('nib');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->nib = $file_name;
        }

        if (isset($req->ktp)) {
            $file = $req->file('ktp');

            $file_name = rand(100, 1000) . "_" . $file->getClientOriginalName();

            $file->move('lampiran', $file_name);
            $lampiran->ktp = $file_name;
        }

        $lampiran->update();

        return redirect()->route('pemohon.permohonan_farmasi.index')->withSuccess('Permohonan berhasil diubah');

    }

    public function detail($id, $inbox_id = null)
    {
        $data = PermohonanFarmasi::findOrFail($id);
        if ($inbox_id) {
            $inbox = Inbox::findOrFail($inbox_id);

            $inbox->is_read = 1;
            $inbox->update();
        }

        switch (Auth::user()->role) {
            case 1:
                return view('admin.permohonan_farmasi.detail', compact('data'));
                break;
            case 2:
                return view('petugas.permohonan_farmasi.detail', compact('data'));
                break;
            case 3:
                return view('kasi_pju.permohonan_farmasi.detail', compact('data'));
                break;
            case 4:
                return view('kabid.permohonan_farmasi.detail', compact('data'));
                break;
            case 5:
                return view('sekretaris.permohonan_farmasi.detail', compact('data'));
                break;
            case 6:
                return view('kadis.permohonan_farmasi.detail', compact('data'));
                break;
            case 7:
                return view('pemohon.permohonan_farmasi.detail', compact('data'));
                break;
        }

    }

    public function verifikasi($id, Request $req)
    {
        $data = PermohonanFarmasi::findOrFail($id);

        $now = Carbon::now();

        $inbox = new Inbox;
        $user = Auth::user();
        switch (Auth::user()->role) {
            case 1:
                if ($req->status_verif_admin == 1) {
                    $data->status = 1;
                    $data->status_verif_admin = $req->status_verif_admin;
                    $data->verif_admin = $now;
                    $inbox->catatan = $req->catatan;
                    $inbox->permohonan_farmasi_id = $id;
                    $inbox->biodata_diri_id = $data->biodata_diri_id;
                    $inbox->user_id = $user->id;
                    $inbox->status = $req->status_verif_admin;

                } else {
                    $data->status_verif_admin = $req->status_verif_admin;
                    $inbox->catatan = $req->catatan;
                    $inbox->permohonan_farmasi_id = $id;
                    $inbox->biodata_diri_id = $data->biodata_diri_id;
                    $inbox->user_id = $user->id;
                    $inbox->status = $req->status_verif_admin;
                }
                break;
            case 2:
                if ($req->status_verif_petugas_proses == 1) {
                    $data->status = 4;
                    $data->verif_petugas_proses = $now;
                    $data->status_verif_petugas_proses = $req->status_verif_petugas_proses;
                    $inbox->catatan = $req->catatan;
                    $inbox->permohonan_farmasi_id = $id;
                    $inbox->biodata_diri_id = $data->biodata_diri_id;
                    $inbox->user_id = $user->id;
                    $inbox->status = $req->status_verif_petugas_proses;

                } else {
                    $data->status_verif_petugas_proses = $req->status_verif_petugas_proses;
                    $inbox->catatan = $req->catatan;
                    $inbox->permohonan_farmasi_id = $id;
                    $inbox->biodata_diri_id = $data->biodata_diri_id;
                    $inbox->user_id = $user->id;
                    $inbox->status = $req->status_verif_petugas_proses;

                }

                break;
            case 3:
                if ($req->status_verif_kasi == 1) {
                    $data->status = 3;
                    $data->verif_kasi = $now;
                    $data->status_verif_kasi = $req->status_verif_kasi;
                    $inbox->catatan = $req->catatan;
                    $inbox->permohonan_farmasi_id = $id;
                    $inbox->biodata_diri_id = $data->biodata_diri_id;
                    $inbox->user_id = $user->id;
                    $inbox->status = $req->status_verif_kasi;
                } else {
                    $data->status_verif_kasi = $req->status_verif_kasi;
                    $inbox->catatan = $req->catatan;
                    $inbox->permohonan_farmasi_id = $id;
                    $inbox->biodata_diri_id = $data->biodata_diri_id;
                    $inbox->user_id = $user->id;
                    $inbox->status = $req->status_verif_kasi;

                }

                break;
            case 4:
                if ($req->status_verif_kabid == 1) {
                    $data->status = 2;
                    $data->verif_kabid = $now;
                    $data->status_verif_kabid = $req->status_verif_kabid;
                    $inbox->catatan = $req->catatan;
                    $inbox->permohonan_farmasi_id = $id;
                    $inbox->biodata_diri_id = $data->biodata_diri_id;
                    $inbox->user_id = $user->id;
                    $inbox->status = $req->status_verif_kabid;
                } else {
                    $data->status_verif_kabid = $req->status_verif_kabid;
                    $inbox->catatan = $req->catatan;
                    $inbox->permohonan_farmasi_id = $id;
                    $inbox->biodata_diri_id = $data->biodata_diri_id;
                    $inbox->user_id = $user->id;
                    $inbox->status = $req->status_verif_kabid;

                }

                break;
            case 5:
                if ($req->status_verif_sekretaris == 1) {
                    $data->status = 5;
                    $data->verif_sekretaris = $now;
                    $data->status_verif_sekretaris = $req->status_verif_sekretaris;
                    $inbox->catatan = $req->catatan;
                    $inbox->permohonan_farmasi_id = $id;
                    $inbox->biodata_diri_id = $data->biodata_diri_id;
                    $inbox->user_id = $user->id;
                    $inbox->status = $req->status_verif_sekretaris;

                } else {
                    $data->status_verif_sekretaris = $req->status_verif_sekretaris;
                    $inbox->catatan = $req->catatan;
                    $inbox->permohonan_farmasi_id = $id;
                    $inbox->biodata_diri_id = $data->biodata_diri_id;
                    $inbox->user_id = $user->id;
                    $inbox->status = $req->status_verif_sekretaris;

                }

                break;
            case 6:
                if ($req->status_verif_kepala_dinas == 1) {
                    $data->status = 6;
                    $data->verif_kepala_dinas = $now;
                    $data->status_verif_kepala_dinas = $req->status_verif_kepala_dinas;
                    $inbox->catatan = $req->catatan;
                    $inbox->permohonan_farmasi_id = $id;
                    $inbox->biodata_diri_id = $data->biodata_diri_id;
                    $inbox->user_id = $user->id;
                    $inbox->status = $req->status_verif_kepala_dinas;

                } else {
                    $data->status_verif_kepala_dinas = $req->status_verif_kepala_dinas;
                    $inbox->catatan = $req->catatan;
                    $inbox->permohonan_farmasi_id = $id;
                    $inbox->biodata_diri_id = $data->biodata_diri_id;
                    $inbox->user_id = $user->id;
                    $inbox->status = $req->status_verif_kepala_dinas;

                }

                break;
        }
        $inbox->save();

        $data->update();

        return back()->withSuccess('Permohonan berhasil diverifikasi');

    }
}
