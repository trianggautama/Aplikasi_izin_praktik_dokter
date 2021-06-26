@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <h4 class="page-title">Permohonan Farmasi Baru</h4>

                    <ul class="quick-links ml-auto">
                        <li><a href="#">Pemohon</a></li>
                        <li><a href="#">Permohonan Farmasi</a></li>
                        <li><a href="#">edit</a></li>
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
                        <div class="col-md">Inputan</div>
                        <div class="col-md text-right">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{Route('pemohon.permohonan.store')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Tahun Kelulusan</label>
                            <input type="date" name="tahun_kelulusan" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Nomor STRTTK</label>
                                    <input type="text" name="nomor_str" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Nomor Rekomendasi (Dinkes)</label>
                                    <input type="text" name="nomor_rekomendasi" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Praktik</label>
                            <input type="text" name="tempat_praktik" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Praktik</label>
                            <textarea name="alamat_tujuan" id="" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Praktik Ke -</label>
                            <input type="number" name="no_hp" class="form-control" required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="">Tempat Ttd</label>
                            <input type="text" name="tempat_ttd" class="form-control" required>
                        </div> -->
                        <br>
                        <h5>lampiran</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Surat Rekomendasi     </label>
                                    <input type="file" name="surat_rekomendasi_dinkes" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Surat Keterangan Kesehatan</label>
                                    <input type="file" name="surat_rekomendasi_organisasi" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Surat Rekomendasi (PAFI)</label>
                                    <input type="file" name="surat_persetujuan_pimpinan" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Ijazah (legalisir)</label>
                                    <input type="file" name="izin_operasional" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Surat Tanda Registrasi Tenaga Teknis Kefarmasian (STRTTK)</label>
                                    <input type="file" name="-" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Surat Pernyataan Permohonan</label>
                                    <input type="file" name="ijazah" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Surat izin tempat kerja</label>
                                    <input type="file" name="-" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">  Surat Pernyataan Mengikuti Peraturan Perundang undangan (TTK)</label>
                                    <input type="file" name="ijazah" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Izin Oprasional Komersial</label>
                                    <input type="file" name="-" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">NIB</label>
                                    <input type="file" name="ijazah" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">NPWP</label>
                                    <input type="file" name="npwp" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">KTP</label>
                                    <input type="file" name="ktp" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" name="foto" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="{{Route('pemohon.permohonan_farmasi.index')}}" class="btn btn-secondary"
                                data-dismiss="modal">Batal</a>
                            <button type="submit" class="btn btn-primary">Ubah Permohonan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection