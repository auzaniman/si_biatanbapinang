@extends('superuser.layouts.app')

@section('title')
Statistik Kampung
@endsection

@section('content')
{{-- Card Count --}}
<div class="row mb-sm-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Warga</p>
              <h5 class="font-weight-bolder">
               716 Jiwa
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total KK</p>
              <h5 class="font-weight-bolder">
               209 KK
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-file text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Laki-Laki</p>
              <h5 class="font-weight-bolder">
               381 Jiwa
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-male text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Perempuan</p>
              <h5 class="font-weight-bolder">
               335 Jiwa
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-female text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12 mb-lg-0">
    <div class="card h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Penduduk Berdasarkan Usia</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="bar-chart" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-6 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Suku Bangsa</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-lg-0">
    <div class="card  h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Agama</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart2" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Penduduk Berdasarkan Tingkat Pendidikan</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="bar-chart2" class="chart-canvas" height="300"></canvas>
        </div>
        <p class="text-xs ps-1 mb-0 font-weight-bold">Keterangan</p>
        <div class="row">
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">PSD(Pelajar Sekolah SD)</li>
              <li class="text-xs">TSD(Tamat SD)</li>
              <li class="text-xs">TTSD(Tidak Tamat SD)</li>
              <li class="text-xs">PSMP(Pelajar SMP)</li>
              <li class="text-xs">TSMP(Tamat SMP)</li>
            </ul>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">TTSMP(Tidak Tamat SMP)</li>
              <li class="text-xs">PSMU(Pelajar SMU)</li>
              <li class="text-xs">TSMU(Tamat SMU)</li>
              <li class="text-xs">TTSMU(Tidak Tamat SMU)</li>
              <li class="text-xs">M(Mahasiswa)</li>
            </ul>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">D(Diploma)</li>
              <li class="text-xs">S(Sarjana)</li>
              <li class="text-xs">Mg/Dr(Magister/Doktor)</li>
              <li class="text-xs">TTK(Tidak Tamat Kuliah)</li>
              <li class="text-xs">TPS(Tidak Pernah Sekolah)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0">
    <div class="card h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Penduduk Berdasarkan Pekerjaan</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="bar-chart3" class="chart-canvas" height="300"></canvas>
        </div>
        <p class="text-xs ps-1 mb-0 font-weight-bold">Keterangan</p>
        <div class="row">
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">SKTS(Sebelum Kerja, Tidak Sekolah)</li>
              <li class="text-xs">PSD(Pelajar SD)</li>
              <li class="text-xs">USDTS(Usia SD Tidak Sekolah)</li>
              <li class="text-xs">PSM(Pelajar SD)</li>
              <li class="text-xs">USMPTS(Usia SMP Tidak Sekolah)</li>
              <li class="text-xs">PSMU(Pelajar SMU)</li>
              <li class="text-xs">USMUTS(Usia SMU Tidak Sekolah)</li>
            </ul>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">M(Mahasiswa)</li>
              <li class="text-xs">PKeb(Petani Kebun)</li>
              <li class="text-xs">Nel(Nelayana)</li>
              <li class="text-xs">Tkay(Tukang Kayu)</li>
              <li class="text-xs">B(Buruh)</li>
              <li class="text-xs">P(Pengusaha)</li>
              <li class="text-xs">AKamp(Aparat Kampung)</li>
            </ul>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">IRT(Ibu Rumah Tangga)</li>
              <li class="text-xs">KSwa(Karyawan Swasta)</li>
              <li class="text-xs">PGu(PNS Guru)</li>
              <li class="text-xs">Pdt(Pendeta)</li>
              <li class="text-xs">Hon(Honorer)</li>
              <li class="text-xs">PL(Pekerjaan Lain)</li>
              <li class="text-xs">TBM(Tidak Bekerja Manual)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Card Count --}}
{{-- <h5 class="mt-4 mb-2">Statistik User Web Biatan Bapinang</h5>
<div class="row mb-sm-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Warga</p>
              <h5 class="font-weight-bolder">
               {{$total_warga->ktp}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total KK</p>
              <h5 class="font-weight-bolder">
               {{$total_warga->domisili}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-file text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Laki-Laki</p>
              <h5 class="font-weight-bolder">
               {{$kelamin->laki}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-male text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Perempuan</p>
              <h5 class="font-weight-bolder">
               {{$kelamin->perempuan}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-female text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="px-3">

      </div>
      <div class="px-3">
        <button class="btn btn-sm btn-warning btn-icon btn-3 mt-3 mb-sm-0" data-bs-toggle="modal" data-bs-target="#modal-form">
          <span class="btn-inner--text">Tambah</span>
        </button>
        <a href="{{route('officer.chart_edit_page')}}" class="btn text-white btn-sm btn-warning btn-icon btn-3 mt-3 mb-sm-0 text-decoration-none">
          <span class="btn-inner--text">Edit Data</span>
        </a>
      </div>
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Penduduk Berdasarkan RT</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="bar-chart" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah Data Chart</h3>
              </div>
              <div class="card-body">
                <form role="form text-left" action="{{route('officer.chart_add')}}" method="POST">
                  @csrf
                  <label>Jumlah Warga</label>
                  <div class="input-group mb-3">
                    <input type="text" name="jumlahWarga" id="jumlahWarga" class="form-control" placeholder="Jumlah Warga" >
                  </div>
                  <label>Jumlah Kepala Keluarga</label>
                  <div class="input-group mb-3">
                    <input type="text" name="jumlahKepalaKeluarga" id="jumlahKepalaKeluarga" class="form-control" placeholder="Jumlah Kepala Keluarga" >
                  </div>
                  <label>RT</label>
                  <div class="input-group mb-3">
                    <input type="text" name="rt" id="rt" class="form-control" placeholder="RT" >
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Tingkat Pendidikan</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Mata Pencaharian</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart2" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection

@push('chart')
{{-- Chart Bar Data Warga Berdasarkan Umur --}}
<script>
  var ctx = document.getElementById("bar-chart").getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ['<5 Tahun','5-12 Tahun','12-18 Tahun','18-45 Tahun','45-60 Tahun','>60 Tahun'],
      datasets: [
        {
          label: "Laki-Laki",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(54, 162, 235)',
          data: [43,42,44,179,44,28],
          fill: false,
          maxBarThickness: 35
        }, {
          label: "Perempuan",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(255, 99, 132)',
          data: [44,47,33,147,37,28],
          fill: false,
          maxBarThickness: 35
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true
        }
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7"
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10
          }
        }
      }
    }
  });
</script>
{{-- Chart Pie Data Warga Berdasarkan Suku Bangsa --}}
<script>
  const ctx2 = document.getElementById('pie-chart').getContext("2d");
  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['Berau','Banjar','Dayak','Bugis','Jawa','Timor','Batak','Sunda','Bali','NTB'],
      datasets: [{
        data: [24,9,223,402,33,5,4,5,10,1],
        backgroundColor: [
          '#006ba6',
          '#0281d3',
          '#0496ff',
          '#d81159',
          '#f69248',
          '#82a9a1',
          '#ffbc42',
          '#ec674e',
          '#b41f58',
          '#8f2d56',
        ],
        hoverOffset: 4
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true
        }
      },
    }
  });
