@extends('officer.layouts.app')

@section('title')
Rencana Jangka Menengah
@endsection

@section('content')
{{-- Foto Kades dan Visi Misi --}}
<div class="row">
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card">
      <div class="card-header p-0 bg-transparent">
        <img src="{{url('frontend/assets/img/kepdes.jpeg')}}" class="img-fluid border-radius-top-end-lg-xl border-radius-xl" alt="foto kades">
      </div>
    </div>
  </div>
  <div class="col-lg-8 mb-lg-0">
    <div class="card h-100">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa fa-eye text-warning" aria-hidden="true"></i>
        <div class="d-flex">
          <h6 class="text-capitalize text-primary">VISI</h6>
          @if (($visi_misi) != null)
            @if ($visi_misi->visi != null || $visi_misi->misi != null)
            <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form" class="btn badge bg-gradient-info ms-auto">
              <i class="fa fa-pencil me-1" aria-hidden="true"></i>
              Edit
            </button>
            @else
            <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form" class="btn badge bg-gradient-primary ms-auto">
              <i class="fa fa-plus me-1" aria-hidden="true"></i>
              Tambah
            </button>
            @endif
          @else
            <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form" class="btn badge bg-gradient-primary ms-auto">
              <i class="fa fa-plus me-1" aria-hidden="true"></i>
              Tambah
            </button>
          @endif
        </div>
        @if (($visi_misi) != null)
          @if ($visi_misi->visi != null)
            {!! html_entity_decode($visi_misi->visi) !!}
          @else
            <p class="mb-1">
              “MEWUJUDKAN MASYARAKAT KAMPUNG BIATAN BAPINANG MENJADI MASYARAKAT AMANAH TAHUN 2023”
            </p>
            <p>
              <span class="font-weight-bold">A</span>  = Aktif,
              <span class="font-weight-bold">M</span>  = Makmur,
              <span class="font-weight-bold">A</span>  = Agamis,
              <span class="font-weight-bold">N</span>  = Nyaman,
              <span class="font-weight-bold">A</span>  = Aman,
              <span class="font-weight-bold">H</span>  = Harmonis
            </p>
          @endif
        @else
          <p class="mb-1">
            “MEWUJUDKAN MASYARAKAT KAMPUNG BIATAN BAPINANG MENJADI MASYARAKAT AMANAH TAHUN 2023”
          </p>
          <p>
            <span class="font-weight-bold">A</span>  = Aktif,
            <span class="font-weight-bold">M</span>  = Makmur,
            <span class="font-weight-bold">A</span>  = Agamis,
            <span class="font-weight-bold">N</span>  = Nyaman,
            <span class="font-weight-bold">A</span>  = Aman,
            <span class="font-weight-bold">H</span>  = Harmonis
          </p>
        @endif
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0">
    <div class="card">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa fa-pencil text-warning" aria-hidden="true"></i>
        <h6 class="text-capitalize">MISI</h6>
        @if (($visi_misi) != null)
          @if ($visi_misi->misi != null)
            {!! html_entity_decode($visi_misi->misi) !!}
          @else
            <ul class="mb-3 ps-4">
              <li>Membangun Persatuan dan Kerja Sama diantara Suku  dan Golongan</li>
              <li>Membangun Kerukunan antar umat beragama</li>
              <li>Membangun Pembangunan yang dibutuhkan di RT/Kampung</li>
              <li>Membangun Keterbukaan / transfaran kepada Masyarakat</li>
              <li>Membangun  Kualitas  Pelayanan Bagi  Masyarakat Kampung</li>
              <li>Melaksanakan tugas dengan baik sesuai dengan amanah yang diberikan masyarakat Kampung Biatan Bapinang</li>
              <li>Melanjutkan Program Pemerintah Pusat, Provinsi dan Kabupaten Berau</li>
              <li>Membina	Masyarakat	Kampung,	baik	kelompok	tani, karang taruna dll</li>
              <li>Menjadikan Kampung Biatan Bapinang contoh  bagi  Kampung yang ada disekitar Biatan</li>
              <li>Mengembangkan area konservasi sebagai wujud kepedulian lingkungan.</li>
            </ul>
          @endif
        @else
          <ul class="mb-3 ps-4">
            <li>Membangun Persatuan dan Kerja Sama diantara Suku  dan Golongan</li>
            <li>Membangun Kerukunan antar umat beragama</li>
            <li>Membangun Pembangunan yang dibutuhkan di RT/Kampung</li>
            <li>Membangun Keterbukaan / transfaran kepada Masyarakat</li>
            <li>Membangun  Kualitas  Pelayanan Bagi  Masyarakat Kampung</li>
            <li>Melaksanakan tugas dengan baik sesuai dengan amanah yang diberikan masyarakat Kampung Biatan Bapinang</li>
            <li>Melanjutkan Program Pemerintah Pusat, Provinsi dan Kabupaten Berau</li>
            <li>Membina	Masyarakat	Kampung,	baik	kelompok	tani, karang taruna dll</li>
            <li>Menjadikan Kampung Biatan Bapinang contoh  bagi  Kampung yang ada disekitar Biatan</li>
            <li>Mengembangkan area konservasi sebagai wujud kepedulian lingkungan.</li>
          </ul>
        @endif
      </div>
    </div>
  </div>
</div>
{{-- End --}}

{{-- Arah Kebijakan Pmbangunan Kampung --}}
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0">
    <div class="card">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa fa-star text-warning" aria-hidden="true"></i>
        <div class="card-header d-flex bg-transparent p-0">
          <h6>ARAH KEBIJAKAN PEMBANGUNAN KAMPUNG</h6>
          <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form2" class="btn badge bg-gradient-primary ms-auto">
            <i class="fa fa-plus me-1" aria-hidden="true"></i>
            Tambah
          </button>
        </div>
        <div class="card"></div>
        <p>
          Dalam rangka mewujudkan pencapaian Visi dan Misi Kampung Biatan Bapinang di tahun 2018-2023 maka arah kebijakan pembangunan Kampung diprioritaskan pada bidang kepentingan masyarakat miskin.
          <br>
          Strategi pembangunan kampung menjadi landasan dalam menentukan arah kebijakan kampung, prisip – prinsip dasar yang menjadi pedoman serta kerangka berfikir yang melatar belakangi upaya pencapaian visi dan misi yang akan dilaksanakan. Berdasarkan strategi tersebut selanjutnya dapat di jadikan pedoman dalam menentukan arah kebijakan ke uangan kampung kebijakan umum dan program pembangunan.
          <br>
          Untuk mencapai tujuan dan sasaran pembanguan yang telah dirumuskan, maka pemerintah kampung menempuh strategi dan kebijakan sebagai berikut :
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-12">
    <div class="card">
      <div class="card-body pb-0 pt-3">
        <div class="card-header d-flex bg-transparent p-0">
          <h6>Strategi dan Kebijakan</h6>
          <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form3" class="btn badge bg-gradient-primary ms-auto">
            <i class="fa fa-plus me-1" aria-hidden="true"></i>
            Tambah
          </button>
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <th class="font-weight-bold text-sm">No</th>
              <th class="font-weight-bold text-sm text-center text-danger">Strategi</th>
              <th class="font-weight-bold text-sm text-center text-success">Kebijakan</th>
              <th class="font-weight-bold text-sm text-center">Aksi</th>
            </thead>
            <tbody>

              @forelse ($arah_kebijakan as $item)
                <tr>
                  <td class="text-sm">{{++$i}}</td>
                  <td class="text-sm ">{!! html_entity_decode($item->strategi) !!}</td>
                  <td class="text-sm">{!! html_entity_decode($item->kebijakan) !!}</td>
                  <td class="text-sm">
                    <button class="btn badge bg-gradient-info">
                      <a href="{{route('officer.edit_page_strategi', $item->id)}}" class="text-reset text-decoration-none">Edit</a>
                    </button>
                  </td>
                </tr>
              @empty
              @endforelse

              <tr><td colspan="4" class="text-center font-weight-bold table-primary text-sm">Data Dokumen</td></tr>
              <tr>
                <td class="text-sm">1</td>
                <td class="text-sm ">Kekurangan dan dalam pembebasan lahan perpustakaan</td>
                <td class="text-sm">Meningkatkan	kegiatan pelayanan kesehatan berbasis masyarakat. mengembangkan kegiatan pendidikan pada usia dini.</td>
              </tr>
              <tr>
                <td class="text-sm">2</td>
                <td class="text-sm">Pemberdayaan lembaga-lembaga ke masyarakatan agar lebih professional dan berfungsi dalam pengelolaan Pembangunan</td>
                <td class="text-sm">
                  <ol class="ps-4">
                    <li>
                      Mengembangkan hubungan kemitraan pemerintah kampung, BPK, LPM dan warga masyarakat.
                    </li>
                    <li>
                      mengembangkan demokratisasi dalam Penyelenggaraan pemerintahan kampung.
                    </li>
                    <li>
                      Melibatkan secara aktif lembaga-lembaga kemasyarakatan dalam penyusunan	dan pelaksanaan perencanaan pembangunan kampung.
                    </li>
                    <li>
                      Melibatkan secara aktif lembaga- lembaga kemasyarakatan dalam penyusunan	dan pelaksanaan pembangunan kampung.
                    </li>
                  </ol>
                </td>
              </tr>
              <tr>
                <td class="text-sm">3</td>
                <td class="text-sm ">Penguatan kapasitas pemerintah kampong dalam tata kelola/ruang/profile pemerintahan kampung yang baik</td>
                <td class="text-sm">Mengembangkan kemampuan aparat kampong dalam mengelolah pemerintahan. Mengasah kemampuan dengan sering mengikuti diklat-diklat yang diadakan</td>
              </tr>
              <tr>
                <td class="text-sm">4</td>
                <td class="text-sm ">Pelestarian adat-istiadat</td>
                <td class="text-sm">Dalam menyusun peraturan kampung memperhatikan nilai-nilai adat yang berlaku. Memfasilitasi upacara-upacara adat</td>
              </tr>
              <tr>
                <td class="text-sm">5</td>
                <td class="text-sm ">Peningkatan jumlah dan kualitas sarana prasarana perekonomian kampung</td>
                <td class="text-sm">Meningkatkan  produktifitas lahan terutama lahan-lahan yang terbengkalai. Membentuk	dan	mengembangkan badan usaha kampung. Menggali potensi-potensi kampung</td>
              </tr>
              <tr>
                <td class="text-sm">6</td>
                <td class="text-sm ">Peningkatan	keamanan	dan ketertiban kampung</td>
                <td class="text-sm">
                  <ol class="ps-4">
                    <li>
                      Menghidupkan	kembali kegiatan siskamling
                    </li>
                    <li>
                      Membuat tata tertib untuk mengatur jam bertamu,menanggulangi dan memberantas pencuri.
                    </li>
                  </ol>
                </td>
              </tr>
              <tr>
                <td class="text-sm">7</td>
                <td class="text-sm ">Peningkatan	kebersihan	dan keindahan kampung</td>
                <td class="text-sm">
                  <ol class="ps-4">
                    <li>
                      Menggairahkan kembali jum’ at bersih
                    </li>
                    <li>
                      Membuat aturan tentang ternak yang berkeliaran
                    </li>
                    <li>
                      Memfasilitasi peningkatan ke indahan kampung.
                    </li>
                  </ol>
                </td>
              </tr>
              <tr>
                <td class="text-sm">8</td>
                <td class="text-sm ">Pengadaan	permodalan	bagi Masyarakat</td>
                <td class="text-sm">Pengadaan ,perluasan lapangan kerja. memberdayakan kelompok SPP , UKM</td>
              </tr>
              <tr>
                <td class="text-sm">9</td>
                <td class="text-sm ">Peningkatan	keterampilan	dan sumber daya manusia</td>
                <td class="text-sm">Pelatihan	bagi	masyarakat tentang mengelola usaha. Menggali potensi sesuai dengan bidang kerja</td>
              </tr>
              <tr>
                <td class="text-sm">10</td>
                <td class="text-sm ">Peningkatan area konservasi SDA Kampung Biatan Bapinang</td>
                <td class="text-sm">
                  <ol class="ps-4">
                    <li>
                      Advokasi pengelolaan ANKT di kampung Biatan Bapinang
                    </li>
                    <li>
                      Pengelolaan wisata konservasi air panas;
                    </li>
                    <li>
                      Pengelolaan konservasi area mangrove;
                    </li>
                    <li>
                      Hutan potensi ANKT (hutan perbukitan);
                    </li>
                    <li>
                      Hutan potensi ANKT (2);
                    </li>
                  </ol>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End --}}

