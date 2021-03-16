<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Surat Rekomendasi</title>
</head>
<body>
    <table>
        <tr>
            <td width="70px">Perihal</td>
            <td width="360px">: <b>Permohonan Surat Rekomendasi</b></td>
            <td width="10%">Kepada</td>
            <td>:</td>
        </tr>
        <tr>
            <td ></td>
            <td ></td>
            <td colspan="2">Yth. Kepala Dinas Penanaman Modal dan PTSP Kabupaten Banjar</td>
        </tr>
        <tr>
            <td style="vertical-align: top;"></td>
            <td > <b style="text-align: justify;"></td>
            <td colspan="2">Di - 
            <br>
                <b>Martapura</b>
            </td>
        </tr>
    </table>
    <br> 
    <p>Dengan Hormat,</p>
    <p>Yang bertanda tangan dibawah ini :</p>
    <table>
        <tr >
            <td width="200px" style="height:30px !important;">Nama Lengkap + gelar</td>
            <td>:</td>
            <td> {{$data->permohonan_sip->biodata_diri->user->nama}}</td>
        </tr>
        <tr>
            <td style="height:30px !important;">Alamat Rumah (Domisili)</td>
            <td>:</td>
            <td>{{$data->permohonan_sip->biodata_diri->alamat}}</td>
        </tr>
        <tr>
            <td style="height:30px !important;">Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{$data->permohonan_sip->biodata_diri->tempat_lahir}}, {{Carbon\carbon::parse($data->permohonan_sip->biodata_diri->tanggal_lahir)->translatedFormat('d F Y')}}</td>
        </tr>
        <tr>
            <td style="height:30px !important;">Jenis Kelamin</td>
            <td>:</td>
            <td>
                @if($data->permohonan_sip->biodata_diri->jenis_kelamin == 1)
                    <p>Laki - laki</p>
                @else
                    <p>Perempuan</p>
                @endif
            </td>
        </tr>
        <tr>
            <td style="height:30px !important;">Tahun Kelulusan</td>
            <td>:</td>
            <td>{{$data->permohonan_sip->tahun_kelulusan}}</td>
        </tr>
        <tr>
            <td style="height:30px !important;">No STR</td>
            <td>:</td>
            <td>{{$data->permohonan_sip->nomor_str}}</td>
        </tr>
        <tr>
            <td style="height:30px !important;">Nama Sarana</td>
            <td>:</td>
            <td>{{$data->permohonan_sip->tempat_praktik}}</td>
        </tr>
        <tr>
            <td style="height:30px !important;">Alamat Sarana</td>
            <td>:</td>
            <td>{{$data->permohonan_sip->alamat_tujuan}}</td>
        </tr>
        <tr>
            <td style="height:30px !important;">No Telepon</td>
            <td>:</td>
            <td>{{$data->nomor_telepon}}</td>
        </tr>
        <tr>
            <td style="height:30px !important;">Jam Praktik</td>
            <td>:</td>
            <td>{{$data->jam_praktik}}</td>
        </tr>
    </table>
    <br>
    <p style="text-align: justify;">Dengan ini mengajukan permohonan untuk mendapatkan Surat Rekomendasi Izin Praktik  di {{$data->permohonan_sip->alamat_tujuan}} dari Dinas Kesehatan Kabupaten Banjar</p>
    <p>Demikian Permohonan ini saya buat, atas kerja samanya diucapkan terima kasih</p>
    <br>
    <br>
    <table>
        <tr>
            <td style="width:450px">&nbsp;</td>
            <td style="text-align: center;">
                <p>{{$data->permohonan_sip->tempat_ttd}} , {{Carbon\carbon::parse($data->created_at)->translatedFormat('d F Y')}}</p>
                <p>Hormat Saya,</p>
                <br>
                <br>
                <br>
                <br>{{$data->permohonan_sip->biodata_diri->user->nama}}
            </td>
        </tr>
    </table>
</body>
</html>