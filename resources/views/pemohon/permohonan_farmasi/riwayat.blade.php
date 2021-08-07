@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Riwayat Pemohon Farmasi</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links ml-auto">
                        <li><a href="#">Pemohon</a></li>
                        <li><a href="#">Riwayat Permohonan Farmasi</a></li>
                        <li><a href="#">Data</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">Data Riwayat Permohonan</div>
                        <div class="col-md text-right">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Lulus</th>
                                    <th>Nomor STRTTK</th>
                                    <th>Nomor Rekomendasi</th>
                                    <th>Tempat Praktik</th>
                                    <th>Status Permohonan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($riwayat as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->created_at}}</td>
                                    <td>{{$d->biodata_diri->NIP}}</td>
                                    <td>{{$d->biodata_diri->user->nama}}</td>
                                    <td>{{$d->no_str}}</td>
                                    <td>{{$d->no_rekomendasi}}</td>
                                    <td>{{$d->tempat_praktik}}</td>
                                    <td>
                                        @switch($d->status)
                                        @case(1)
                                        <span class="badge badge-success">Proses Pemeriksaan Berkas - Kabid</span>
                                        @break

                                        @case(2)
                                        <span class="badge badge-success">Proses Penerbitan SK - Kasi PJU</span>
                                        @break

                                        @case(3)
                                        <span class="badge badge-success">Proses Cetak SK - Petugas Proses</span>
                                        @break

                                        @case(4)
                                        <span class="badge badge-success">Proses Validasi SK - Sekretaris</span>
                                        @break

                                        @case(5)
                                        <span class="badge badge-success">Proses Penandatanganan SK - Kepala
                                            Dinas</span>
                                        @break

                                        @case(6)
                                        <span class="badge badge-success">Proses Penandatanganan SK - Selesai</span>
                                        @break

                                        @default
                                        <span class="badge badge-success">Proses Pemeriksaan Berkas - Admin CS</span>
                                        @endswitch
                                    </td>
                                    <td class="text-center">
                                        <a href="{{Route('pemohon.permohonan_farmasi.detail', $d->id)}}"
                                            class="btn btn-icons btn-rounded btn-info"><i class="mdi mdi-file"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>\
                </div>
            </div>
        </div>
    </div>
</div>
@endsection