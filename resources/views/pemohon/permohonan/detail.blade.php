@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Permohonan</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                <ul class="quick-links ml-auto">
                    <li><a href="#">Pemohoan</a></li>
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
                            <div class="col-md">Detail Pelatihan</div>
                            <div class="col-md text-right">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <td width="20%">Tahun Kelulusan</td>
                                <td width="2%">:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="20%">Nomor Str</td>
                                <td width="2%">:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="20%">Nomor Rekomendasi</td>
                                <td width="2%">:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="20%">Tempat Praktik</td>
                                <td width="2%">:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="20%">Alamat Tujuan</td>
                                <td width="2%">:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="20%">Tempat Ttd</td>
                                <td width="2%">:</td>
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
                                    <td class="text-center"><button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Surat Rekomendasi Organisasi</td>
                                    <td class="text-center"><button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Surat Persetujuan Pimpinan</td>
                                    <td class="text-center"><button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Izin Oprasional</td>
                                    <td class="text-center"><button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>NIB</td>
                                    <td class="text-center"><button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Ijazah</td>
                                    <td class="text-center"><button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Str</td>
                                    <td class="text-center"><button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>KTP</td>
                                    <td class="text-center"><button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>NPWP</td>
                                    <td class="text-center"><button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Foto</td>
                                    <td class="text-center"><button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button></td>
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
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#surat_kuasa">+ tambah data</button>    
                                        <button type="button" class="btn btn-icons btn-rounded btn-primary"><i class="mdi mdi-cloud-download"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Surat Rekomendasi</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#surat_rekomendasi">+ tambah data</button>    
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

    <div class="modal fade" id="surat_kuasa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Surat Kuasa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf 
                    <div class="form-group">
                        <label for="">Tempat Praktik</label>
                        <input type="text" name="nip" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Jadwal Praktik</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="username" class="form-control">
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

    <div class="modal fade" id="surat_rekomendasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Rekomendasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf 
                    <div class="form-group">
                        <label for="">Nomor Telepons</label>
                        <input type="text" name="nip" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Jam praktik</label>
                        <input type="text" name="nama" class="form-control">
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