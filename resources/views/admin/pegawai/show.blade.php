@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Pegawai</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links ml-auto">
                        <li><a href="#">Admin CS</a></li>
                        <li><a href="#">Pegawai</a></li>
                        <li><a href="#">Detail</a></li>
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
                        <div class="col-md">Data Diri</div>
                        <div class="col-md text-right">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <td width="20%">NIP / No.KTP</td>
                            <td width="2%">:</td>
                            <td>{{$data->biodata_diri->NIP}}</td>
                        </tr>
                        <tr>
                            <td width="20%">Nama</td>
                            <td width="2%">:</td>
                            <td>{{$data->nama}}</td>
                        </tr>
                        <tr>
                            <td width="20%">Tempat, Tanggal Lahir</td>
                            <td width="2%">:</td>
                            <td>{{$data->tempat_lahir}},
                                {{Carbon\carbon::parse($data->tanggal_lahir)->translatedFormat('d F Y')}}
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">Jenis Kelamin</td>
                            <td width="2%">:</td>
                            <td>
                                @if($data->jenis_kelamin == 1)
                                <p>Laki - laki</p>
                                @else
                                <p>Perempuan</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">Alamat</td>
                            <td width="2%">:</td>
                            <td>{{$data->biodata_diri->alamat}}</td>
                        </tr>
                        <tr>
                            <td width="20%">Pendidikan Terakhir</td>
                            <td width="2%">:</td>
                            <td>{{$data->pendidikan}}</td>
                        </tr>
                        <tr>
                            <td width="20%">Pangkat Golongans</td>
                            <td width="2%">:</td>
                            <td>{{$data->pangkat}}</td>
                        </tr>
                        <tr>
                            <td width="20%">No Hp</td>
                            <td width="2%">:</td>
                            <td>{{$data->no_hp}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection