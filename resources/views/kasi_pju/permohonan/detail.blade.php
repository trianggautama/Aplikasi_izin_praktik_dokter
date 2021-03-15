@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Permohonan</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                <ul class="quick-links ml-auto">
                    <li><a href="#">Kasi PJU</a></li>
                    <li><a href="#">Permohonan</a></li>
                    <li><a href="#">detail</a></li>
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
                            <div class="col-md">Data Diri</div>
                            <div class="col-md text-right">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <td width="20%">NIP</td>
                                <td width="2%">:</td> 
                                <td>{{$data->biodata_diri->NIP}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Nama</td>
                                <td width="2%">:</td>
                                <td>{{$data->biodata_diri->user->nama}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Tempat, Tanggal Lahir</td>
                                <td width="2%">:</td>
                                <td>{{$data->biodata_diri->tempat_lahir}}, {{Carbon\carbon::parse($data->biodata_diri->tanggal_lahir)->translatedFormat('d F Y')}}</td>
                            </tr>
                            <tr>
                                <td width="20%">Jenis Kelamin</td>
                                <td width="2%">:</td>
                                <td>
                                    @if($data->biodata_diri->jenis_kelamin == 1)
                                        <p>Laki - laki</p>
                                    @else
                                        <p>Perempuan</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td width="20%">Alamat</td>
                                <td width="2%">:</td>
                                <td>{{$data->biodata_diri->alamat}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div> 
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md">Detail Permohonan</div>
                            <div class="col-md text-right">
                                @if($data->status == 2)
                                    <a href="" class="btn btn-primary"><i class="mdi mdi-check"></i> Verifikasi Permohonan</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <td width="20%">Tahun Kelulusan</td>
                                <td width="2%">: {{carbon\carbon::parse($data->tahun_kelulusan)->translatedFormat('Y')}}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="20%">Nomor Str</td>
                                <td width="2%">: {{$data->nomor_str}}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="20%">Nomor Rekomendasi</td>
                                <td width="2%">: {{$data->nomor_rekomendasi}}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="20%">Tempat Praktik</td>
                                <td width="2%">: {{$data->tempat_praktik}}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="20%">Alamat Tujuan</td>
                                <td width="2%">: {{$data->alamat_tujuan}}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="20%">Tempat Ttd</td>
                                <td width="2%">: {{$data->tempat_ttd}}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="20%">Status Verifikasi</td>
                                <td width="2%">: 
                                @switch($data->status)
                                        @case(1)
                                        <span class="badge badge-success">Proses Pemeriksaan Berkas - Kabid</span>
                                        @break

                                        @case(2)
                                        <span class="badge badge-success">Proses Penerbitan SK - Kasi PJU</span>
                                        @break

                                        @case(3)
                                        <span class="badge badge-success">Proses Cetak SK - Petugas Proses</span>
                                        @break

                                        @case(4)
                                        <span class="badge badge-success">Proses Validasi SK - Sekretaris</span>
                                        @break

                                        @case(5)
                                        <span class="badge badge-success">Proses Penandatanganan SK - Kepala
                                            Dinas</span>
                                        @break

                                        @case(6)
                                        <span class="badge badge-success">Proses Penandatanganan SK - Selesai</span>
                                        @break

                                        @default
                                        <span class="badge badge-success">Proses Pemeriksaan Berkas - Admin CS</span>
                                        @endswitch
                                </td>
                                <td></td> 
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md">Lampiran</div>
                            <div class="col-md text-right">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lampiran</th>
                                    <th class="text-center">file</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Surat Rekomendasi Dinkes</td>
                                    <td class="text-center"><a href="{{asset('lampiran/'.$data->lampiran->surat_rekomendasi_dinkes)}}" class="btn btn-icons btn-rounded btn-primary" target="_blank"><i class="mdi mdi-cloud-download"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Surat Rekomendasi Organisasi</td>
                                    <td class="text-center"><a href="{{asset('lampiran/'.$data->lampiran->surat_rekomendasi_organisasi)}}" class="btn btn-icons btn-rounded btn-primary" target="_blank"><i class="mdi mdi-cloud-download"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Surat Persetujuan Pimpinan</td>
                                    <td class="text-center"><a href="{{asset('lampiran/'.$data->lampiran->surat_persetujuan_pimpinan)}}" class="btn btn-icons btn-rounded btn-primary" target="_blank"><i class="mdi mdi-cloud-download"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Izin Oprasional</td>
                                    <td class="text-center"><a href="{{asset('lampiran/'.$data->lampiran->izin_oprasional)}}" class="btn btn-icons btn-rounded btn-primary" target="_blank"><i class="mdi mdi-cloud-download"></i></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>NIB</td>
                                    <td class="text-center"><a href="{{asset('lampiran/'.$data->lampiran->NIB)}}" class="btn btn-icons btn-rounded btn-primary" target="_blank"><i class="mdi mdi-cloud-download"></i></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Ijazah</td>
                                    <td class="text-center"><a href="{{asset('lampiran/'.$data->lampiran->ijazah)}}" class="btn btn-icons btn-rounded btn-primary" target="_blank"><i class="mdi mdi-cloud-download"></i></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Str</td>
                                    <td class="text-center"><a href="{{asset('lampiran/'.$data->lampiran->str)}}" class="btn btn-icons btn-rounded btn-primary" target="_blank"><i class="mdi mdi-cloud-download"></i></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>KTP</td>
                                    <td class="text-center"><a href="{{asset('lampiran/'.$data->lampiran->ktp)}}" class="btn btn-icons btn-rounded btn-primary" target="_blank"><i class="mdi mdi-cloud-download"></i></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>NPWP</td>
                                    <td class="text-center"><a href="{{asset('lampiran/'.$data->lampiran->npwp)}}" class="btn btn-icons btn-rounded btn-primary" target="_blank"><i class="mdi mdi-cloud-download"></i></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Foto</td>
                                    <td class="text-center"><a href="{{asset('lampiran/'.$data->lampiran->foto)}}" class="btn btn-icons btn-rounded btn-primary" target="_blank"><i class="mdi mdi-cloud-download"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md">Surat Dukungan</div>
                            <div class="col-md text-right">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Surat Kuasa</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Surat Rekomendasi</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 