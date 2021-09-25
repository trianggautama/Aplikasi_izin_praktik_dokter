@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Permohonan Bidan</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links ml-auto">
                        <li><a href="#">Kabid</a></li>
                        <li><a href="#">Permohonan Bidan</a></li>
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
                        <div class="col-md">Data Diri</div>
                        <div class="col-md text-right">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="">
                        <tr>
                            <td width="20%">NIP/KTP</td>
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
                            <td>{{$data->biodata_diri->tempat_lahir}},
                                {{carbon\carbon::parse($data->biodata_diri->tanggal_lahir)->translatedFormat('d F Y')}}
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">Jenis Kelamin</td>
                            <td width="2%">:</td>
                            <td>{{$data->biodata_diri->jenis_kelamin}}</td>
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
                        <div class="col-md-4">Detail Permohonan</div>
                        <div class="col-md text-right">
                            @if($data->status == 3)
                            <!-- <a href="{{Route('petugas_proses.permohonan_bidan.verifikasi',$data->id)}}"
                                class="btn btn-primary"><i class="mdi mdi-check"></i>
                                Verifikasi Permohonan</a> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal"><i class="mdi mdi-check"></i> verifikasi permohonan</button>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <td width="20%">Tahun Kelulusan</td>
                            <td width="2%">:
                            </td>
                            <td>{{$data->tahun_kelulusan}}</td>
                        </tr>
                        <tr>
                            <td width="20%">Nomor STRB</td>
                            <td width="2%">:</td>
                            <td>{{$data->no_str}}</td>
                        </tr>
                        <tr>
                            <td width="20%">Nomor Rekomendasi</td>
                            <td width="2%">:</td>
                            <td>{{$data->no_rekomendasi}}</td>
                        </tr>
                        <tr>
                            <td width="20%">Tempat Praktik</td>
                            <td width="2%">: </td>
                            <td>{{$data->tempat_praktik}}</td>
                        </tr>
                        <tr>
                            <td width="20%">Alamat Tujuan</td>
                            <td width="2%">: </td>
                            <td>{{$data->alamat_praktik}}</td>
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
                                <td class="text-center">
                                    <a target="_blank"
                                        href="{{asset('lampiran/'.$data->lampiran_bidan->surat_rekomendasi_dinkes)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Surat Keterangan Bekerja (SK)</td>
                                <td class="text-center">
                                    <a target="_blank"
                                        href="{{asset('lampiran/'.$data->lampiran_bidan->surat_keterangan_bekerja)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Surat Pernyataan Mengikuti Peraturan Perundang-undangan (APJ)</td>
                                <td class="text-center">
                                    <a target="_blank"
                                        href="{{asset('lampiran/'.$data->lampiran_bidan->surat_pernyataan_mengikuti_uud)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Surat Keterangan Kesehatan Badan</td>
                                <td class="text-center">
                                    <a target="_blank"
                                        href="{{asset('lampiran/'.$data->lampiran_bidan->surat_keterangan_sehat)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Surat Rekomendasi Ikatan Bidan Indonesia</td>
                                <td class="text-center">
                                    <a target="_blank"
                                        href="{{asset('lampiran/'.$data->lampiran_bidan->surat_rekomendasi_IBI)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Kartu Anggota Ikatan Bidan Indonesia</td>
                                <td class="text-center">
                                    <a target="_blank"
                                        href="{{asset('lampiran/'.$data->lampiran_bidan->kartu_anggota)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Surat Tanda Registrasi Bidan (STRB)</td>
                                <td class="text-center">
                                    <a target="_blank" href="{{asset('lampiran/'.$data->lampiran_bidan->str)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Surat Pernyataan Permohonan</td>
                                <td class="text-center">
                                    <a target="_blank"
                                        href="{{asset('lampiran/'.$data->lampiran_bidan->surat_pernyataan_permohonan)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Surat Izin Atasan Langsung</td>
                                <td class="text-center">
                                    <a target="_blank"
                                        href="{{asset('lampiran/'.$data->lampiran_bidan->surat_izin_atasan_langsung)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Ijazah (Legalisir)</td>
                                <td class="text-center">
                                    <a target="_blank" href="{{asset('lampiran/'.$data->lampiran_bidan->ijazah)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>KTP</td>
                                <td class="text-center">
                                    <a target="_blank" href="{{asset('lampiran/'.$data->lampiran_bidan->ktp)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>NPWP</td>
                                <td class="text-center">
                                    <a target="_blank" href="{{asset('lampiran/'.$data->lampiran_bidan->npwp)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Foto</td>
                                <td class="text-center">
                                    <a target="_blank" href="{{asset('lampiran/'.$data->lampiran_bidan->foto)}}"
                                        class="btn btn-icons btn-rounded btn-primary"><i
                                            class="mdi mdi-cloud-download"></i></a>
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
                                    <a href="#" class="btn btn-icons btn-rounded btn-primary" target="_blank"><i
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Verifikasi Permohonan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('permohonanAll.verifikasiBidan',$data->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Status Verifikasi</label>
                        <select name="status_verif_petugas_proses" id="" class="form-control">
                            <option value="0">Berkas Sedang di cek</option>
                            <option value="1">Selesai Pengecekan</option>
                            <option value="2">Diperbaiki / dikembalikan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Catatan</label>
                        <textarea name="catatan" id="" class="form-control"></textarea>
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