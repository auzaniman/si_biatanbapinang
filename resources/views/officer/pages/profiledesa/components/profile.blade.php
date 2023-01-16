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
              <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form" class="btn badge bg-gradient-primary ms-auto mb-0">
                <i class="fa fa-pencil me-1" aria-hidden="true"></i>
                Edit
              </button>
            </div>
            <h5 class="text-capitalize">Sejarah Kampung</h5>
            @if (($profil) != null)
              @if ($profil->sejarah_kampung != null)
                <p class="mb-3">{!! html_entity_decode($profil->sejarah_kampung) !!}</p>
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
      @forelse ($struktur as $item)
      <li>	Kepala Kampung  X	: {{$item->nama_anggota}}</li>
      @empty

      @endforelse
    </ol>
    <div class="card px-0 mb-4">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <div class="d-flex justify-content-between">
          <i class="fa text-warning fa-money" aria-hidden="true"></i>
          <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form1" class="btn badge bg-gradient-primary ms-auto mb-0">
            <i class="fa fa-pencil me-1" aria-hidden="true"></i>
            Edit
          </button>
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
          <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form2" class="btn badge bg-gradient-primary ms-auto mb-0">
            <i class="fa fa-pencil me-1" aria-hidden="true"></i>
            Edit
          </button>
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

{{-- Modal Sejarah Kampung --}}
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h4 class="font-weight-bolder text-info text-gradient">Sejarah Kampung</h4>
          </div>
          <div class="card-body pt-0">
            @if (($profil) != null)
              @if ($profil->sejarah_kampung != null)
                <form action="{{route('officer.edit_profile_kampung', $profil->id)}}" method="POST">
                  @method('put')
                  @csrf
                  <label>Gunakan tanda baca yang benar</label>
                  <div class="mb-3">
                    <textarea class="summernote" name="sejarah_kampung">{{$profil->sejarah_kampung}}</textarea>
                  </div>
                  <div class="mb-3" hidden>
                    <textarea class="summernote" name="kondisi_ekonomi">{{$profil->kondisi_ekonomi}}</textarea>
                  </div>
                  <div class="mb-3" hidden>
                    <textarea class="summernote" name="kondisi_pemerintah">{{$profil->kondisi_pemerintah}}</textarea>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">update</button>
                  </div>
                </form>
              @else
                <form action="{{route('officer.edit_profile_kampung', $profil->id)}}" method="POST">
                  @method('put')
                  @csrf
                  <label>Gunakan tanda baca yang benar</label>
                  <div class="mb-3">
                    <textarea class="summernote" name="sejarah_kampung">{{$profil->sejarah_kampung}}</textarea>
                  </div>
                  <div class="mb-3" hidden>
                    <textarea class="summernote" name="kondisi_ekonomi">{{$profil->kondisi_ekonomi}}</textarea>
                  </div>
                  <div class="mb-3" hidden>
                    <textarea class="summernote" name="kondisi_pemerintah">{{$profil->kondisi_pemerintah}}</textarea>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">update</button>
                  </div>
                </form>
              @endif
            @else
              <form role="form text-left" action="{{route('officer.profile_kampung')}}" method="POST">
                @csrf
                <label>Gunakan tanda baca yang benar</label>
                <div class="mb-3">
                  <textarea class="summernote" name="sejarah_kampung"></textarea>
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">update</button>
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

{{-- Modal Kondisi Ekonomi --}}
<div class="modal fade" id="modal-form1" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h4 class="font-weight-bolder text-info text-gradient">Kondisi Ekonomi</h4>
          </div>
          <div class="card-body pt-0">
            @if (($profil) != null)
              @if ($profil->kondisi_ekonomi != null)
                <form action="{{route('officer.edit_profile_kampung', $profil->id)}}" method="POST">
                  @method('put')
                  @csrf
                  <label>Gunakan tanda baca yang benar</label>
                  <div class="mb-3">
                    <textarea class="summernote" name="kondisi_ekonomi">{{$profil->kondisi_ekonomi}}</textarea>
                  </div>
                  <div class="mb-3" hidden>
                    <textarea class="summernote" name="sejarah_kampung">{{$profil->sejarah_kampung}}</textarea>
                  </div>
                  <div class="mb-3" hidden>
                    <textarea class="summernote" name="kondisi_pemerintah">{{$profil->kondisi_pemerintah}}</textarea>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">update</button>
                  </div>
                </form>
              @else
                <form action="{{route('officer.edit_profile_kampung', $profil->id)}}" method="POST">
                  @method('put')
                  @csrf
                  <label>Gunakan tanda baca yang benar</label>
                  <div class="mb-3">
                    <textarea class="summernote" name="kondisi_ekonomi">{{$profil->kondisi_ekonomi}}</textarea>
                  </div>
                  <div class="mb-3" hidden>
                    <textarea class="summernote" name="sejarah_kampung">{{$profil->sejarah_kampung}}</textarea>
                  </div>
                  <div class="mb-3" hidden>
                    <textarea class="summernote" name="kondisi_pemerintah">{{$profil->kondisi_pemerintah}}</textarea>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">update</button>
                  </div>
                </form>
              @endif
            @else
              <form role="form text-left" action="{{route('officer.profile_kampung')}}" method="POST">
                @csrf
                <label>Gunakan tanda baca yang benar</label>
                <div class="mb-3">
                  <textarea class="summernote" name="kondisi_ekonomi"></textarea>
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

{{-- Modal Kondisi Pemerintah --}}
<div class="modal fade" id="modal-form2" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h4 class="font-weight-bolder text-info text-gradient">Kondisi Pemerintah Kampung</h4>
          </div>
          <div class="card-body pt-0">
            @if (($profil) != null)
              @if ($profil->kondisi_pemerintah != null)
                <form action="{{route('officer.edit_profile_kampung', $profil->id)}}" method="POST">
                  @method('put')
                  @csrf
                  <label>Gunakan tanda baca yang benar</label>
                  <div class="mb-3">
                    <textarea class="summernote" name="kondisi_pemerintah">{{$profil->kondisi_pemerintah}}</textarea>
                  </div>
                  <div class="mb-3" hidden>
                    <textarea class="summernote" name="sejarah_kampung">{{$profil->sejarah_kampung}}</textarea>
                  </div>
                  <div class="mb-3" hidden>
                    <textarea class="summernote" name="kondisi_ekonomi">{{$profil->kondisi_ekonomi}}</textarea>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">update</button>
                  </div>
                </form>
              @else
                <form action="{{route('officer.edit_profile_kampung', $profil->id)}}" method="POST">
                  @method('put')
                  @csrf
                  <label>Gunakan tanda baca yang benar</label>
                  <div class="mb-3">
                    <textarea class="summernote" name="kondisi_pemerintah">{{$profil->kondisi_pemerintah}}</textarea>
                  </div>
                  <div class="mb-3" hidden>
                    <textarea class="summernote" name="sejarah_kampung">{{$profil->sejarah_kampung}}</textarea>
                  </div>
                  <div class="mb-3" hidden>
                    <textarea class="summernote" name="kondisi_ekonomi">{{$profil->kondisi_ekonomi}}</textarea>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">update</button>
                  </div>
                </form>
              @endif
            @else
              <form role="form text-left" action="{{route('officer.profile_kampung')}}" method="POST">
                @csrf
                <label>Gunakan tanda baca yang benar</label>
                <div class="mb-3">
                  <textarea class="summernote" name="kondisi_pemerintah"></textarea>
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
