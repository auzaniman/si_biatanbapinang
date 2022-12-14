@extends('officer.layouts.app')

@section('title')
Peta Kampung
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize">Peta Kampung</h6>
        <p class="mb-3">
          Fitur peta kampung ini adalah fitur unggulan dari platform cendikia. Peta kampung ini berbasis web gis dan menampilkan landskap kampung tersebut. Di dalam peta kampung terdapat fitur-fitur yang menampilkan informasi kampung, yaitu penggunaan lahan, kondisi lahan, pekerjaan, status tanah, kepemilikan tanah. Kemudian terdapat fitur informasi lahan, secara teknis ketika salahs atu area di klik, maka muncul pop up informasi mengenai lahan tersebut. Informasi mengenai lahan ini hanya dapat diedit oleh petugas atas ijin pemilik lahan tersebut. Disamping itu terdapat fitur zoom in/out, tangging, dan pengukur jarak. Kedepannya, dalam fitur peta kampung ini, terdapat fitur paint seperti game Warcraft/ rise empie karena fitur ini ditujukan untuk perencanaan pembangunan. Fitur paint tersebut seperti jalan, rumah, gedung kantor, hutan, dsb.

        </p>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize">Peta Kampung</h6>
        <img src="{{url('backend/assets/img/peta.png')}}" class="img-fluid mb-3" alt="gambar peta">
      </div>
    </div>
  </div>
</div>
{{-- <div class="row mt-4">
  <div class="col-lg-7 mb-lg-0 mb-4">
    <div class="card ">
      <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-between">
          <h6 class="mb-2">Sales by Country</h6>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center ">
          <tbody>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="./assets/img/icons/flags/US.png" alt="Country flag">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                    <h6 class="text-sm mb-0">United States</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Sales:</p>
                  <h6 class="text-sm mb-0">2500</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Value:</p>
                  <h6 class="text-sm mb-0">$230,900</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                  <h6 class="text-sm mb-0">29.9%</h6>
                </div>
              </td>
            </tr>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="./assets/img/icons/flags/DE.png" alt="Country flag">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                    <h6 class="text-sm mb-0">Germany</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Sales:</p>
                  <h6 class="text-sm mb-0">3.900</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Value:</p>
                  <h6 class="text-sm mb-0">$440,000</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                  <h6 class="text-sm mb-0">40.22%</h6>
                </div>
              </td>
            </tr>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="./assets/img/icons/flags/GB.png" alt="Country flag">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                    <h6 class="text-sm mb-0">Great Britain</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Sales:</p>
                  <h6 class="text-sm mb-0">1.400</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Value:</p>
                  <h6 class="text-sm mb-0">$190,700</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                  <h6 class="text-sm mb-0">23.44%</h6>
                </div>
              </td>
            </tr>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="./assets/img/icons/flags/BR.png" alt="Country flag">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                    <h6 class="text-sm mb-0">Brasil</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Sales:</p>
                  <h6 class="text-sm mb-0">562</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Value:</p>
                  <h6 class="text-sm mb-0">$143,960</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                  <h6 class="text-sm mb-0">32.14%</h6>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="card">
      <div class="card-header pb-0 p-3">
        <h6 class="mb-0">Categories</h6>
      </div>
      <div class="card-body p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-mobile-button text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                <span class="text-xs">250 in stock, <span class="font-weight-bold">346+ sold</span></span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-tag text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Tickets</h6>
                <span class="text-xs">123 closed, <span class="font-weight-bold">15 open</span></span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-box-2 text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Error logs</h6>
                <span class="text-xs">1 is active, <span class="font-weight-bold">40 closed</span></span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-satisfied text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Happy users</h6>
                <span class="text-xs font-weight-bold">+ 430</span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div> --}}
@endsection
