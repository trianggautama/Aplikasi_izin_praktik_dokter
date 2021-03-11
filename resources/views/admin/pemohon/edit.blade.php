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
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">Edit User</div>
                        <div class="col-md text-right">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf 
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" name="nip" class="form-control">
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
                                    <input type="date" name="tgl_lahir" class="form-control">
                                </div>
                            </div>
                        </div>
                        <label class="form-label">Jenis Kelamin</label> <br>
                        <div class="form-group row">
                            <div class="col-md">
                                <div class="form-radio">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="1" checked> Laki - laki </label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-radio">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="2"> Perempuan </label>
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
                        <div class="text-right">
                            <a href="{{Route('admin.user.index')}}" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection