<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Permohonan Izin Praktik</title>
</head>
<body>
    <table>
        <tr>
            <td width="70px">Nomor</td>
            <td width="360px">: ..............................................</td>
            <td width="10%">Kepada</td>
            <td>:</td>
        </tr>
        <tr>
            <td >Lampiran</td>
            <td >: 4 (Empat) Berkas</td>
            <td colspan="2">Yth. Kepala Dinas Penanaman Modal dan PTSP Kabupaten Banjar</td>
        </tr>
        <tr>
            <td style="vertical-align: top;">Perihal</td>
            <td >: <b style="text-align: justify;">Permohonan Surat Izin Praktik (SIP) <br> Tenaga Kebidanan</b></td>
            <td colspan="2">Di - 
            <br>
                <b>Martapura</b>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <p>Dengan Hormat,</p>
    <p>Yang bertanda tangan dibawah ini :</p>
    <table>
        <tr >
            <td width="200px" style="height:40px !important;">Nama Lengkap + gelar</td>
            <td>:</td>
            <td> {{$data->biodata_diri->user->nama}}</td>
        </tr>
        <tr>
            <td style="height:40px !important;">Alamat Rumah (Domisili)</td>
            <td>:</td>
            <td>{{$data->biodata_diri->alamat}}</td>
        </tr>
        <tr>
            <td style="height:40px !important;">Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{$data->biodata_diri->tempat_lahir}}, {{Carbon\carbon::parse($data->biodata_diri->tanggal_lahir)->translatedFormat('d F Y')}}</td>
        </tr>
        <tr>
            <td style="height:40px !important;">Jenis Kelamin</td>
            <td>:</td>
            <td>
                @if($data->biodata_diri->jenis_kelamin == 1)
                    <p>Laki - laki</p>
                @else
                    <p>Perempuan</p>
                @endif
            </td>
        </tr>
        <tr>
            <td style="height:40px !important;">Tahun Kelulusan</td>
            <td>:</td>
            <td>{{Carbon\carbon::parse($data->tahun_kelulusan)->translatedFormat('d F Y')}}</td>
        </tr>
        <tr>
            <td style="height:40px !important;">Nomor STR</td>
            <td>:</td>
            <td>{{$data->no_str}}</td>
        </tr>
        <tr>
            <td style="height:40px !important;">No Rekomendasi Profesi</td>
            <td>:</td>
            <td>{{$data->no_rekomendasi}}</td>
        </tr>
    </table>
    <br>
    <p style="text-align: justify;">Dengan ini mengajukan untuk mendapatkan Surat Izin Praktik (SIP) untuk tempat praktik yang ke .... dengan alamat di {{$data->alamat_tujuan}}</p>
    <p>Demikian atas perhatian Bapak / Ibu kami ucapkan terimakasih</p>
    <br>
    <br>
    <table>
        <tr>
            <td style="width:450px">&nbsp;</td>
            <td style="text-align: center;">
                <p>Martapura , {{Carbon\carbon::parse($data->created_at)->translatedFormat('d F Y')}}</p>
                <p>Hormat Saya,</p>
                <br>
                <br>
                <br>
                <br>{{$data->biodata_diri->user->nama}}
            </td>
        </tr>
    </table>
</body>
</html>