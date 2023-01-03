@extends('superuser.layouts.app')

@section('title')
Profil Kampung
@endsection

@section('content')
{{-- Foto Kampung --}}
<div class="row">
  <div class="col-lg-12 mb-lg-0">
    <div class="card">
      <div class="card-body p-0 bg-transparent">
        <div class="row">
          <div class="col-lg-12">
            {{-- @if ($setprofile != null)
            <img src="{{ asset('storage/'.$setprofile->img_desa) }}" class="img-fluid border-radius-xl" alt="foto kampung">
            @else
            <img src="" class="img-fluid border-radius-xl" alt="foto kampung">
            @endif --}}

            <img src="{{url('frontend/assets/img/2.jpg')}}" class="img-fluid border-radius-xl" alt="foto kampung">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Video dan Deskripsi --}}
<div class="row mt-4">
  <div class="col-lg-6 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <div class="row">
          {{-- <div class="col-lg-5">
            <h6 class="text-capitalize">Video Kampung</h6>
            <div class="ratio ratio-16x9">
              @if ($setprofile != null)
              <iframe width="300" height="220" src="{{$setprofile->video_desa}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              @else
              <iframe width="300" height="220" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              @endif
            </div>
          </div> --}}
          <div class="col-lg-12">
            <div class="d-flex justify-content-between">
              <i class="fa text-warning fa-history" aria-hidden="true"></i>

            </div>
            <h5 class="text-capitalize">Sejarah Kampung</h5>
            @if (($profil) != null)
              @if ($profil->sejarah_kampung != null)
                <p class="mb-3">{!! html_entity_decode($profil->sejarah_kampung) !!}</p>
              @else
              @endif
            @else
              <p class="mb-3">
                Biatan Bapinang merupakansalah satu dari empat perkampungan suku Dayak asli yang ada di wilayah Kecamatan Biatan, sehingga dapat dikatakan bahwa Kampung Biatan Bapinang ini adalah Perkampungan yang dibangun dari perkembangan peradaban adat suku yang sudah lama dan turun temurun menempati kampung tersebut.
                <br>
                Menurut cerita kampung ini dibangun oleh kesatuan Suku Dayak Basap, hal ini terlihat sampai sekarang yakni sebagian besar komunitas yang mendiami kampung tersebut adalalah dari suku Dayak Basap.
                <br>
                Sebagaimana sejarah perkampungan suku dayak di pedalaman kalimantan, Perkampungan tidak tahu pasti kapan berdirinya, oleh siapa dan dari mana asal-usul kampung ini secara pasti memang belum ada penelitian oleh para ahli. Namun berdasarkan Cerita dari sesepuh kampung, dapat kami gambarkan bahwa Kampung Biatan Bapinang, pada mulanya bernama “Nuntulung”, nama itu diambil dari pohon semak-semak sejenis “Keladi” yang pada saat itu banyak tumbuh disekitar perkampungan tersebut, oleh masyarakat setempat rumpun pohon jenis keladi itu dinamakan “BINTULUNG”
                <br>
                Sekelompok masyarakat yang tinggal di kampung itu bukan berasal dari situ namun konon berasal dari Perbukitan batu/Gua  batu  yang  hidupnya masih nomaden/berpindah-pindah dari tempat satu ke tempat lainnya tergantung dimana mereka mendapatkan Rizki dan tidak mendapat gangguan dari pihak-pihak lain, sebagian yang tidak berpindah lagi, menetap di kampung itu.
                <br>
                Seiring dengan penataan wilayah Indonesia Pasca Indonesia merdeka, termasuk dalam hal ini Pulau Kalimantan, untuk itu guna perbaikan administrasi, oleh Pejabat Kecamatan Talisayan Nama kampung itu diubah menjadi Kampung Biatan Bapinang, barang kali karena masih satu jalur dengan sungai Biatan.
                <br>
                Dalam perkembanganya, Suku Dayak yang tinggal di kampung ini cukup terbuka, sehingga mereka juga menerima pendatang dari luar, maka sampai saat ini bukan hanya suku dayak basap saja yang tinggal di sana, namun juga dari suku suku lain, yang hidup berdampingan, saling menghargai dan menghormati antar keyakinan yang berlainan. Sekarang ini penduduk kampung Biatan Bapinang sudah bisa di katakan heterogen karena ada suku-suku lain yang tinggal di kampug itu, diantaranya suku dayak bugis, jawa, sunda, ntb, flores, bali, batak dll. dengan aneka ragam adat dan budayanya juga.
                <br>
                Dalam bidang keagamaan, Masyarakat Kampung Biatan Bapinang pada awalnya adalah penganut agama suku/animisme, hal ini nampak dari tata cara kebiasaan orang-orang tua yang masih nampak sekarang ini seperti adat Bakudung/ Erau, Istilah “Kampunan” dan lain-lain yang masih melekat sampai sekarang, baru pada dekade tujuh puluhan (sektar tahun 1976) missionaris agama Kristen (Kingmi) masuk ke Kampung Biatan Bapinang, oleh karenanya sebagian besar masyarakat di sana menganut agama Kristen.
                <br>
                Dengan masuknya suku Bugis ke Kampung Biatan Bapinang, berpengaruh juga terhadap adat-istiadat dan agama, maka untuk saat ini selain Agama Kristen agama Islam juga berkembang pesat. Perbedaan suku dan agama bukan menjadi penghalang masyarakat untuk bersatu, mereka hidup berdampingan satu sama lainnya, saling membantu dan saling menghormati.

              </p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-lg-0">
    <div class="card px-0 mb-4">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa text-warning fa-clock-o" aria-hidden="true"></i>
        <h5 class="text-capitalize">Sejarah Pemerintahan</h5>
        <p>
          Menurut sumber yang telah dihimpun dari tokoh masyarakat yang paling awal menempati Lokasi Kampung Biatan Bapinang, sepanjang sejarahnya telah dipimpin oleh:
        </p>
      </div>
    </div>
    <ol class="gradient-list">
      <li>	Kepala Kampung  I	: Siwai ( 1983 s/d 1988 )</li>
      <li>	Kepala Kampung II	: Jhon. L (1989 s/d 1994)</li>
      <li>	Kepala Kampung III	: David (1995 s/d) 2000)</li>
      <li>	Kepala Kampung IV	: Riansyah	(2001 s/d 2005)</li>
      <li>	Kepala Kampung V	: Thomas. M	(2006 s/d 2009)</li>
      <li>	Kepala Kampung(Pj)	:  Tri Suyanto, S.IP	(2010)</li>
      <li>	Kepala Kampung VII	:  Ramli	( 2011 s/d2017 )</li>
      <li>	Kepala Kampung VIII (Pj)	:  Tri Suyanto, S.IP	(2017)</li>
      <li>	Kepala Kampung  IX	: Heberly	(2018 s/d sekarang)</li>
    </ol>
    <div class="card px-0 mb-4">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <div class="d-flex justify-content-between">
          <i class="fa text-warning fa-money" aria-hidden="true"></i>

        </div>
        <h5 class="text-capitalize">Kondisi Ekonomi</h5>
        @if (($profil) != null)
          @if ($profil->kondisi_ekonomi != null)
            <p class="mb-3">{!! html_entity_decode($profil->kondisi_ekonomi) !!}</p>
          @else
            <p>
              Kondisi ekonomi masyarakat Kampung Biatan Bapinangsecara kasat mata terlihat jelas perbedaannya antara Rumah Tangga yang berkategori miskin, sangat miskin, sedang dan kaya. Hal ini disebabkan karena mata pencahariannya di sektor- sektor usaha yang berbeda-beda pula, sebagian besar di sektor non formal seperti buruh Harian Lepas Buruh bangunan, buruh tani, petani Ladang, perkebunan karet dan sawit dan sebagian kecil di sektor formal seperti PNS pemda, Honorer, guru, tenaga medis, dll.
            </p>
          @endif
        @else
          <p>
            Kondisi ekonomi masyarakat Kampung Biatan Bapinangsecara kasat mata terlihat jelas perbedaannya antara Rumah Tangga yang berkategori miskin, sangat miskin, sedang dan kaya. Hal ini disebabkan karena mata pencahariannya di sektor- sektor usaha yang berbeda-beda pula, sebagian besar di sektor non formal seperti buruh Harian Lepas Buruh bangunan, buruh tani, petani Ladang, perkebunan karet dan sawit dan sebagian kecil di sektor formal seperti PNS pemda, Honorer, guru, tenaga medis, dll.
          </p>
        @endif
      </div>
    </div>
    <div class="card px-0">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <div class="d-flex justify-content-between">
          <i class="fa text-warning fa-envira" aria-hidden="true"></i>

        </div>
        <h5 class="text-capitalize">Kondisi Pemerintah Kampung</h5>
        @if (($profil) != null)
          @if ($profil->kondisi_pemerintah != null)
            <p class="mb-3">{!! html_entity_decode($profil->kondisi_pemerintah) !!}</p>
          @else
            <ul class="ps-4">
              <li>	Pembagian Wilayah Kampung
              Pembagian wilayah Kampung Biatan Bapinang dibagi menjadi 3 (tiga) RT, dan masing-masing RT tidak ada pembagian wilayah secara khusus, jadi di setiap RT ada yang mempunyai wilayah pertanian dan perkebunan, sementara pusat Kampung berada di RT 001 (satu) dan RT 002 (dua), setiap RT dipimpin oleh seorang Ketua RT.
              </li>
              <li>	Struktur Organisasi Pemerintah Kampung (SOPK)
              Struktur Organisasi Kampung Biatan Bapinang Kecamatan Biatan selengkapnya disajikan dalam gambar sebagai berikut :
              </li>
            </ul>
          @endif
        @else
          <ul class="ps-4">
            <li>	Pembagian Wilayah Kampung
            Pembagian wilayah Kampung Biatan Bapinang dibagi menjadi 3 (tiga) RT, dan masing-masing RT tidak ada pembagian wilayah secara khusus, jadi di setiap RT ada yang mempunyai wilayah pertanian dan perkebunan, sementara pusat Kampung berada di RT 001 (satu) dan RT 002 (dua), setiap RT dipimpin oleh seorang Ketua RT.
            </li>
            <li>	Struktur Organisasi Pemerintah Kampung (SOPK)
            Struktur Organisasi Kampung Biatan Bapinang Kecamatan Biatan selengkapnya disajikan dalam gambar sebagai berikut :
            </li>
          </ul>
        @endif

      </div>
    </div>
  </div>