{{-- Strategi Pencapaian --}}
<div class="row mt-4">
  <div class="col-12 mb-lg-0 mb-4">
    <div class="card">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa fa-star text-warning" aria-hidden="true"></i>
        <div class="card-header d-flex bg-transparent p-0">
          <h6>STRATEGI PENCAPAIAN</h6>
          @if (($strategi_pencapaian) != null)
            <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form4" class="btn badge bg-gradient-info ms-auto">
              <i class="fa fa-pencil me-1" aria-hidden="true"></i>
              Edit
            </button>
          @else
            <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form4" class="btn badge bg-gradient-primary ms-auto">
              <i class="fa fa-plus me-1" aria-hidden="true"></i>
              Tambah
            </button>
          @endif
        </div>
        <div class="card"></div>
        @if (($strategi_pencapaian) != null)
          {!! html_entity_decode($strategi_pencapaian->pencapaian) !!}
        @else
          <p>
            Dari berbagai usulan program yang meliputi bidang pendidikan, kesehatan, sarana dan prasarana, lingkungan hidup, sosial budaya, pemerintahan, usaha masyarakat, pertanian dan pariwisata, akan dilaksanakan secara bertahap mulai tahun 2018 sampai dengan tahun 2023.
            <br>
            Untuk mencapai tujuan tersebut akan dirumuskan kembali secara lebih rinci dalam penyusunan RKP (Rencana Kerja Pembangunan) Kampung yang dirumuskan setiap 1 (satu) tahun anggaran dan disahkan melalui surat keputusan Kepala Kampung Biatan Bapinang.
          </p>
        @endif
      </div>
    </div>
  </div>
