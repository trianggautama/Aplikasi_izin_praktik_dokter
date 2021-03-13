@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <h4 class="page-title">Permohonan Baru</h4>

                    <ul class="quick-links ml-auto">
                        <li><a href="#">Pemohon</a></li>
                        <li><a href="#">Permohonan</a></li>
                        <li><a href="#">tambah</a></li>
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
                    <form action="{{Route('pemohon.permohonan.store')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Tahun Kelulusan</label>
                            <input type="date" name="tahun_kelulusan" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Nomor Str</label>
                                    <input type="text" name="nomor_str" class="form-control">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Nomor Rekomendasi</label>
                                    <input type="text" name="nomor_rekomendasi" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Praktik</label>
                            <input type="text" name="tempat_praktik" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Praktik</label>
                            <textarea name="alamat_tujuan" id="" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Ttd</label>
                            <input type="text" name="tempat_ttd" class="form-control">
                        </div>
                        <br>
                        <h5>lampiran</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Surat Rekomendasi Dinkes</label>
                                    <input type="file" name="surat_rekomendasi_dinkes" class="form-control">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Surat Rekomendasi Organisasi</label>
                                    <input type="file" name="surat_rekomendasi_organisasi" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Surat Persetujuan Pimpinan</label>
                                    <input type="file" name="surat_persetujuan_pimpinan" class="form-control">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Izin Oprasional</label>
                                    <input type="file" name="izin_operasional" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">NIB</label>
                                    <input type="file" name="NIB" class="form-control">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Ijazah</label>
                                    <input type="file" name="ijazah" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Str</label>
                                    <input type="file" name="str" class="form-control">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">KTP</label>
                                    <input type="file" name="ktp" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">NPWP</label>
                                    <input type="file" name="npwp" class="form-control">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="{{Route('pemohon.permohonan.index')}}" class="btn btn-secondary"
                                data-dismiss="modal">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan Permohonan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection