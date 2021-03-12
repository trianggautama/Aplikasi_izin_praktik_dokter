@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">User</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                <ul class="quick-links ml-auto">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">user</a></li>
                    <li><a href="#">data</a></li>
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
                        <div class="col-md">Data User</div>
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
                                    <th>tanggal Permohonan</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Nomor Str</th>
                                    <th>Nomor Rekomendasi</th>
                                    <th>Tempat Praktik</th>
                                    <th>Progress Permohonan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>4 Maret 2021</td>
                                    <td>5617325762537612536</td>
                                    <td>Pemohon 1</td>
                                    <td>1212/2121/2020</td>
                                    <td>81/X/2020</td>
                                    <td>Apotik A</td>
                                    <td><span class="badge badge-success">Kabid</span></td>
                                    <td class="text-center">
                                        <a  href="{{Route('admin.permohonan.detail', 'hcsdgkh')}}" class="btn btn-icons btn-rounded btn-info"><i class="mdi mdi-file"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection