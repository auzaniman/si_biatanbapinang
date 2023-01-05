@extends('superuser.layouts.app')

@section('title')
Struktur Kampung
@endsection

@section('content')
<h5>Struktur Organisasi Pemerintahan Kampung Biatan Bapinang</h5>
<div class="row mt-4">
  {{-- Pemerintahan Pusat --}}
  <div class="col-lg-6 mb-lg-0 mb-4">
    <div class="card shadow-none">
      <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
      Pemerintahan Pusat
      </div>
      <div class="card-body pb-0 pt-2 ps-3">
        <div class="table-responsive">
          <table class="table-borderless align-items-center mb-2">
            <tbody>
              @forelse ($pusat as $item)
                <tr>
                  <td class="align-middle text-sm">{{$item->sub_divisi}}</td>
                  <td class="align-middle text-sm">: {{$item->nama_anggota}}</td>
                </tr>
              @empty
                <tr>
                  <td class="align-middle text-sm">Kepala Kampung</td>
                  <td class="align-middle text-sm">: Heberly</td>
                </tr>
                <tr>
                  <td class="align-middle text-sm">Sekretaris Kampung</td>
                  <td class="align-middle text-sm">: Rifka Philipus</td>
                </tr>
                <tr>
                  <td class="align-middle text-sm">Kaur Pemerintahan</td>
                  <td class="align-middle text-sm">: Septi Eunike. R</td>
                </tr>
                <tr>
                  <td class="align-middle text-sm">Kaur Umum</td>
                  <td class="align-middle text-sm">: Chandra Hariyadi</td>
                </tr>
                <tr>
                  <td class="align-middle text-sm">Kaur Pembangunan</td>
                  <td class="align-middle text-sm">: Marten</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  {{-- Badan Permusyarawatan Kampung --}}
  <div class="col-lg-6 mb-lg-0 mb-4">
    <div class="card shadow-none">
      <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
      Badan Permusyawaratan Kampung
      </div>
      <div class="card-body pb-0 pt-2 ps-3">
        <div class="table-responsive">
          <table class="table-borderless align-items-center mb-2">
            <tbody>
              @forelse ($bpk as $item)
                <tr>
                  <td class="align-middle text-sm">{{$item->sub_divisi}}</td>
                  <td class="align-middle text-sm">: {{$item->nama_anggota}}</td>
                </tr>
              @empty
                <tr>
                  <td class="align-middle text-sm">Kepala BPK</td>
                  <td class="align-middle text-sm">:</td>
                  <td class="align-middle text-sm">Cupin Yusak</td>
                </tr>
                <tr>
                  <td class="align-middle text-sm">Wakil Ketua</td>
                  <td class="align-middle text-sm">:</td>
                  <td class="align-middle text-sm">Sukarman</td>
                </tr>
                <tr>
                  <td class="align-middle text-sm">Sekretsris</td>
                  <td class="align-middle text-sm">:</td>
                  <td class="align-middle text-sm">Sabar</td>
                </tr>
                <tr>
                  <td class="align-middle text-sm">Anggota</td>
                  <td class="align-middle text-sm">:</td>
                  <td class="align-middle text-sm">
                    Evi Septi Miri Dewi
                    <br>
                    Marlinda Klaberi
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-lg-4 mt-0">
  <div class="col-lg-6 mb-lg-0 mb-4">
    {{-- Lembaga Pemberdayaan Masyarakat --}}
    <div class="card mb-4 shadow-none">
      <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
      Lembaga Pemberdayaan Masyarakat
      </div>
      <div class="card-body pb-0 pt-2 ps-3">
        <div class="table-responsive">
          <table class="table-borderless align-items-center mb-2">
            <tbody>
              @forelse ($lpm as $item)
                <tr>
                  <td class="align-middle text-sm">{{$item->sub_divisi}}</td>
                  <td class="align-middle text-sm">: {{$item->nama_anggota}}</td>
                </tr>
              @empty
              <tr>
                <td class="align-middle text-sm">Kepala LPM</td>
                <td class="align-middle text-sm">: Heberly</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Wakil Ketua</td>
                <td class="align-middle text-sm">: Amos Pangeran</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Sekretaris</td>
                <td class="align-middle text-sm">: Yudha Timor</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Bendahara</td>
                <td class="align-middle text-sm">: Karim Mika</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Seksi Agama</td>
                <td class="align-middle text-sm">: Sultan</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Seksi Keamanan, Ketentraman & Ketertiban</td>
                <td class="align-middle text-sm">: Juhari</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Seksi Pendidikan</td>
                <td class="align-middle text-sm">: Sulkarnain</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Seksi Lingkungan Hidup</td>
                <td class="align-middle text-sm">: Julius</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Seksi Kesehatan</td>
                <td class="align-middle text-sm">: Nuradawiyah</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Seksi Pemuda, Olahraga dan Kesenian</td>
                <td class="align-middle text-sm">: Nasir</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Seksi Pembangunan dan Ekonomi</td>
                <td class="align-middle text-sm">: Sarwo</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Seksi Kesejahteraan Sosial</td>
                <td class="align-middle text-sm">: Jamma</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Seksi Pemberdayaan Wanita</td>
                <td class="align-middle text-sm">: Yuyun Yunarti</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
    {{-- Pengurus Posyandu --}}
    <div class="card mb-4 shadow-none">
      <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
      Pengurus Posyandu
      </div>
      <div class="card-body pb-0 pt-2 ps-3">
        <div class="table-responsive">
          <table class="table-borderless align-items-center mb-2">
            <tbody>
              @forelse ($posyandu as $item)
                <tr>
                  <td class="align-middle text-sm">{{$item->sub_divisi}}</td>
                  <td class="align-middle text-sm">: {{$item->nama_anggota}}</td>
                </tr>
              @empty
              <tr>
                <td class="align-middle text-sm">Ketua</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Nursibah</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Sekretaris</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Malah</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Bendahara</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Erni</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Anggota</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">
                  Ny.Suryani
                  <br>
                  Ny.Senna Hati
                  <br>
                  Ny.Santi
                  <br>
                  Ny.Aisyah
                  <br>
                  Ny.Munjayana
                  <br>
                  Ny.Rika Jasmani
                  <br>
                  Ny.Basso Ibrahim
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
    {{-- Karang Taruna --}}
    <div class="card mb-4 shadow-none">
      <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
      Karang Taruna
      </div>
      <div class="card-body pb-0 pt-2 ps-3">
        <div class="table-responsive">
          <table class="table-borderless align-items-center mb-2">
            <tbody>
              @forelse ($kartar as $item)
                <tr>
                  <td class="align-middle text-sm">{{$item->sub_divisi}}</td>
                  <td class="align-middle text-sm">: {{$item->nama_anggota}}</td>
                </tr>
              @empty
              <tr>
                <td class="align-middle text-sm">Ketua</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Yudha Timor</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Wakil Ketua</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Yohanis</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Sekretaris I</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Jayadi Arianto</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Sekretaris II</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Dewi</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Bendahara I</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Jamil</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Bendahara II</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Mardiana</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Anggota</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
    {{-- Kelompok Sadar Wisata --}}
    <div class="card shadow-none">
      <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
      Kelompok Sadar Wisata
      </div>
      <div class="card-body pb-0 pt-2 ps-3">
        <div class="table-responsive">
          <table class="table-borderless align-items-center mb-2">
            <tbody>
              @forelse ($kelsawi as $item)
                <tr>
                  <td class="align-middle text-sm">{{$item->sub_divisi}}</td>
                  <td class="align-middle text-sm">: {{$item->nama_anggota}}</td>
                </tr>
              @empty
              <tr>
                <td class="align-middle text-sm">Ketua</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Wandra Hardianti</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Wakil Ketua</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ikhsan Yunus</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Sekretaris I</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Yuliana Marsyiah</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Sekretaris II</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Basso Ibrahim</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Bendahara I</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Supriyono</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Seksi-seksi</td>
              </tr>
              <tr class="">
                <td class="align-middle text-sm ps-1">• Seksi Atraksi Wisata dan Budaya</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Jamil</td>
              </tr>
              <tr class="">
                <td class="align-middle text-sm ps-1">• Seksi Kebersihan dan Keindahan</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Mashudi</td>
              </tr>
              <tr class="">
                <td class="align-middle text-sm ps-1">• Seksi Pendidikan dan Usaha</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Marten Yohanis</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-lg-0">
    {{-- Ketua RT --}}
    <div class="card mb-4 shadow-none">
      <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
      Ketua RT
      </div>
      <div class="card-body pb-0 pt-2 ps-3">
        <div class="table-responsive">
          <table class="table-borderless align-items-center mb-2">
            <tbody>
              @forelse ($pusat as $item)
                <tr>
                  <td class="align-middle text-sm">{{$item->sub_divisi}}</td>
                  <td class="align-middle text-sm">: {{$item->nama_anggota}}</td>
                </tr>
              @empty
              <tr>
                <td class="align-middle text-sm">Ketua RT 01</td>
                <td class="align-middle text-sm">: Ibung</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Ketua RT 02</td>
                <td class="align-middle text-sm">: Agus Hendra</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Ketua RT 03</td>
                <td class="align-middle text-sm">: Darwis</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
    {{-- Penggerak PKK Kampung --}}
    <div class="card shadow-none">
      <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
      Pengurus Tim Penggerak PKK Kampung
      </div>
      <div class="card-body pb-0 pt-2 ps-3">
        <div class="table-responsive">
          <table class="table-borderless align-items-center mb-2">
            <tbody>
              @forelse ($pkk as $item)
                <tr>
                  <td class="align-middle text-sm">{{$item->sub_divisi}}</td>
                  <td class="align-middle text-sm">: {{$item->nama_anggota}}</td>
                </tr>
              @empty
              <tr>
                <td class="align-middle text-sm">Ketua</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny. Nurhayaty Heberly</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Wakil Ketua</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Evi Septi Miri Dewi Yudhda</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Sekretaris</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Rifka</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Sekretaris II</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Jenny</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Bendahara</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Ida Laila Royana Chandra</td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Pokja I</td>
              </tr>
              <tr class="">
                <td class="align-middle text-sm ps-1">• Ketua</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Hj.Sanawia</td>
              </tr>
              <tr>
                <td class="align-middle text-sm ps-1">• Sekretaris</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Septi Eunika R Bernov</td>
              </tr>
              <tr>
                <td class="align-middle text-sm ps-1">• Anggota</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">
                  Ny.Maslina Amos Pangeran
                  <br>
                  Ny.Samsi
                  <br>
                  Ny.Milati
                  <br>
                  Ny.Noftiani
                  <br>
                  Ny.Mirna
                  <br>
                  Ny.Hayati
                </td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Pokja II</td>
              </tr>
              <tr class="">
                <td class="align-middle text-sm ps-1">• Ketua</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Asimah</td>
              </tr>
              <tr>
                <td class="align-middle text-sm ps-1">• Sekretaris</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Kasmawati</td>
              </tr>
              <tr>
                <td class="align-middle text-sm ps-1">• Anggota</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">
                  Ny.Sumi
                  <br>
                  Ny.Mariana
                  <br>
                  Ny.Besse Nuraini
                  <br>
                  Ny.Yunarti
                  <br>
                  Ny.Darlia
                  <br>
                  Ny.Jumaida
                  <br>
                  Ny.Sandra
                </td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Pokja III</td>
              </tr>
              <tr class="">
                <td class="align-middle text-sm ps-1">• Ketua</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Lusia Wiwin</td>
              </tr>
              <tr>
                <td class="align-middle text-sm ps-1">• Sekretaris</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Marsiah</td>
              </tr>
              <tr>
                <td class="align-middle text-sm ps-1">• Anggota</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">
                  Ny.Rika Jasmani
                  <br>
                  Ny.Hajriwati
                  <br>
                  Ny.Endang
                  <br>
                  Ny.Munjayana
                  <br>
                  Ny.Mardiana
                  <br>
                  Ny.Nasra
                  <br>
                  Ny.Seri Wati
                  <br>
                  Ny.Wagiah
                </td>
              </tr>
              <tr>
                <td class="align-middle text-sm">Pokja IV</td>
              </tr>
              <tr class="">
                <td class="align-middle text-sm ps-1">• Ketua</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Erni</td>
              </tr>
              <tr>
                <td class="align-middle text-sm ps-1">• Sekretaris</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">Ny.Nursibah</td>
              </tr>
              <tr>
                <td class="align-middle text-sm ps-1">• Anggota</td>
                <td class="align-middle text-sm">:</td>
                <td class="align-middle text-sm">
                  Ny.Dewi
                  <br>
                  Ny.Mala
                  <br>
                  Ny.Ratna Ramli
                  <br>
                  Ny.Aisyah
                  <br>
                  Ny.Senna Hati
                  <br>
                  Ny.Suryani
                </td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

