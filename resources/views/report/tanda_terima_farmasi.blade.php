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
        /* border: 1px solid black; */
      }
      th{
        text-align: center;
      }
      td{
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
         height: 90px;
         padding: 0px;
     }
     .pemko{
         width:60px;
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
         text-transform: uppercase;
     }
     .text-right{
         text-align:right;
     }
     .isi{
         padding:10px;
     }
     p{
         font-size: 12px;
     }
     @page { 
         size: 21 cm 29.6 cm ; 
         }
    </style>
</head>
<body>
    <div class="header"> 
            <div class="logo">
                    <img  class="pemko" src="pemkab.png">
            </div>
            <div class="headtext">
                <h5 style="margin:0px;">PEMERINTAH KABUPATEN BANJAR </h5>
                <h5 style="margin:0px; text-transform:uppercase;">DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU</h5>
                <p style="margin:0px;">Jl. Jend Ahmad Yani , No 6A km.40 Telepon/ Fax (0511) 4722324 Martapura 70611</p>
            </div>
            <br>
    </div>
    <div class="container">
    <hr style="margin-top:1px;">
        <div class="isi">
            <h5 style="text-align:center; margin:0%;">TANDA TERIMA</h5>
            <h5 style="text-align:center; margin:0%;">{{$data->id}}/IPD-U/I/{{Carbon\carbon::parse($data->created_at)->format('Y')}}</h5>
            <br>
            <p>Telah terima berkas permohona izin :</p>
            <table>
                <tr>
                    <td width="30%"><p>Nama Pemohon</p></td>
                    <td><p>:{{$data->biodata_diri->user->nama}}</p></td>
                </tr>
                <tr>
                    <td><p>No Identitas</p></td>
                    <td>:-</td>
                </tr>
                <tr>
                    <td><p>Alamat Pemohon</p></td>
                    <td><p>:{{$data->biodata_diri->alamat}}</p></td>
                </tr>
                <tr>
                    <td><p>Lokasi Usaha/ Bangunan</p></td>
                    <td><p>:{{$data->alamat_tujuan}}</p></td>
                </tr>
                <tr>
                    <td><p>Permohonan</p></td>
                    <td><p>: Izin Paraktik  Kefarmasian</p></td>
                </tr> 
                <tr>
                    <td><p>Nama Izin</p></td>
                    <td><p>: IZIN PRAKTIK KEFARMASIAN</p></td>
                </tr>
                <tr>
                    <td><p>Tanggal Pendafaran</p></td>
                    <td><p>: {{Carbon\carbon::parse($data->created_at)}}</p></td>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <td style="text-align: center;">
                        <p>Yang Mengajukan</p>
                        <br><br><br>
                        <p>{{$data->biodata_diri->user->nama}}</p>
                    </td>
                    <td style="text-align: center;">
                    <p>Petugas yang Menerima</p>
                        <br><br><br>
                        <p>(..........................)</p>
                    </td>
                </tr>
            </table>
            <br>
            <p>CATATAN :</p>
            <table>
                <tr>
                    <td>
                    <table>
                        <tr>
                            <td style="height:10px !important; padding:0px; margin:0px;"><p>1.</p></td>
                            <td style="height:10px !important; padding:0px; margin:0px;"><p style="text-align: justify;">Buku tanda terima ini BUKAN merupakan tanda bukti izin</p></td>
                        </tr>
                        <tr>
                            <td style="height:10px !important; padding:0px; margin:0px;"><p>2.</p></td>
                            <td><p style="text-align: justify;">Keterlambatan Pengambilan SK dan Pembayaran Pajak/Retribusi dikenakan sanksi berupa bunga 2% setiap Bulan dari Pajak/Retribusi Terhutang</p></td>
                        </tr>
                        <tr>
                            <td style="height:10px !important; padding:0px; margin:0px;"> <p>3.</p></td>
                            <td><p style="text-align: justify;">Informasi Posisi Berkas dan Informasi Lainnya dapat menghubungi Call Center/Costumer Service (0511) 4721000  dan SMS Gateway : 0811 500 6666</p></td>
                        </tr>
                        <tr>
                            <td style="height:10px !important; padding:0px; margin:0px;"><p>4.</p></td>
                            <td><p style="text-align: justify;">Apabila keterlambatan pelayanan proses perizinan disebabkan oleh kelalaian DPMPTSP Kab.Banjar berkas akan kami antar ke tempat Anda</p></td>
                        </tr>
                    </table>
                    </td>
                    <td style="width: 200px;">
                    
                    </td>
                </tr>
            </table>
            </div>
        </div>
    </body>
</html>