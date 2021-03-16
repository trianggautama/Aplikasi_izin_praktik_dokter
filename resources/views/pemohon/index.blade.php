@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Beranda</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                <ul class="quick-links ml-auto">
                    <li><a href="#">Pemohon</a></li>
                    <li><a href="#">Beranda</a></li>
                </ul>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                <h1>Selamat Datang {{Auth::user()->nama}}</h1>  
                <p>Selamat datang di aplikasi perizinan praktik dokter umum  DPMPTSP Kabupaten Banjar</p>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection