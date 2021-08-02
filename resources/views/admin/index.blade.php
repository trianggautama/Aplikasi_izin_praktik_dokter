@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="row page-title-header">
            <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Beranda</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                <ul class="quick-links ml-auto">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">Beranda</a></li>
                </ul>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md grid-margin stretch-card average-price-card">
                <div class="card text-white">
                    <div class="card-body">
                    <div class="d-flex justify-content-between pb-2 align-items-center">
                        <h2 class="font-weight-semibold mb-0">{{$dokter}}</h2>
                        <div class="icon-holder">
                        <i class="mdi mdi-briefcase-outline"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-white mb-0">Permohonan Izin Praktik Dokter</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md grid-margin stretch-card average-price-card">
                <div class="card text-white">
                    <div class="card-body">
                    <div class="d-flex justify-content-between pb-2 align-items-center">
                        <h2 class="font-weight-semibold mb-0">{{$farmasi}}</h2>
                        <div class="icon-holder">
                        <i class="mdi mdi-briefcase-outline"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-white mb-0">Permohonan Izin Praktik Farmasi</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md grid-margin stretch-card average-price-card">
                <div class="card text-white">
                    <div class="card-body">
                    <div class="d-flex justify-content-between pb-2 align-items-center">
                        <h2 class="font-weight-semibold mb-0">{{$bidan}}</h2>
                        <div class="icon-holder">
                        <i class="mdi mdi-briefcase-outline"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-white mb-0">Permohonan Izin Praktik Bidan</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
             <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body ">
                    <h1>Selamat Datang Admin</h1>  
                    <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci cupiditate inventore architecto. Repellat laudantium ea sunt ut quas ratione deleniti ullam nostrum unde magni voluptates vitae rem dolore, atque rerum.</p>
                    <br>
                    <img src="{{asset('ilustrasi.png')}}" alt="" width="150px">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="p-4 pr-5 border-bottom bg-light d-flex justify-content-between">
                    <h4 class="card-title mb-0">Grafik Permohonan</h4>
                    <id id="scatter-chart-legend"></id>
                  </div>
                  <div class="card-body">
                  <canvas class="my-auto" id="pieChart" height="130"></canvas>
                  </div>
                </div>
              </div>
        </div>
        <div class="row">
            <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Permohonan Izin Baru {{Carbon\carbon::now()->format('d F Y')}}
                </div>
                <div class="card-body">
                <div class="table-responsive">
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
                                    <th class="text-center">Aksi</th>
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
                                    <td class="text-center">
                                        <a href="{{Route('admin.permohonan.detail', $d->id)}}"
                                            class="btn btn-icons btn-rounded btn-info"><i class="mdi mdi-file"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
      if ($("#pieChart").length) {
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: {
        datasets: [{
          data: [{!! $dokter !!}, {!! $farmasi !!}, {!! $bidan !!}],
          backgroundColor: [
            ChartColor[0],
            ChartColor[1],
            ChartColor[2]
          ],
          borderColor: [
            ChartColor[0],
            ChartColor[1],
            ChartColor[2]
          ],
        }],
        labels: [
          'Izin Dokter',
          'Izin Farmasi',
          'Izin Bidan',
        ]
      }, 
      options: {
        responsive: true,
        animation: {
          animateScale: true,
          animateRotate: true
        },
        legend: {
          display: false
        },
        legendCallback: function (chart) {
          var text = [];
          text.push('<div class="chartjs-legend"><ul>');
          for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
            text.push('<li><span style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '">');
            text.push('</span>');
            if (chart.data.labels[i]) {
              text.push(chart.data.labels[i]);
            }
            text.push('</li>');
          }
          text.push('</div></ul>');
          return text.join("");
        }
      }
    });
    document.getElementById('pie-chart-legend').innerHTML = pieChart.generateLegend();
  }
  </script>
@endsection 