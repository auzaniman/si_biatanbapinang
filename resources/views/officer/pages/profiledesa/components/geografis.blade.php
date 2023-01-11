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
              <div class="d-flex justify-content-between">
                <li class="font-weight-bold">Batas-batas wilayah sebagai berikut:</li>
                <div>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form4" class="btn badge bg-gradient-primary ms-auto mb-0">
                    <i class="fa fa-plus me-1" aria-hidden="true"></i>
                    Edit
                  </button>
                </div>
              </div>
              <table class="table-borderless">
                <tbody>
                  @if (($geografis) != null)
                    <tr>
                      <td>• Sebelah Utara</td>
                      <td>:</td>
                      <td class="ps-1">{{$geografis->sebelah_utara}}</td>
                    </tr>
                    <tr>
                      <td>• Sebelah Timur</td>
                      <td>:</td>
                      <td class="ps-1">{{$geografis->sebelah_timur}}</td>
                    </tr>
                    <tr>
                      <td>• Sebelah Barat</td>
                      <td>:</td>
                      <td class="ps-1">{{$geografis->sebelah_barat}}</td>
                    </tr>
                    <tr>
                      <td>• Sebelah Selatan</td>
                      <td>:</td>
                      <td class="ps-1">{{$geografis->sebelah_selatan}}</td>
                    </tr>
                  @else
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
                  @endif
                </tbody>
              </table>
            </ol>
          </div>
          <div class="col-lg-7 mb-lg-0 mb-4">
            <ol start="2">
              <div class="d-flex justify-content-between">
                <li class="font-weight-bold">Orbitasi:</li>
                <div>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form7" class="btn badge bg-gradient-primary ms-auto mb-0">
                    <i class="fa fa-plus me-1" aria-hidden="true"></i>
                    Edit
                  </button>
                </div>
              </div>
              <table class="table-borderless">
                <tbody>
                  @if (($orbitasi) != null)
                    <tr>
                      <td>• Jarak Kampung ke ibu kota Kecamatan</td>
                      <td>:</td>
                      <td class="ps-1">{{$orbitasi->jarak_ke_kecamatan}} KM</td>
                    </tr>
                    <tr>
                      <td>• Lama tempuh ke ibu kota kecamatan</td>
                      <td>:</td>
                      <td class="ps-1">{{$orbitasi->waktu_ke_kecamatan}} Menit</td>
                    </tr>
                    <tr>
                      <td>• Kendaraan umum ke ibu kota kecamatan</td>
                      <td>:</td>
                      <td class="ps-1">{{$orbitasi->kendaraan_ke_kecamatan}}</td>
                    </tr>
                    <tr>
                      <td>• Jarak ke ibu Kota Kecamatan</td>
                      <td>:</td>
                      <td class="ps-1">{{$orbitasi->jarak_ke_kebupaten}} KM</td>
                    </tr>
                    <tr>
                      <td>• Lama tempuh ke ibu Kota Kabupaten</td>
                      <td>:</td>
                     <td class="ps-1">{{$orbitasi->waktu_ke_kebupaten}} Menit</td>
                    </tr>
                    <tr>
                      <td>• Kendaraan umum ke ibu kota Kabupaten</td>
                      <td>:</td>
                      <td class="ps-1">{{$orbitasi->kendaraan_ke_kebupaten}}</td>
                    </tr>
                  @else
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
                  @endif
                </tbody>
              </table>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Modal Geografis --}}
