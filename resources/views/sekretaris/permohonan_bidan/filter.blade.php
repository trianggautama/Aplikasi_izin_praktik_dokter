@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Admin</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links ml-auto">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Permohonan Bidan</a></li>
                        <li><a href="#">Filter Cetak</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('report.permohonan_bidan')}}" method="post" target="_blank">
                        @csrf
                        <div class="form-group">
                            <label for="">Proses Permohonan</label>
                            <select name="proses" id="" class="form-control" required>
                                <option value="9" >Semua Proses</option> 
                                <option value="0" >Proses Pemeriksaan Berkas - Admin CS</option>
                                <option value="1" >Proses Pemeriksaan Berkas - Kabid</option>
                                <option value="2" >Proses Penerbitan SK - Kasi PJU </option>
                                <option value="3" >Proses Cetak SK - Petugas Proses</option>
                                <option value="4" >Proses Validasi SK - Sekretaris</option>
                                <option value="5" >Proses Penandatanganan SK - Kepala Dinas</option>
                            </select>
                        </div>
                        <div class="text-right">
                            <a href="{{Route('admin.permohonan_bidan.index')}}" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                            <button type="submit" class="btn btn-primary">Cetak Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection