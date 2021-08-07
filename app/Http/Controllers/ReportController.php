<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Pemohon;
use App\Models\Pemohonan_surat_rekomendasi;
use App\Models\Permohonan_SIP;
use App\Models\PermohonanBidan;
use App\Models\PermohonanFarmasi;
use App\Models\Surat_kuasa;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function riwayat_permohonan()
    {
        $data = Permohonan_SIP::where('status',6)->latest()->get();

        $pdf =PDF::loadView('report.riwayat_permohonan', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan Riwayat Permohonan.pdf');
    }

    public function pemohon()
    {
        $data = User::where('role',7)->latest()->get();

        $pdf =PDF::loadView('report.pemohon', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan Pemohon.pdf');
    }

    public function user()
    {
        $data = User::where('role','!=',7)->latest()->get();

        $pdf =PDF::loadView('report.user', ['data'=>$data]);
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('Laporan user.pdf');
    }
    
    public function pegawai()
    {
        $data = User::where('role','!=',7)->latest()->get();

        $pdf =PDF::loadView('report.pegawai', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan Pegawai.pdf');
    }

    public function permohonan(Request $req)
    {
        if($req-> proses== 9){
            $data = Permohonan_SIP::whereNotIn('status',[6])->latest()->get();
        }else{
            $data = Permohonan_SIP::where('status',$req->proses)->latest()->get();
        }

        $pdf =PDF::loadView('report.permohonan', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan permohonan.pdf');
    }

    public function sip($id)
    {
        $data = Permohonan_SIP::findOrFail($id);

        $pdf =PDF::loadView('report.sip', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Surat Izin Praktik.pdf');
    }

    public function surat_rekomendasi($id)
    {
        $data = Pemohonan_surat_rekomendasi::findOrFail($id);
        $pdf =PDF::loadView('report.surat_rekomendasi', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Surat Rekomendasi.pdf');
    }

    public function tanda_terima($id)
    {
        $data   = Permohonan_SIP::findOrFail($id);
        $pdf    = PDF::loadView('report.tanda_terima', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Tanda Terima.pdf');
    }

    public function riwayat_dokumen($id)
    {
        $data           = Permohonan_SIP::findOrFail($id);
        $kabid          = User::whereRole(4)->first();
        $kasi           = User::whereRole(3)->first();
        $petugas        = User::whereRole(2)->first();
        $sekretaris     = User::whereRole(5)->first();
        $kadis          = User::whereRole(6)->first();


        $pdf    = PDF::loadView('report.riwayat_dokumen', ['data'=>$data,'kabid'=>$kabid,'kasi'=>$kasi,'petugas'=>$petugas,'sekretaris'=>$sekretaris,'kadis'=>$kadis]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan Riwayat Dokumen.pdf');
    }

    public function surat_izin($id)
    {
        $data           = Permohonan_SIP::findOrFail($id);
        $kadis          = User::whereRole(6)->first();


        $pdf    = PDF::loadView('report.surat_izin', ['data'=>$data,'kadis'=>$kadis]);
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('Laporan Surat Izin.pdf');
    }

    public function permohonan_farmasi(Request $req)
    {
        if($req-> proses== 9){
            $data = PermohonanFarmasi::whereNotIn('status',[6])->latest()->get();
        }else{
            $data = PermohonanFarmasi::where('status',$req->proses)->latest()->get();
        }

        $pdf =PDF::loadView('report.permohonan_farmasi', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan permohonan Farmasi.pdf');
    }

    public function riwayat_permohonan_farmasi(Request $req)
    {
            $data = PermohonanFarmasi::where('status',6)->latest()->get();
      

        $pdf =PDF::loadView('report.riwayat_permohonan_farmasi', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan permohonan Farmasi.pdf');
    }

    public function tanda_terima_farmasi($id)
    {
        $data   = PermohonanFarmasi::findOrFail($id);
        $pdf    = PDF::loadView('report.tanda_terima_farmasi', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Tanda Terima Farmasi.pdf');
    }

    public function riwayat_dokumen_farmasi($id)
    {
        $data           = PermohonanFarmasi::findOrFail($id);
        $kabid          = User::whereRole(4)->first();
        $kasi           = User::whereRole(3)->first();
        $petugas        = User::whereRole(2)->first();
        $sekretaris     = User::whereRole(5)->first();
        $kadis          = User::whereRole(6)->first();


        $pdf    = PDF::loadView('report.riwayat_dokumen_farmasi', ['data'=>$data,'kabid'=>$kabid,'kasi'=>$kasi,'petugas'=>$petugas,'sekretaris'=>$sekretaris,'kadis'=>$kadis]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan Riwayat Dokumen.pdf');
    }

    public function surat_izin_farmasi($id)
    {
        $data           = PermohonanFarmasi::findOrFail($id);
        $kadis          = User::whereRole(6)->first();


        $pdf    = PDF::loadView('report.surat_izin_farmasi', ['data'=>$data,'kadis'=>$kadis]);
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('Laporan Surat Izin.pdf');
    }

    //report bidan 
    public function permohonan_bidan(Request $req)
    {
        if($req-> proses== 9){
            $data = PermohonanBidan::whereNotIn('status',[6])->latest()->get();
        }else{
            $data = PermohonanBidan::where('status',$req->proses)->latest()->get();
        }

        $pdf =PDF::loadView('report.permohonan_bidan', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan permohonan Farmasi.pdf');
    }

    public function riwayat_permohonan_bidan()
    {
            $data = PermohonanBidan::where('status',6)->latest()->get();

        $pdf =PDF::loadView('report.riwayat_permohonan_bidan', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan riwayat permohonan Farmasi.pdf');
    }

    public function tanda_terima_bidan($id)
    {
        $data   = PermohonanBidan::findOrFail($id);
        $pdf    = PDF::loadView('report.tanda_terima_bidan', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('Laporan Tanda Terima Bidan .pdf');
    }

    public function riwayat_dokumen_bidan($id)
    {
        $data           = PermohonanBidan::findOrFail($id);
        $kabid          = User::whereRole(4)->first();
        $kasi           = User::whereRole(3)->first();
        $petugas        = User::whereRole(2)->first();
        $sekretaris     = User::whereRole(5)->first();
        $kadis          = User::whereRole(6)->first();


        $pdf    = PDF::loadView('report.riwayat_dokumen_bidan', ['data'=>$data,'kabid'=>$kabid,'kasi'=>$kasi,'petugas'=>$petugas,'sekretaris'=>$sekretaris,'kadis'=>$kadis]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan Riwayat Dokumen.pdf');
    }

    public function surat_izin_bidan($id)
    {
        $data           = PermohonanBidan::findOrFail($id);
        $kadis          = User::whereRole(6)->first();


        $pdf    = PDF::loadView('report.surat_izin_bidan', ['data'=>$data,'kadis'=>$kadis]);
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('Laporan Surat Izin.pdf');
    }
}