</div>

{{-- Letak Geografis --}}
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0">
    <div class="card px-0">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <div class="d-flex justify-content-between">
          <i class="fa text-warning fa-map-marker" aria-hidden="true"></i>

        </div>

        <h5 class="text-capitalize">Letak Geografis</h5>
        <p>Kampung   Biatan   Bapinang   merupakansatu diantara  delapan Kampung di Kecamatan Biatan Kabupaten Berau Propinsi Kalimantan Timur. </p>
        <div class="row">
          <div class="col-lg-5 mb-lg-0 mb-4">
            <ol class="ps-3">
              <li class="font-weight-bold">Batas-batas wilayah sebagai berikut:</li>
              <table class="table-borderless">
                <tbody>
                  @forelse ($geografis as $item)
                    @if ($item->batas_wilayah && $item->keterangan_batas == null)
                      <tr>
                        <td>• Sebelah Utara</td>
                        <td>:</td>
                        <td class="ps-1">Tabalar Muara</td>
                      </tr>
                      <tr>
                        <td>• Sebelah Timur</td>
                        <td>:</td>
                        <td class="ps-1">Kampung Biatan Bapinang <br> Biatan Biru</td>
                      </tr>
                      <tr>
                        <td>• Sebelah Barat</td>
                        <td>:</td>
                        <td class="ps-1">Kampung Tabalar Ulu</td>
                      </tr>
                      <tr>
                        <td>• Sebelah Selatan</td>
                        <td>:</td>
                        <td class="ps-1">Kutai Timur</td>
                      </tr>
                    @else
                      <tr>
                        <td>• Sebelah {{$item->batas_wilayah}}</td>
                        <td>:</td>
                        <td class="ps-1">{{$item->keterangan_batas}}</td>
                      </tr>
                    @endif
                  @empty
                    <tr>
                      <td>• Sebelah Utara</td>
                      <td>:</td>
                      <td class="ps-1">Tabalar Muara</td>
                    </tr>
                    <tr>
                      <td>• Sebelah Timur</td>
                      <td>:</td>
                      <td class="ps-1">Kampung Biatan Bapinang <br> Biatan Biru</td>
                    </tr>
                    <tr>
                      <td>• Sebelah Barat</td>
                      <td>:</td>
                      <td class="ps-1">Kampung Tabalar Ulu</td>
                    </tr>
                    <tr>
                      <td>• Sebelah Selatan</td>
                      <td>:</td>
                      <td class="ps-1">Kutai Timur</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </ol>
          </div>
          <div class="col-lg-7 mb-lg-0 mb-4">
            <ol start="2">
              <li class="font-weight-bold">Orbitasi:</li>
              <table class="table-borderless">
                <tbody>
                  @forelse ($orbitasi as $item)
                    @if ($item->orbitasi && $item->keterangan_orbitasi == null)
                      <tr>
                        <td>• Jarak Kampung ke ibu kota Kecamatan</td>
                        <td>:</td>
                        <td class="ps-1">8 Km</td>
                      </tr>
                      <tr>
                        <td>• Lama tempuh ke ibu kota kecamatan</td>
                        <td>:</td>
                        <td class="ps-1">15 menit</td>
                      </tr>
                      <tr>
                        <td>• Kendaraan umum ke ibu kota kecamatan</td>
                        <td>:</td>
                        <td class="ps-1">Kendaraan Darat</td>
                      </tr>
                      <tr>
                        <td>• Jarak ke ibu Kota Kecamatan</td>
                        <td>:</td>
                        <td class="ps-1">125 Km</td>
                      </tr>
                      <tr>
                        <td>• Lama tempuh ke ibu Kota Kabupaten</td>
                        <td>:</td>
                        <td class="ps-1">240 menit</td>
                      </tr>
                      <tr>
                        <td>• Kendaraan umum ke ibu kota Kabupaten</td>
                        <td>:</td>
                        <td class="ps-1">Kendaraan Darat</td>
                      </tr>
                    @else
                      <tr>
                        <td>• {{$item->orbitasi}}</td>
                        <td>:</td>
                        <td class="ps-1">{{$item->keterangan_orbitasi}}</td>
                      </tr>
                    @endif
                  @empty
                    <tr>
                      <td>• Jarak Kampung ke ibu kota Kecamatan</td>
                      <td>:</td>
                      <td class="ps-1">8 Km</td>
                    </tr>
                    <tr>
                      <td>• Lama tempuh ke ibu kota kecamatan</td>
                      <td>:</td>
                      <td class="ps-1">15 menit</td>
                    </tr>
                    <tr>
                      <td>• Kendaraan umum ke ibu kota kecamatan</td>
                      <td>:</td>
                      <td class="ps-1">Kendaraan Darat</td>
                    </tr>
                    <tr>
                      <td>• Jarak ke ibu Kota Kecamatan</td>
                      <td>:</td>
                      <td class="ps-1">125 Km</td>
                    </tr>
                    <tr>
                      <td>• Lama tempuh ke ibu Kota Kabupaten</td>
                      <td>:</td>
                      <td class="ps-1">240 menit</td>
                    </tr>
                    <tr>
                      <td>• Kendaraan umum ke ibu kota Kabupaten</td>
                      <td>:</td>
                      <td class="ps-1">Kendaraan Darat</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Sarana Prasarana --}}
<div class="card mt-4">
  <div class="card-body pt-3 bg-transparent">
    <div class="d-flex justify-content-between">
      <i class="fa text-warning fa-briefcase" aria-hidden="true"></i>
    </div>
    <h5>Sarana Prasarana Kampung</h5>
    <div class="row mt-4">
      <div class="col-lg-12 mb-lg-0">
        <div class="d-flex justify-content-between">
          <h6><i class="fa text-success fa-road me-2" aria-hidden="true"></i>Jalan</h6>
        </div>

        <p>Jaringan jalan yang ada di Kampung Biatan Bapinang yaitu jalan pemukiman RT.01 dan 02 yang merupakan jalan poros Tanjung Redeb-Talisayan. Jalan pemukiman yang lebar dan dapat dilalui oleh mobil. Sedangkan jalan emukiman RT.03 merupakan jalan menuju wisata Air Panas. Pembangunan jalan Biata Bapinang fokus pada peningkatan jalan usaha tani, serta oenimbunan dengan pasir dan batu (sirtu)</p>
        <table class="table-borderless">
          <tbody>
            @forelse ($sarana_jalan as $item)
              <tr>
                <td class="ps-2">• {{$item->nama_barang}}</td>
                <td>:</td>
                <td class="ps-1">{{$item->jumlah_barang}}</td>
              </tr>
            @empty
              <tr>
                <td class="ps-2">• Panjang jalan poros</td>
                <td>:</td>
                <td class="ps-1">5 km</td>
              </tr>
              <tr>
                <td class="ps-2">• Panjang jalan kampung</td>
                <td>:</td>
                <td class="ps-1">4 km</td>
              </tr>
              <tr>
                <td class="ps-2">• Panjang jalan kampung yang baik</td>
                <td>:</td>
                <td class="ps-1">2 km</td>
              </tr>
              <tr>
                <td class="ps-2">• Panjang jalan kampung yang rusak</td>
                <td>:</td>
                <td class="ps-1">2 km</td>
              </tr>
              <tr>
                <td class="ps-2">• Panjang jalan poros yang rusak</td>
                <td>:</td>
                <td class="ps-1">2 km</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <h6><i class="fa text-success fa-graduation-cap me-2" aria-hidden="true"></i>Pendidikan</h6>
        <table class="table-borderless">
          <tbody>
            @forelse ($sarana_pendidikan as $item)
              <tr>
                <td class="ps-2">• {{$item->nama_barang}}</td>
                <td>:</td>
                <td class="ps-1">{{$item->jumlah_barang}}</td>
              </tr>
            @empty
              <tr>
                <td class="ps-2">• Gedung SD</td>
                <td>:</td>
                <td class="ps-1">1 Unit 3 ruangan </td>
              </tr>
              <tr>
                <td class="ps-2">• Gedung SMP</td>
                <td>:</td>
                <td class="ps-1">1 Unit 14 ruangan </td>
              </tr>
              <tr>
                <td class="ps-2">• Gedung SMA</td>
                <td>:</td>
                <td class="ps-1">-</td>
              </tr>
              <tr>
                <td class="ps-2">• Gedung PAUD</td>
                <td>:</td>
                <td class="ps-1">1 Unit 3 ruangan </td>
              </tr>
              <tr>
                <td class="ps-2">• Gedung TK</td>
                <td>:</td>
                <td class="ps-1">-</td>
              </tr>
              <tr>
                <td class="ps-2">• Gedung TPA</td>
                <td>:</td>
                <td class="ps-1">1 Unit</td>
              </tr>
              <tr>
                <td class="ps-2">• Guru SD</td>
                <td>:</td>
                <td class="ps-1">12 Orang</td>
              </tr>
              <tr>
                <td class="ps-2">• Guru SMP</td>
                <td>:</td>
                <td class="ps-1">13 Orang</td>
              </tr>
              <tr>
                <td class="ps-2">• Guru SMA</td>
                <td>:</td>
                <td class="ps-1">-</td>
              </tr>
              <tr>
                <td class="ps-2">• Guru PAUD</td>
                <td>:</td>
                <td class="ps-1">5 Orang</td>
              </tr>
              <tr>
                <td class="ps-2">• Guru TK</td>
                <td>:</td>
                <td class="ps-1">-</td>
              </tr>
              <tr>
                <td class="ps-2">• Guru TPA</td>
                <td>:</td>
                <td class="ps-1">5 Orang</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      <div class="col-lg-6 mb-lg-0">
        <h6><i class="fa text-success fa-hospital-o me-2" aria-hidden="true"></i>Kesehatan</h6>
        <table class="table-borderless">
          <tbody>
            @forelse ($sarana_kesehatan as $item)
              <tr>
                <td class="ps-2">• {{$item->nama_barang}}</td>
                <td>:</td>
                <td class="ps-1">{{$item->jumlah_barang}}</td>
              </tr>
            @empty
              <tr>
                <td class="ps-2">• Gedung Puskesmas Pembantu</td>
                <td>:</td>
                <td class="ps-1">1 Unit</td>
              </tr>
              <tr>
                <td class="ps-2">• Gedung Polindes</td>
                <td>:</td>
                <td class="ps-1">1 Unit</td>
              </tr>
              <tr>
                <td class="ps-2">• Gedung Posyandu</td>
                <td>:</td>
                <td class="ps-1">1 Unit</td>
              </tr>
              <tr>
                <td class="ps-2">• Mantri Kesehatan</td>
                <td>:</td>
                <td class="ps-1">1 Orang</td>
              </tr>
              <tr>
                <td class="ps-2">• Bidan Kesehatan</td>
                <td>:</td>
                <td class="ps-1">1 Orang</td>
              </tr>
              <tr>
                <td class="ps-2">• Dukun Kesehatan</td>
                <td>:</td>
                <td class="ps-1">-</td>
              </tr>
              <tr>
                <td class="ps-2">• Kader Posyandu</td>
                <td>:</td>
                <td class="ps-1">10 Orang</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <h6><i class="fa text-success fa-building me-2" aria-hidden="true"></i>Sarana/Prasarana Lainnya</h6>
        <table class="table-borderless">
          <tbody>
            @forelse ($sarana_umum as $item)
              <tr>
                <td class="ps-2">• {{$item->nama_barang}}</td>
                <td>:</td>
                <td class="ps-1">{{$item->jumlah_barang}}</td>
              </tr>
            @empty
              <tr>
                <td class="ps-2">• Rumah Penduduk</td>
                <td>:</td>
                <td class="ps-1"> </td>
              </tr>
              <tr>
                <td class="ps-2">• Masjid</td>
                <td>:</td>
                <td class="ps-1">1 Buah</td>
              </tr>
              <tr>
                <td class="ps-2">• Mushola</td>
                <td>:</td>
                <td class="ps-1">-</td>
              </tr>
              <tr>
                <td class="ps-2">• Gereja Katolik</td>
                <td>:</td>
                <td class="ps-1">-</td>
              </tr>
              <tr>
                <td class="ps-2">• Gereja Protestan</td>
                <td>:</td>
                <td class="ps-1">1 Unit</td>
              </tr>
              <tr>
                <td class="ps-2">• Kantor Kampung</td>
                <td>:</td>
                <td class="ps-1">1 Unit</td>
              </tr>
              <tr>
                <td class="ps-2">• Balai Kampung</td>
                <td>:</td>
                <td class="ps-1">1 Unit</td>
              </tr>
              <tr>
                <td class="ps-2">• Balai Adat</td>
                <td>:</td>
                <td class="ps-1"> </td>
              </tr>
              <tr>
                <td class="ps-2">• Penggilingan Padi</td>
                <td>:</td>
                <td class="ps-1">1 Unit</td>
              </tr>
              <tr>
                <td class="ps-2">• Lapangan Voli</td>
                <td>:</td>
                <td class="ps-1">1 Unit</td>
              </tr>
              <tr>
                <td class="ps-2">• Lapangan Bulu Tangkis</td>
                <td>:</td>
                <td class="ps-1">1 Unit</td>
              </tr>
              <tr>
                <td class="ps-2">• Lapangan Sepak Bola</td>
                <td>:</td>
                <td class="ps-1">-</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      <div class="col-lg-6 mb-lg-0 mb-4">
        <h6><i class="fa text-success fa-leaf me-2" aria-hidden="true"></i>Pertanian/Perternakan</h6>
        <table class="table-borderless">
          <tbody>
            @forelse ($sarana_pertanian as $item)
              <tr>
                <td class="ps-2">• {{$item->nama_barang}}</td>
                <td>:</td>
                <td class="ps-1">{{$item->jumlah_barang}}</td>
              </tr>
            @empty
              <tr>
                <td class="ps-2">• Luas Tanah Padi GOGO Potensi</td>
                <td>:</td>
                <td class="ps-1">500 Ha</td>
              </tr>
              <tr>
                <td class="ps-2">• Luas Tanah Garapan Tahun Ini</td>
                <td>:</td>
                <td class="ps-1">150 Ha</td>
              </tr>
              <tr>
                <td class="ps-2">• Luas Tanah Pertanian Ladang</td>
                <td>:</td>
                <td class="ps-1">150 Ha</td>
              </tr>
              <tr>
                <td class="ps-2">• Lahan Perkebunan Kelapa Sawit</td>
                <td>:</td>
                <td class="ps-1">400 Ha</td>
              </tr>
              <tr>
                <td class="ps-2">• Luas Kebun Lada/Merica</td>
                <td>:</td>
                <td class="ps-1">150 Ha</td>
              </tr>
              <tr>
                <td class="ps-2">• Luas Kebun Kopi</td>
                <td>:</td>
                <td class="ps-1">1 Ha</td>
              </tr>
              <tr>
                <td class="ps-2">• Luas Kebun Kakau</td>
                <td>:</td>
                <td class="ps-1">3 Ha</td>
              </tr>
              <tr>
                <td class="ps-2">• Jumlah Ayam</td>
                <td>:</td>
                <td class="ps-1">1150 Ekor</td>
              </tr>
              <tr>
                <td class="ps-2">• Jumlah Bebek</td>
                <td>:</td>
                <td class="ps-1">50 Ekor</td>
              </tr>
              <tr>
                <td class="ps-2">• Jumlah Kambing</td>
                <td>:</td>
                <td class="ps-1">10 Ekor</td>
              </tr>
              <tr>
                <td class="ps-2">• Jumlah Sapi</td>
                <td>:</td>
                <td class="ps-1">20 Ekor/td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@push('style_ol')
