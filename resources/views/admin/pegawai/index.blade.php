@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Pegawai</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links ml-auto">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Pegawai</a></li>
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
                        <div class="col-md">Data User Pegawai</div>
                        <div class="col-md text-right">
                            <a class="btn btn-primary" href="{{Route('report.pegawai')}}" target="_blank"><i class="mdi mdi-printer"></i>cetak data user pegawai</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP/NIK</th>
                                    <th>Nama</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Pangkat / Golongan</th>
                                    <th>Pendidikan terakhir</th>
                                    <th>No Hp</th>
                                    <th>Jabatan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->biodata_diri->NIP}}</td>
                                    <td>{{$d->nama}}</td>
                                    <td>{{$d->biodata_diri->tempat_lahir}}, {{$d->biodata_diri->tanggal_lahir}}</td>
                                    <td>
                                        @if ($d->biodata_diri->jenis_kelamin == 1)
                                        Laki-laki
                                        @else
                                        Perempuan
                                        @endif
                                    </td>
                                    <td>{{$d->pangkat}}</td>
                                    <td>{{$d->pendidikan}}</td> 
                                    <td>-</td>
                                    <td>
                                        @if ($d->role == 1)
                                        Admin CS
                                        @elseif ($d->role == 2)
                                        Petugas Proses
                                        @elseif ($d->role == 3)
                                        Kasi PJU
                                        @elseif ($d->role == 4)
                                        Kabid
                                        @elseif ($d->role == 5)
                                        Sekretaris
                                        @else
                                        Kepala Dinas
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{Route('admin.pegawai.show', $d->id)}}"
                                            class="btn btn-icons btn-rounded btn-info"><i class="mdi mdi-account-details"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(".delete").click(function(){
            let data = $(this).data("id");
            $('.btn-del').attr("href", data);
            $('#delForm').modal('show');
        });
</script>
@endsection