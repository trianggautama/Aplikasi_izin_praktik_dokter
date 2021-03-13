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
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">+ tambah data</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP/NIK</th>
                                <th>Nama</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Status User</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->biodata_diri->NIP}}</td>
                                <td>{{$d->nama}}</td>
                                <td>
                                    @if ($d->biodata_diri->jenis_kelamin == 1)
                                    Laki-laki
                                    @else
                                    Perempuan
                                    @endif
                                </td>
                                <td>{{$d->biodata_diri->tempat_lahir}}, {{$d->biodata_diri->tanggal_lahir}}</td>
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
                                    <a href="{{Route('admin.user.edit', $d->id)}}"
                                        class="btn btn-icons btn-rounded btn-warning"><i class="mdi mdi-pencil"></i></a>
                                    <a href="{{Route('admin.user.delete',['id'=>$d->id])}}"
                                        class="btn btn-icons btn-rounded btn-danger delete"><i
                                            class="mdi mdi-delete"></i></a>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('admin.user.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">NIP/NIK</label>
                        <input type="text" name="NIP" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tenggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </div>
                        </div>
                    </div>
                    <label class="form-label">Jenis Kelamin</label> <br>
                    <div class="form-group row">
                        <div class="col-md">
                            <div class="form-radio">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin"
                                        id="membershipRadios1" value="1" checked> Laki - laki </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-radio">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin"
                                        id="membershipRadios2" value="2"> Perempuan </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">User Role</label>
                        <select name="role" id="" class="form-control">
                            <option value="1">Admin CS</option>
                            <option value="2">Kasi </option>
                            <option value="3">Kasi PJU</option>
                            <option value="4">Kabid</option>
                            <option value="5">Sekertaris</option>
                            <option value="6">Kepala Dinas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@include('layouts.modal_hapus')
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