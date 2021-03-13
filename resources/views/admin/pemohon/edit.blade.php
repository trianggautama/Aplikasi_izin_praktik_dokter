@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Pemohon</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links ml-auto">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Pemohon</a></li>
                        <li><a href="#">edit</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card-body">
                <form action="" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input type="text" name="NIP" value="{{$data->biodata_diri->NIP}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" value="{{$data->nama}}" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" value="{{$data->biodata_diri->tempat_lahir}}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tenggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="{{$data->biodata_diri->tanggal_lahir}}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <label class="form-label">Jenis Kelamin</label> <br>
                    <div class="form-group row">
                        <div class="col-md">
                            <div class="form-radio">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin"
                                        id="membershipRadios1" value="1"
                                        {{$data->biodata_diri->jenis_kelamin == 1 ? 'checked' : ''}}> Laki - laki
                                </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-radio">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin"
                                        id="membershipRadios2" value="2"
                                        {{$data->biodata_diri->jenis_kelamin == 2 ? 'checked' : ''}}> Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" class="form-control">{{$data->biodata_diri->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" value="{{$data->username}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="text-right">
                        <a href="{{Route('admin.user.index')}}" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection