@extends('layouts.admin')
@section('content') 
<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Pangkat Golongan</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links ml-auto">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Pangkat</a></li>
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
                        <div class="col-md">Data Pangkat Golongan</div>
                        <div class="col-md text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">+ tambah data</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Pangkat</th>
                                    <th>Pangkat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>II A</td>
                                    <td>Penata</td>
                                    <td class="text-center">
                                        <a href="{{Route('admin.pangkat.edit', 1)}}"
                                            class="btn btn-icons btn-rounded btn-warning"><i class="mdi mdi-pencil"></i></a>
                                        <a href="{{Route('admin.pangkat.index',1)}}" class="btn btn-icons btn-rounded btn-danger"><i
                                                class="mdi mdi-delete"></i></a>
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
                <form action="{{Route('admin.pangkat.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Kode Pangkat</label>
                        <input type="text" name="NIP" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Pangkat</label>
                        <input type="text" name="pangkat" class="form-control">
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
@endsection