<style>
  ol.gradient-list > li::before, ol.gradient-list > li {
    box-shadow: 0.25rem 0.25rem 0.6rem rgba(0, 0, 0, 0.05), 0 0.5rem 1.125rem rgba(75, 0, 0, 0.05);
  }

  ol.gradient-list {
    counter-reset: gradient-counter;
    list-style: none;
    margin: 1.75rem 0;
    padding-left: 1rem;
  }
  ol.gradient-list > li {
    background: white;
    border-radius: 0 0.5rem 0.5rem 0.5rem;
    counter-increment: gradient-counter;
    margin-top: 1rem;
    min-height: 3rem;
    padding: 1rem 1rem 1rem 3rem;
    position: relative;
  }
  ol.gradient-list > li::before, ol.gradient-list > li::after {
    background: linear-gradient(135deg, #83e4e2 0%, #a2ed56 100%);
    border-radius: 1rem 1rem 0 1rem;
    content: "";
    height: 2.5rem;
    left: -1rem;
    overflow: hidden;
    position: absolute;
    top: -1rem;
    width: 2.5rem;
  }
  ol.gradient-list > li::before {
    align-items: flex-end;
    content: counter(gradient-counter);
    color: #1d1f20;
    display: flex;
    font: 900 1.5em/1 "Montserrat";
    justify-content: flex-end;
    padding: 0.125em 0.25em;
    z-index: 1;
  }
  ol.gradient-list > li:nth-child(10n+1):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.2) 0%, rgba(253, 220, 50, 0.2) 100%);
  }
  ol.gradient-list > li:nth-child(10n+2):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.4) 0%, rgba(253, 220, 50, 0.4) 100%);
  }
  ol.gradient-list > li:nth-child(10n+3):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.6) 0%, rgba(253, 220, 50, 0.6) 100%);
  }
  ol.gradient-list > li:nth-child(10n+4):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.8) 0%, rgba(253, 220, 50, 0.8) 100%);
  }
  ol.gradient-list > li:nth-child(10n+5):before {
    background: linear-gradient(135deg, #a2ed56 0%, #fddc32 100%);
  }
  ol.gradient-list > li:nth-child(10n+6):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.8) 0%, rgba(253, 220, 50, 0.8) 100%);
  }
  ol.gradient-list > li:nth-child(10n+7):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.6) 0%, rgba(253, 220, 50, 0.6) 100%);
  }
  ol.gradient-list > li:nth-child(10n+8):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.4) 0%, rgba(253, 220, 50, 0.4) 100%);
  }
  ol.gradient-list > li:nth-child(10n+9):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.2) 0%, rgba(253, 220, 50, 0.2) 100%);
  }
  ol.gradient-list > li:nth-child(10n+10):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0) 0%, rgba(253, 220, 50, 0) 100%);
  }
  ol.gradient-list > li + li {
    margin-top: 2rem;
  }
</style>
@endpush