</script>
{{-- Chart Pie Data Warga Berdasarkan Agama --}}
<script>
  const ctx3 = document.getElementById('pie-chart2').getContext("2d");
  new Chart(ctx3, {
    type: 'pie',
    data: {
      labels: ['Islam','Kristen','Khatolik','Budha','Hindu','Lainnya',],
      datasets: [{
        data: [510,196,4,0,6,0],
        backgroundColor: [
          '#006ba6',
          '#0281d3',
          '#0496ff',
          '#d81159',
          '#f69248',
          '#82a9a1',
          '#ffbc42',
          '#ec674e',
          '#b41f58',
          '#8f2d56',
        ],
        hoverOffset: 4
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true
        }
      },
    }
  });
</script>
{{-- Chart Bar Data Warga Berdasarkan Pendidikan --}}
<script>
  var ctx4 = document.getElementById("bar-chart2").getContext("2d");
  new Chart(ctx4, {
    type: "bar",
    data: {
      labels: ['Balita','PSD','TSD','TTSD','PSMP','TSMP','TTSMP','PSMU','TSMU','TTSMU','M','D','S','Dr','TTK','TPS'],
      datasets: [
        {
          label: "Laki-Laki",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(54, 162, 235)',
          data: [43,25,132,45,3,30,4,4,48,2,4,5,9,0,0,18],
          fill: false,
          maxBarThickness: 35
        }, {
          label: "Perempuan",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(255, 99, 132)',
          data: [44,34,122,50,5,31,3,8,31,1,1,2,6,0,0,6],
          fill: false,
          maxBarThickness: 35
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true
        }
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7"
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10
          }
        }
      }
    }
  });
</script>
{{-- Chart Bar Data Warga Berdasarkan Pendidikan --}}
<script>
  var ctx5 = document.getElementById("bar-chart3").getContext("2d");
  new Chart(ctx5, {
    type: "bar",
    data: {
      labels: ['SKTS','PSD','USDTS','PSMP','USMPTS','PSMU','USMUTS','M','PKeb','Nel','TKay','B','P','AKamp','IRT','KSwa','PGu','Pdt','Dai','Hon','PL','TBK'],
      datasets: [
        {
          label: "Laki-Laki",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(54, 162, 235)',
          data: [28,11,6,3,1,4,2,4,300,0,0,15,0,3,0,27,3,0,1,9,37,0],
          fill: false,
          maxBarThickness: 35
        }, {
          label: "Perempuan",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(255, 99, 132)',
          data: [34,18,9,5,1,8,0,1,50,0,0,5,0,3,180,16,0,0,0,8,30],
          fill: false,
          maxBarThickness: 35
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true
        }
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7"
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10
          }
        }
      }
    }
  });
</script>
@endpush
