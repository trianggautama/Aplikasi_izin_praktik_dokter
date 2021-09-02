@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Notifikasi</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                <ul class="quick-links ml-auto">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">Notifikasi</a></li>
                </ul> 
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1 text-center"><i class="mdi mdi-bell"></i></div>
                        <div class="col-md">
                            <h5>Pemberitahuan Baru</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui eaque odit beatae aspernatur dolores ad fuga vero quasi dignissimos error minus earum</p>
                        </div>
                        <div class="col-md-1">
                        <a href="#"class="btn btn-sm btn-icons btn-primary"><i  class="mdi mdi-information-outline"></i></a>
                        <a href="#"class="btn btn-icons btn-danger"><i  class="mdi mdi-delete"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection