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
                                <tr>
                                    <td>1</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>
                                      -
                                    </td>
                                    <td class="text-center">
                                        <a href="{{Route('pemohon.permohonan_farmasi.detail', '1')}}"
                                            class="btn btn-icons btn-rounded btn-info"><i class="mdi mdi-information-outline"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>\
                </div>
            </div>
        </div>
    </div>
</div>
@endsection