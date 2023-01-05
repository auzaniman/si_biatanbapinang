<div class="card mt-4">
  <div class="card-body pt-3 bg-transparent">
    <div class="d-flex justify-content-between">
      <i class="fa text-warning fa-briefcase" aria-hidden="true"></i>
      <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form5" class="btn badge bg-gradient-primary ms-auto">
        <i class="fa fa-plus me-1" aria-hidden="true"></i>
        Tambah
      </button>
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
                <td class="ps-2">
                  <button type="button" class="btn badge bg-gradient-info mb-0" data-bs-toggle="modal" data-bs-target="#modal-form8">Edit</button>
                </td>
              </tr>
              {{-- Modal --}}
              <div class="modal fade" id="modal-form8" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                  <div class="modal-content">
                    <div class="modal-body p-0">
                      <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                          <h4 class="font-weight-bolder text-info text-gradient">Sarana Prasarana</h4>
                        </div>
                        <div class="card-body pt-0">
                          <form role="form text-left" action="{{route('officer.edit_sarana_prasarana', $item->id)}}" method="POST">
                            @method('put')
                            @csrf
                            <label>Jenis Fasilitas Sarana Prasarana</label>
                            <div class="input-group mb-3">
                              <select class="form-control me-3 @error('jenis_fasilitas') is-invalid @enderror" id="jenis_fasilitas" name="jenis_fasilitas">
                                <option value="{{$item->jenis_fasilitas}}">{{$item->jenis_fasilitas}}</option>
                                <option value="akses">Aksesbilitas/Jalan</option>
                                <option value="pendidikan">Pendidikan</option>
                                <option value="kesehatan">Kesehatan</option>
                                <option value="pertanian_perternakan">Pertanian/Perternakan</option>
                                <option value="fasilitas_umum">Fasilitas Umum</option>
                              </select>
                            </div>
                            <label>Nama Barang</label>
                            <div class="input-group mb-3">
                              <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{$item->nama_barang}}">
                            </div>
                            <label>Jumlah Barang</label>
                            <div class="input-group mb-3">
                              <input type="text" name="jumlah_barang" id="jumlah_barang" class="form-control" value="{{$item->jumlah_barang}}">
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

{{-- Modal --}}
<div class="modal fade" id="modal-form5" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h4 class="font-weight-bolder text-info text-gradient">Sarana Prasarana</h4>
          </div>
          <div class="card-body pt-0">
            <form role="form text-left" action="{{route('officer.sarana_prasarana')}}" method="POST">
              @csrf
              <label>Jenis Fasilitas Sarana Prasarana</label>
              <div class="input-group mb-3">
                <select class="form-control me-3 @error('verifikasi') is-invalid @enderror" id="jenis_fasilitas" name="jenis_fasilitas">
                  <option data-display="Pilih Batas Wilayah">-</option>
                  <option value="akses">Aksesbilitas/Jalan</option>
                  <option value="pendidikan">Pendidikan</option>
                  <option value="kesehatan">Kesehatan</option>
                  <option value="pertanian_perternakan">Pertanian/Perternakan</option>
                  <option value="fasilitas_umum">Fasilitas Umum</option>
                </select>
              </div>
              <label>Nama Barang</label>
              <div class="input-group mb-3">
                <input type="text" name="nama_barang" id="nama_barang" class="form-control">
              </div>
              <label>Jumlah Barang</label>
              <div class="input-group mb-3">
                <input type="text" name="jumlah_barang" id="jumlah_barang" class="form-control">
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

