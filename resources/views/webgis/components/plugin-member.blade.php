<div class="fixed-plugin">
  <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
    <i class="fa fa-home py-2"> </i>
  </a>
  <div class="card shadow-lg">
    <div class="card-header pb-0 pt-3 ">
      <div class="float-start">
        <h5 class="mt-3 mb-0">Kampung Biatan Bapinang</h5>
        <p>Kampung Terintegrasi</p>
      </div>
      <div class="float-end mt-4">
        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
          <i class="fa fa-close"></i>
        </button>
      </div>
    </div>
    <hr class="horizontal dark my-1">
    <div class="card-body pt-sm-3 pt-0 overflow-auto">
      <div class="mt-lg-0 mt-3">
        <a href="{{route('dashboard')}}" class="mb-0 font-weight-bold @if (\Request::is('user')) active @endif">
          <i class="ni ni-app  text-primary text-sm me-1"></i>
           Kembali
        </a>
      </div>
      <hr class="horizontal dark my-sm-4">
      <div class="copyright mt-4">
         © <script>
            document.write(new Date().getFullYear())
          </script>,
          made by
          <a href="" class="font-weight-bold">Geostera</a>
      </div>
    </div>
  </div>
</div>
