@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Permohonan Farmasi</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links ml-auto">
                        <li><a href="#">Petugas</a></li>
                        <li><a href="#">Permohonan Farmasi</a></li>
                        <li><a href="#">Detail</a></li>
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
                            <a href="{{Route('petugas_proses.permohonan.verifikasi',1)}}"
                                class="btn btn-primary"><i class="mdi mdi-check"></i>
                                Verifikasi Permohonan</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <td width="20%">Tahun Kelulusan</td>
                            <td width="2%">: -
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="20%">Nomor STRTTK</td>
                            <td width="2%">: -</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="20%">Nomor Rekomendasi</td>
                            <td width="2%">: -</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="20%">Tempat Praktik</td>
                            <td width="2%">: </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="20%">Alamat Tujuan</td>
                            <td width="2%">: </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="20%">Tempat Ttd</td>
                            <td width="2%">: </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="20%">Status Verifikasi</td>
                            <td width="2%">: </td>
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
                                <td>Surat Rekomendasi (Dinkes)</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Surat Keterangan Kesehatan</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Surat Rekomendasi (PAFI)</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ijazah (legalisir)</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Surat Tanda Registrasi Tenaga Teknis Kefarmasian (STRTTK)</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Surat Pernyataan Permohonan</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Surat izin tempat kerja</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Surat Pernyataan Mengikuti Peraturan Perundang undangan (TTK)</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Izin Oprasional Komersial</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>NIB</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>KTP</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>NPWP</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr> 
                            <tr>
                                <td>13</td>
                                <td>Foto</td>
                                <td class="text-center">
                                    <a target="_blank" href="#" class="btn btn-icons btn-rounded btn-primary"><i  class="mdi mdi-cloud-download"></i></a>
                                </td>
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
                                <td>Surat Permohonan Rekomendasi</td>
                                <td class="text-center">
                                    <a href="#"
                                        class="btn btn-icons btn-rounded btn-primary" target="_blank"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="surat_rekomendasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Rekomendasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('pemohon.surat-rekomendasi.store')}}" method="post">
                    @csrf
                    <input type="hidden" value="" name="permohonan__s_i_p_id">
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jam praktik</label>
                        <input type="text" name="jam_praktik" class="form-control" required>
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