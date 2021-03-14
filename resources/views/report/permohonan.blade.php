<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    h4,h2{
        font-family:serif;
    }
        body{
            font-family:sans-serif;
        }
        table{
        border-collapse: collapse;
        width:100%;
      }
      table, th, td{
        border: 1px solid black;
      }
      th{
        text-align: center;
      }
      td{
        text-align: center;
      }
      br{
          margin-bottom: 5px !important;
      }
     .judul{
         text-align: center;
     }
     .header{
         margin-bottom: 0px;
         text-align: center;
         height: 110px;
         padding: 0px;
     }
     .pemko{
         width:70px;
     }
     .logo{
         float: left;
         margin-right: 0px;
         width: 18%;
         padding:0px;
         text-align: right;
     }
     .headtext{
         float:right;
         margin-left: 0px;
         width: 72%;
         padding-left:0px;
         padding-right:10%;
     }
     hr{
         margin-top: 10%;
         height: 3px;
         background-color: black;
         width:100%;
     }
     .ttd{
         margin-left:65%;
         text-align: center;
         text-transform: uppercase;
     }
     .text-right{
         text-align:right;
     }
     .isi{
         padding:10px;
     }
    </style>
</head>
<body>
    <div class="header">
            <div class="logo">
                    <img  class="pemko" src="pemkab.png">
            </div>
            <div class="headtext">
                <h3 style="margin:0px;">PEMERINTAH KABUPATEN BANJAR </h3>
                <h3 style="margin:0px; text-transform:uppercase;">DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU</h3>
                <p style="margin:0px;">Jl. Jend Ahmad Yani , No 6A km.40 Telepon/ Fax (0511) 4722324 Martapura 70611</p>
            </div>
            <br>
    </div>
    <div class="container">
    <hr style="margin-top:1px;">
        <div class="isi"> 
            <h2 style="text-align:center;">DATA RIWAYAT PERMOHONAN</h2>
            <br>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>tanggal Permohonan</th>
                        <th>NIP/NIK</th>
                        <th>Nama</th>
                        <th>Nomor Str</th>
                        <th>Nomor Rekomendasi</th>
                        <th>Tempat Praktik</th>
                        <th>Progress Permohonan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->created_at}}</td>
                        <td>{{$d->biodata_diri->NIP}}</td>
                        <td>{{$d->biodata_diri->user->nama}}</td>
                        <td>{{$d->nomor_str}}</td>
                        <td>{{$d->nomor_rekomendasi}}</td>
                        <td>{{$d->tempat_praktik}}</td>
                        <td>
                            @switch($d->status)
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <br>
            <div class="ttd">
            <p style="margin:0px"> Martapura,</p>
            <h6 style="margin:0px">Mengetahui</h6>
            <h5 style="margin:0px">Kepala Dinas </h5>
            <br>
            <br>
            <h5 style="text-decoration:underline; margin:0px">Ir. Hj. Ida Pressy, MT</h5>
            <h5 style="margin:0px">NIP. 19620606 199203 2 007</h5>
            </div>
        </div>
    </div>
</body>
</html>