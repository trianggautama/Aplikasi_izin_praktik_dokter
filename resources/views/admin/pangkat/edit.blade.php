@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Pangat Golongan</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links ml-auto">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Pangat Golongan</a></li>
                        <li><a href="#">edit</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Pangkat</label>
                            <input type="text" name="NIP" value="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Pangkat</label>
                            <input type="text" name="nama" value="" class="form-control">
                        </div>
                        <div class="text-right">
                            <a href="{{Route('admin.pangkat.index')}}" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection