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