<div class="modal fade" id="modal-form4" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h4 class="font-weight-bolder text-info text-gradient">Letak Geografis</h4>
          </div>
          <div class="card-body pt-0">
            @if (($geografis) !=null)
              <form role="form text-left" action="{{route('officer.edit_letak_geografis', $geografis->id)}}" method="POST">
                @method('put')
                @csrf
                <label>Sebelah Utara</label>
                <div class="input-group mb-3">
                  <input type="text" name="sebelah_utara" id="sebelah_utara" class="form-control" value="{{$geografis->sebelah_utara}}">
                </div>
                <label>Sebelah Timur</label>
                <div class="input-group mb-3">
                  <input type="text" name="sebelah_timur" id="sebelah_timur" class="form-control" value="{{$geografis->sebelah_timur}}">
                </div>
                <label>Sebelah Barat</label>
                <div class="input-group mb-3">
                  <input type="text" name="sebelah_barat" id="sebelah_barat" class="form-control" value="{{$geografis->sebelah_barat}}">
                </div>
                <label>Sebelah Selatan</label>
                <div class="input-group mb-3">
                  <input type="text" name="sebelah_selatan" id="sebelah_selatan" class="form-control" value="{{$geografis->sebelah_selatan}}">
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">update</button>
                </div>
              </form>
            @else
              <form role="form text-left" action="{{route('officer.letak_geografis')}}" method="POST">
                @csrf
                <label>Sebelah Utara</label>
                <div class="input-group mb-3">
                  <input type="text" name="sebelah_utara" id="sebelah_utara" class="form-control">
                </div>
                <label>Sebelah Timur</label>
                <div class="input-group mb-3">
                  <input type="text" name="sebelah_timur" id="sebelah_timur" class="form-control">
                </div>
                <label>Sebelah Barat</label>
                <div class="input-group mb-3">
                  <input type="text" name="sebelah_barat" id="sebelah_barat" class="form-control">
                </div>
                <label>Sebelah Selatan</label>
                <div class="input-group mb-3">
                  <input type="text" name="sebelah_selatan" id="sebelah_selatan" class="form-control">
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
{{-- Modal Orbitasi --}}
<div class="modal fade" id="modal-form7" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body p-0">
        <div class="card card-plain">
          <div class="card-header pb-0 text-left">
            <h4 class="font-weight-bolder text-info text-gradient">Orbitasi</h4>
          </div>
          <div class="card-body pt-0">
            @if (($orbitasi) != null)
              <form role="form text-left" action="{{route('officer.edit_orbitasi', $orbitasi->id)}}" method="POST">
                @method('put')
                @csrf
                <label>Jarak ke Kecamatan</label>
                <div class="input-group mb-3">
                  <input type="text" name="jarak_ke_kecamatan" id="jarak_ke_kecamatan" class="form-control" value="{{$orbitasi->jarak_ke_kecamatan}}">
                </div>
                <label>Waktu ke Kecamatan</label>
                <div class="input-group mb-3">
                  <input type="text" name="waktu_ke_kecamatan" id="waktu_ke_kecamatan" class="form-control" value="{{$orbitasi->waktu_ke_kecamatan}}">
                </div>
                <label>Kendaraan ke Kecamatan</label>
                <div class="input-group mb-3">
                  <input type="text" name="kendaraan_ke_kecamatan" id="kendaraan_ke_kecamatan" class="form-control" value="{{$orbitasi->kendaraan_ke_kecamatan}}">
                </div>
                <label>Jarak ke Kabupaten</label>
                <div class="input-group mb-3">
                  <input type="text" name="jarak_ke_kabupaten" id="jarak_ke_kabupaten" class="form-control" value="{{$orbitasi->jarak_ke_kabupaten}}">
                </div>
                <label>Waktu ke Kabupaten</label>
                <div class="input-group mb-3">
                  <input type="text" name="waktu_ke_kabupaten" id="waktu_ke_kabupaten" class="form-control" value="{{$orbitasi->waktu_ke_kabupaten}}">
                </div>
                <label>Kendaraan ke Kabupaten</label>
                <div class="input-group mb-3">
                  <input type="text" name="kendaraan_ke_kabupaten" id="kendaraan_ke_kabupaten" class="form-control" value="{{$orbitasi->kendaraan_ke_kabupaten}}">
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">update</button>
                </div>
              </form>
            @else
              <form role="form text-left" action="{{route('officer.orbitasi')}}" method="POST">
                @csrf
                <label>Jarak ke Kecamatan</label>
                <div class="input-group mb-3">
                  <input type="text" name="jarak_ke_kecamatan" id="jarak_ke_kecamatan" class="form-control" value="">
                </div>
                <label>Waktu ke Kecamatan</label>
                <div class="input-group mb-3">
                  <input type="text" name="waktu_ke_kecamatan" id="waktu_ke_kecamatan" class="form-control" value="">
                </div>
                <label>Kendaraan ke Kecamatan</label>
                <div class="input-group mb-3">
                  <input type="text" name="kendaraan_ke_kecamatan" id="kendaraan_ke_kecamatan" class="form-control" value="">
                </div>
                <label>Jarak ke Kabupaten</label>
                <div class="input-group mb-3">
                  <input type="text" name="jarak_ke_kabupaten" id="jarak_ke_kabupaten" class="form-control" value="">
                </div>
                <label>Waktu ke Kabupaten</label>
                <div class="input-group mb-3">
                  <input type="text" name="waktu_ke_kabupaten" id="waktu_ke_kabupaten" class="form-control" value="">
                </div>
                <label>Kendaraan ke Kabupaten</label>
                <div class="input-group mb-3">
                  <input type="text" name="kendaraan_ke_kabupaten" id="kendaraan_ke_kabupaten" class="form-control" value="">
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