</div>
{{-- End --}}

{{-- Modal Visi Misi --}}
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h4 class="font-weight-bolder text-info text-gradient">Visi Misi</h4>
          </div>
          <div class="card-body pt-0">
            @if (($visi_misi) != null)
              <form role="form text-left" action="{{route('officer.update_visi_misi', $visi_misi->id)}}" method="POST">
                @method('put')
                @csrf
                <label>Visi</label>
                <div class="mb-3">
                  <textarea type="text" name="visi" id="visi" class="summernote" rows="5">
                    {{$visi_misi->visi}}
                  </textarea>
                </div>
                <label>Misi</label>
                <div class="mb-3">
                  <textarea type="text" name="misi" id="misi" class="summernote" rows="5">
                    {{$visi_misi->misi}}
                  </textarea>
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">Ubah</button>
                </div>
              </form>
            @else
              <form role="form text-left" action="{{route('officer.post_visi_misi')}}" method="POST">
                @csrf
                <label>Visi</label>
                <div class="mb-3">
                  <textarea type="text" name="visi" id="visi" class="summernote" rows="5"></textarea>
                </div>
                <label>Misi</label>
                <div class="mb-3">
                  <textarea type="text" name="misi" id="misi" class="summernote" rows="5"></textarea>
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">Tambah</button>
                </div>
              </form>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Modal --}}

{{-- Modal Deskripsi Kebijakan --}}
<div class="modal fade" id="modal-form2" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h4 class="font-weight-bolder text-info text-gradient">Deskripsi</h4>
          </div>
          <div class="card-body pt-0">
            @if (($deskripsi_kebijakan) != null)
              <form role="form text-left" action="{{route('officer.update_deskripsi_kebijakan', $deskripsi_kebijakan->id)}}" method="POST">
                @method('put')
                @csrf
                <label>Deskripsi</label>
                <div class="mb-3">
                  <textarea type="text" name="deskripsi" id="deskripsi" class="summernote" rows="5">
                    {{$deskripsi_kebijakan->deskripsi}}
                  </textarea>
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">Update</button>
                </div>
              </form>
            @else
              <form role="form text-left" action="{{route('officer.post_deskripsi_kebijakan')}}" method="POST">
                @csrf
                <label>Deskripsi</label>
                <div class="mb-3">
                  <textarea type="text" name="deskripsi" id="deskripsi" class="summernote" rows="5"></textarea>
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">Tambah</button>
                </div>
              </form>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Modal --}}

{{-- Modal Arah Kebijakan --}}
<div class="modal fade" id="modal-form3" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h4 class="font-weight-bolder text-info text-gradient">Visi Misi</h4>
          </div>
          <div class="card-body pt-0">
            <form role="form text-left" action="{{route('officer.post_arah_kebijakan')}}" method="POST">
              @csrf
              <label>Strategi</label>
              <div class="mb-3">
                <textarea type="text" name="strategi" id="strategi" class="summernote" rows="5"></textarea>
              </div>
              <label>Kebijakan</label>
              <div class="mb-3">
                <textarea type="text" name="kebijakan" id="kebijakan" class="summernote" rows="5"></textarea>
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Modal --}}

{{-- Modal Strategi Pencapaian --}}
<div class="modal fade" id="modal-form4" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h4 class="font-weight-bolder text-info text-gradient">Strategi Pencapaian</h4>
          </div>
          <div class="card-body pt-0">
            @if (($strategi_pencapaian) != null)
              <form role="form text-left" action="{{route('officer.update_strategi_pencapaian', $strategi_pencapaian->id)}}" method="POST">
                @method('put')
                @csrf
                <label>Strategi Pencapaian</label>
                <div class="mb-3">
                  <textarea type="text" name="pencapaian" id="pencapaian" class="summernote" rows="5">
                    {{$strategi_pencapaian->pencapaian}}
                  </textarea>
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">Update</button>
                </div>
              </form>
            @else
              <form role="form text-left" action="{{route('officer.post_strategi_pencapaian')}}" method="POST">
                @csrf
                <label>Strategi Pencapaian</label>
                <div class="mb-3">
                  <textarea type="text" name="pencapaian" id="pencapaian" class="summernote" rows="5"></textarea>
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">Tambah</button>
                </div>
              </form>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Modal --}}
@endsection

@push('style_rjm')
<style>
  td {
    white-space: normal !important;
    word-wrap: break-word;
  }
</style>
@endpush
