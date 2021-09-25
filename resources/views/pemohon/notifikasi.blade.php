@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Notifikasi</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links ml-auto">
                        <li><a href="#">Pemohon</a></li>
                        <li><a href="#">Notifikasi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            @foreach ($inbox as $d)


            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1 text-center"><i class="mdi mdi-bell"></i></div>
                        <div class="col-md">
                            <h5>
                                {{$d->title}}
                            </h5>
                            <p>Catatan : {{$d->catatan != NULL ? $d->catatan : '-'}}</p>
                        </div>
                        <div class="col-md-1">
                            @isset($d->permohonan__s_i_p_id)
                            <a href="{{route('pemohon.permohonan.detailNotifikasi',['id' => $d->permohonan__s_i_p_id, 'inbox_id' => $d->id])}}"
                                class="btn btn-sm btn-ic\ons btn-primary"><i
                                    class="mdi mdi-information-outline"></i></a>
                            @elseif(isset($d->permohonan_bidan_id))
                            <a href="{{route('pemohon.permohonan_bidan.detailNotifikasi',['id' => $d->permohonan_bidan_id, 'inbox_id' => $d->id])}}"
                                class="btn btn-sm btn-ic\ons btn-primary"><i
                                    class="mdi mdi-information-outline"></i></a>
                            @else
                            <a href="{{route('pemohon.permohonan_farmasi.detailNotifikasi',['id' => $d->permohonan_farmasi_id, 'inbox_id' => $d->id])}}"
                                class="btn btn-sm btn-ic\ons btn-primary"><i
                                    class="mdi mdi-information-outline"></i></a>
                            @endisset
                            <a href="{{route('notifikasi.destroy',$d->id)}}" class="btn btn-icons btn-danger"><i
                                    class="mdi mdi-delete"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection