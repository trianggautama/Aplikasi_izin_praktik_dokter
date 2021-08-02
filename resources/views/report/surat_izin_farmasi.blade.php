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
        border: none;
      }
      th{
        text-align: center;
      }
      td{
        text-align: left;
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
            <h2 style="text-align:center; text-decoration:underline;margin:0px;">SURAT IZIN PRAKTIK TENAGA TEKNIS KEFARMASIAN (SIPTTK) </h2>
            <h5 style="text-align:center; text-decoration:underline; margin:10px;">Nomor: 503/&nbsp;/DPMPTSP/SIP-{{Carbon\carbon::parse($data->created_at)->format('Y')}}</h5>
            <br>
            <p style="text-align: justify;">Berdasarkan Peraturan Menteri Kesehatan Republik Indonesia Nomor 31 tahun 2016  tentang Registrasi, Izin Praktik dan Pelaksanaan Praktik Tenaga Kefarmasian, yang bertandatangan dibawah ini, Kepala Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kabupaten Banjar memberikan Izin Praktik Dokter kepada:</p>
            <h2 style="text-align: center; text-transform:uppercase;text-decoration:underline;">{{$data->biodata_diri->user->nama}}</h2>
            <table>
                <tr>
                    <td style="height:30px !important;">Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{$data->biodata_diri->tempat_lahir}}, {{Carbon\carbon::parse($data->biodata_diri->tanggal_lahir)->translatedFormat('d F Y')}}</td>
                </tr>
                <tr>
                    <td style="height:30px !important;">Alamat Rumah (Domisili)</td>
                    <td>:</td>
                    <td>{{$data->biodata_diri->alamat}}</td>
                </tr>
                <tr>
                    <td style="height:30px !important;">Alamat Tempat Praktik</td>
                    <td>:</td>
                    <td>{{$data->tempat_praktik}}</td>
                </tr>
                <tr>
                    <td style="height:30px !important;">Nomor STR</td>
                    <td>:</td>
                    <td>{{$data->nomor_str}}</td>
                </tr>
                <tr>
                    <td style="height:30px !important;">STR berlaku sampai dengan</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td style="height:30px !important;">Nomor Rekomendasi OP</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td style="height:30px !important;">Rekomendasi Dinas Kesehatan</td>
                    <td>:</td>
                    <td>{{$data->nomor_rekomendasi}}</td>
                </tr>
                <tr>
                    <td style="height:30px !important;">Izin Praktik Ke</td>
                    <td>:</td>
                    <td>1 (satu)</td>
                </tr>
                <tr>
                    <td style="height:30px !important;">Untuk Praktik</td>
                    <td>:</td>
                    <td>FARMASI</td>
                </tr>
            </table>
            <p style="padding-left: 0px;">Surat Izin praktik Tegara Kefarmasian ini berlaku sampai : .</p>
            <br>
            <br>
            <table>
                <tr>
                    <td width="50%"></td>
                    <td>
                    Ditetapkan di : <br>
                    Pada Tanggal  : <br>
                    --------------------------------------------------- <br>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td style="text-align: right; width:60%"><img src="lampiran/foto/{{$data->lampiran_farmasi->foto}}" alt=""></td>
                    <td style="text-align: center;">
                    Kepala Dinas
                    <br>
                      <br>
                      <br>
                      <br>
                      <h5 style="text-decoration:underline; margin:0px">Ir. Hj. Ida Pressy, MT</h5>
                      <h5 style="margin:0px">NIP. 19620606 199203 2 007</h5>
                    </td>
                </tr>
            </table>
                    </div>
             </div>
         </body>
</html>