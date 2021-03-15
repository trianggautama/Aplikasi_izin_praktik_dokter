<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Pemohon;
use App\Models\Permohonan_SIP;
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
}
