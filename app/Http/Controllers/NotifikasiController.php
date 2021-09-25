<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch (Auth::user()->role) {
            case 1:
                return view('admin.notifikasi');
                break;
            case 2:
                return view('petugas.notifikasi');
                break;
            case 3:
                return view('kasi_pju.notifikasi');
                break;
            case 4:
                return view('kabid.notifikasi');
                break;
            case 5:
                return view('sekretaris.notifikasi');
                break;
            case 6:
                return view('kadis.notifikasi');
                break;
            case 7:
                $inbox = Inbox::whereBiodataDiriId(Auth::user()->biodata_diri->id)->latest()->get();
                $inbox->map(function ($item) {
                    switch ($item->user->role) {
                        case 1:
                            $role = 'Admin';
                            break;
                        case 2:
                            $role = 'Petugas';
                            break;
                        case 3:
                            $role = 'Kasi';
                            break;
                        case 4:
                            $role = 'Kabid';
                            break;
                        case 5:
                            $role = 'Sekretaris';
                            break;
                        case 6:
                            $role = 'Kepala Dinas';
                            break;
                        default:
                            break;
                    }
                    if ($item->status == 1) {
                        $item['title'] = 'Permohonan anda diverifikasi oleh ' . $role;
                    } else if ($item->status == 2) {
                        $item['title'] = 'Permohonan anda dikembalikan atau diperbaiki oleh ' . $role;
                    } else {
                        $item['title'] = 'Permohonan anda sedang diperiksa oleh ' . $role;
                    }

                    return $item;
                });
                return view('pemohon.notifikasi', compact('inbox'));
                break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inbox = Inbox::FindOrFail($id)->delete();

        return back()->withSuccess('Notifikasi berhasil dihapus');
    }
}
