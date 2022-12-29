<!--   Core JS Files   -->
<script src="{{ url('backend/assets/js/core/popper.min.js')}}"></script>
<script src="{{ url('backend/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ url('backend/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{ url('backend/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{ url('backend/assets/js/plugins/chartjs.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5,npm/fullcalendar@5/locales-all.min.js,npm/fullcalendar@5/locales-all.min.js,npm/fullcalendar@5/main.min.js"></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{url('backend/assets/js/argon-dashboard.min.js?v=2.0.2')}}"></script>
<!-- Magnific Popup core JS file -->
<script src="{{url('backend/plugin/Magnific/dist/magnific-popup/jquery.magnific-popup.js')}}"></script>

{{-- GIS --}}
<script src="{{url('webgis/resources/qgis2web_expressions.js')}}"></script>
<script src="{{url('webgis/resources/proj4.js')}}"></script>
<script>proj4.defs('EPSG:32650','+proj=utm +zone=50 +datum=WGS84 +units=m +no_defs');</script>
<script src="{{url('webgis/resources/polyfills.js')}}"></script>
<script src="{{url('webgis/resources/functions.js')}}"></script>
<script src="{{url('webgis/resources/ol.js')}}"></script>
<script src="{{url('webgis/resources/ol-layerswitcher.js')}}"></script>
<script src="{{url('webgis/layers/BatasAdministrasiBiatanBapinang_1.js')}}"></script>
<script src="{{url('webgis/layers/JALAN_BAPINANG_4.js')}}"></script>
<script src="{{url('webgis/layers/PersilBiatanBapinang_Erase2_2.js')}}"></script>
<script src="{{url('webgis/layers/POLYGON_BAPINANG_21_NOV_3.js')}}"></script>
<script src="{{url('webgis/styles/BatasAdministrasiBiatanBapinang_1_style.js')}}"></script>
<script src="{{url('webgis/styles/JALAN_BAPINANG_4_style.js')}}"></script>
<script src="{{url('webgis/styles/PersilBiatanBapinang_Erase2_2_style.js')}}"></script>
<script src="{{url('webgis/styles/POLYGON_BAPINANG_21_NOV_3_style.js')}}"></script>
<script src="{{url('webgis/layers/layers.js')}}" type="text/javascript"></script>
<script src="{{url('webgis/resources/Autolinker.min.js')}}"></script>
<script src="{{url('webgis/resources/qgis2web.js')}}"></script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<script>
  let navActive = document.querySelectorAll('.nav-active')

  navActive.forEach((a) => {
    a.addEventListener("click", (e) => {
        navActive.forEach((el) => el.classList.remove("active"));
        a.classList.add("active");
    });
  });
</script>
