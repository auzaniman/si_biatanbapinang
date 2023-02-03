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

  {{-- <script src="{{url('webgis/resources/qgis2web_expressions.js')}}"></script>
  <script src="{{url('webgis/resources/polyfills.js')}}"></script>
  <script src="{{url('webgis/resources/functions.js')}}"></script>
  <script src="{{url('webgis/resources/ol.js')}}"></script>
  <script src="{{url('webgis/resources/ol-layerswitcher.js')}}"></script>

  <script src="{{url('webgis/resources/ol-geocoder.js')}}"></script>
  <script src="{{url('webgis/layers/BatasAdministrasi_1.js')}}"></script>
  <script src="{{url('webgis/layers/RencanaTataGunaLahan_2.js')}}"></script>
  <script src="{{url('webgis/layers/PersilBidang_3.js')}}"></script>
  <script src="{{url('webgis/layers/Sungai_4.js')}}"></script>
  <script src="{{url('webgis/layers/Jalan_5.js')}}"></script>
  <script src="{{url('webgis/styles/BatasAdministrasi_1_style.js')}}"></script>
  <script src="{{url('webgis/styles/RencanaTataGunaLahan_2_style.js')}}"></script>
  <script src="{{url('webgis/styles/PersilBidang_3_style.js')}}"></script>
  <script src="{{url('webgis/styles/Sungai_4_style.js')}}"></script>
  <script src="{{url('webgis/styles/Jalan_5_style.js')}}"></script>

  <script src="{{url('webgis/layers/layers.js')}}" type="text/javascript"></script>
  <script src="{{url('webgis/resources/Autolinker.min.js')}}"></script>
  <script src="{{url('webgis/resources/qgis2web.js')}}"></script> --}}

  <script src="{{ url('webgis/js/qgis2web_expressions.js') }}"></script>
  <script src="{{ url('webgis/js/leaflet.js') }}"></script>
  <script src="{{ url('webgis/js/L.Control.Locate.min.js') }}"></script>
  <script src="{{ url('webgis/js/leaflet.rotatedMarker.js') }}"></script>
  <script src="{{ url('webgis/js/leaflet.pattern.js') }}"></script>
  <script src="{{ url('webgis/js/leaflet-hash.js') }}"></script>
  <script src="{{ url('webgis/js/Autolinker.min.js') }}"></script>
  <script src="{{ url('webgis/js/rbush.min.js') }}"></script>
  <script src="{{ url('webgis/js/labelgun.min.js') }}"></script>
  <script src="{{ url('webgis/js/labels.js') }}"></script>
  <script src="{{ url('webgis/js/leaflet-control-geocoder.Geocoder.js') }}"></script>
  <script src="{{ url('webgis/js/leaflet-search.js') }}"></script>
  <script src="{{ url('webgis/data/RTGLPermukiman_1.js') }}"></script>
  <script src="{{ url('webgis/data/RTGLPerlindunganMataAirBufferSungai_2.js') }}"></script>
  <script src="{{ url('webgis/data/RTGLPerkebunanSawitMasyarakat_3.js') }}"></script>
  <script src="{{ url('webgis/data/RTGLKemitraanKehutanan_4.js') }}"></script>
  <script src="{{ url('webgis/data/RTGLKebunCampuran_5.js') }}"></script>
  <script src="{{ url('webgis/data/RTGLKawasanWisataPendidikan_6.js') }}"></script>
  <script src="{{ url('webgis/data/RTGLKawasanWisataKonservasiMangrove_7.js') }}"></script>
  <script src="{{ url('webgis/data/RTGLKawasanHGUSawit_8.js') }}"></script>
  <script src="{{ url('webgis/data/RTGLHutanTanamanRakyat_9.js') }}"></script>
  <script src="{{ url('webgis/data/RTGLHutanKemasyarakatan_10.js') }}"></script>
  <script src="{{ url('webgis/data/RTGLHutanKampung_11.js') }}"></script>
  <script src="{{ url('webgis/data/RTGLHutanAdat_12.js') }}"></script>
  <script src="{{ url('webgis/data/PersilBidang_13.js') }}"></script>
  <script src="{{ url('webgis/data/Sungai_14.js') }}"></script>
  <script src="{{ url('webgis/data/Jalan_15.js') }}"></script>
  <script src="{{ url('webgis/data/BatasAdministrasi_16.js') }}"></script>

  <script>
    var highlightLayer;
    function highlightFeature(e) {
        highlightLayer = e.target;

        if (e.target.feature.geometry.type === 'LineString') {
          highlightLayer.setStyle({
            color: '#ffff00',
          });
        } else {
          highlightLayer.setStyle({
            fillColor: '#ffff00',
            fillOpacity: 1
          });
        }
    }
    var map = L.map('map', {
        zoomControl:true, maxZoom:28, minZoom:1
    })
    var hash = new L.Hash(map);
    map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
    var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
    L.control.locate({locateOptions: {maxZoom: 19}}).addTo(map);
    var bounds_group = new L.featureGroup([]);
    function setBounds() {
        if (bounds_group.getLayers().length) {
            map.fitBounds(bounds_group.getBounds());
        }
        map.setMaxBounds(map.getBounds());
    }
    map.createPane('pane_GoogleEarth_0');
    map.getPane('pane_GoogleEarth_0').style.zIndex = 400;
    var layer_GoogleEarth_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        pane: 'pane_GoogleEarth_0',
        opacity: 1.0,
        attribution: '',
        minZoom: 1,
        maxZoom: 28,
        minNativeZoom: 0,
        maxNativeZoom: 40
    });
    layer_GoogleEarth_0;
    map.addLayer(layer_GoogleEarth_0);
    function pop_RTGLPermukiman_1(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NEW_RTGL</th>\
                    <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">LUAS_Ha</th>\
                    <td>' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_RTGLPermukiman_1_0() {
        return {
            pane: 'pane_RTGLPermukiman_1',
            stroke: false,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(112,32,0,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_RTGLPermukiman_1');
    map.getPane('pane_RTGLPermukiman_1').style.zIndex = 401;
    map.getPane('pane_RTGLPermukiman_1').style['mix-blend-mode'] = 'normal';
    var layer_RTGLPermukiman_1 = new L.geoJson(json_RTGLPermukiman_1, {
        attribution: '',
        interactive: true,
        dataVar: 'json_RTGLPermukiman_1',
        layerName: 'layer_RTGLPermukiman_1',
        pane: 'pane_RTGLPermukiman_1',
        onEachFeature: pop_RTGLPermukiman_1,
        style: style_RTGLPermukiman_1_0,
    });
    bounds_group.addLayer(layer_RTGLPermukiman_1);
    map.addLayer(layer_RTGLPermukiman_1);
    function pop_RTGLPerlindunganMataAirBufferSungai_2(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NEW_RTGL</th>\
                    <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">LUAS_Ha</th>\
                    <td>' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_RTGLPerlindunganMataAirBufferSungai_2_0() {
        return {
            pane: 'pane_RTGLPerlindunganMataAirBufferSungai_2',
            stroke: false,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(3,65,148,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_RTGLPerlindunganMataAirBufferSungai_2');
    map.getPane('pane_RTGLPerlindunganMataAirBufferSungai_2').style.zIndex = 402;
    map.getPane('pane_RTGLPerlindunganMataAirBufferSungai_2').style['mix-blend-mode'] = 'normal';
    var layer_RTGLPerlindunganMataAirBufferSungai_2 = new L.geoJson(json_RTGLPerlindunganMataAirBufferSungai_2, {
        attribution: '',
        interactive: true,
        dataVar: 'json_RTGLPerlindunganMataAirBufferSungai_2',
        layerName: 'layer_RTGLPerlindunganMataAirBufferSungai_2',
        pane: 'pane_RTGLPerlindunganMataAirBufferSungai_2',
        onEachFeature: pop_RTGLPerlindunganMataAirBufferSungai_2,
        style: style_RTGLPerlindunganMataAirBufferSungai_2_0,
    });
    bounds_group.addLayer(layer_RTGLPerlindunganMataAirBufferSungai_2);
    map.addLayer(layer_RTGLPerlindunganMataAirBufferSungai_2);
    function pop_RTGLPerkebunanSawitMasyarakat_3(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NEW_RTGL</th>\
                    <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">LUAS_Ha</th>\
                    <td>' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_RTGLPerkebunanSawitMasyarakat_3_0() {
        return {
            pane: 'pane_RTGLPerkebunanSawitMasyarakat_3',
            stroke: false,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(254,149,0,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_RTGLPerkebunanSawitMasyarakat_3');
    map.getPane('pane_RTGLPerkebunanSawitMasyarakat_3').style.zIndex = 403;
    map.getPane('pane_RTGLPerkebunanSawitMasyarakat_3').style['mix-blend-mode'] = 'normal';
    var layer_RTGLPerkebunanSawitMasyarakat_3 = new L.geoJson(json_RTGLPerkebunanSawitMasyarakat_3, {
        attribution: '',
        interactive: true,
        dataVar: 'json_RTGLPerkebunanSawitMasyarakat_3',
        layerName: 'layer_RTGLPerkebunanSawitMasyarakat_3',
        pane: 'pane_RTGLPerkebunanSawitMasyarakat_3',
        onEachFeature: pop_RTGLPerkebunanSawitMasyarakat_3,
        style: style_RTGLPerkebunanSawitMasyarakat_3_0,
    });
    bounds_group.addLayer(layer_RTGLPerkebunanSawitMasyarakat_3);
    map.addLayer(layer_RTGLPerkebunanSawitMasyarakat_3);
    function pop_RTGLKemitraanKehutanan_4(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NEW_RTGL</th>\
                    <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">LUAS_Ha</th>\
                    <td>' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_RTGLKemitraanKehutanan_4_0() {
        return {
            pane: 'pane_RTGLKemitraanKehutanan_4',
            stroke: false,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(149,153,51,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_RTGLKemitraanKehutanan_4');
    map.getPane('pane_RTGLKemitraanKehutanan_4').style.zIndex = 404;
    map.getPane('pane_RTGLKemitraanKehutanan_4').style['mix-blend-mode'] = 'normal';
    var layer_RTGLKemitraanKehutanan_4 = new L.geoJson(json_RTGLKemitraanKehutanan_4, {
        attribution: '',
        interactive: true,
        dataVar: 'json_RTGLKemitraanKehutanan_4',
        layerName: 'layer_RTGLKemitraanKehutanan_4',
        pane: 'pane_RTGLKemitraanKehutanan_4',
        onEachFeature: pop_RTGLKemitraanKehutanan_4,
        style: style_RTGLKemitraanKehutanan_4_0,
    });
    bounds_group.addLayer(layer_RTGLKemitraanKehutanan_4);
    map.addLayer(layer_RTGLKemitraanKehutanan_4);
    function pop_RTGLKebunCampuran_5(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NEW_RTGL</th>\
                    <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">LUAS_Ha</th>\
                    <td>' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_RTGLKebunCampuran_5_0() {
        return {
            pane: 'pane_RTGLKebunCampuran_5',
            stroke: false,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(157,118,45,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_RTGLKebunCampuran_5');
    map.getPane('pane_RTGLKebunCampuran_5').style.zIndex = 405;
    map.getPane('pane_RTGLKebunCampuran_5').style['mix-blend-mode'] = 'normal';
    var layer_RTGLKebunCampuran_5 = new L.geoJson(json_RTGLKebunCampuran_5, {
        attribution: '',
        interactive: true,
        dataVar: 'json_RTGLKebunCampuran_5',
        layerName: 'layer_RTGLKebunCampuran_5',
        pane: 'pane_RTGLKebunCampuran_5',
        onEachFeature: pop_RTGLKebunCampuran_5,
        style: style_RTGLKebunCampuran_5_0,
    });
    bounds_group.addLayer(layer_RTGLKebunCampuran_5);
    map.addLayer(layer_RTGLKebunCampuran_5);
    function pop_RTGLKawasanWisataPendidikan_6(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NEW_RTGL</th>\
                    <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_RTGLKawasanWisataPendidikan_6_0() {
        return {
            pane: 'pane_RTGLKawasanWisataPendidikan_6',
            stroke: false,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(171,255,221,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_RTGLKawasanWisataPendidikan_6');
    map.getPane('pane_RTGLKawasanWisataPendidikan_6').style.zIndex = 406;
    map.getPane('pane_RTGLKawasanWisataPendidikan_6').style['mix-blend-mode'] = 'normal';
    var layer_RTGLKawasanWisataPendidikan_6 = new L.geoJson(json_RTGLKawasanWisataPendidikan_6, {
        attribution: '',
        interactive: true,
        dataVar: 'json_RTGLKawasanWisataPendidikan_6',
        layerName: 'layer_RTGLKawasanWisataPendidikan_6',
        pane: 'pane_RTGLKawasanWisataPendidikan_6',
        onEachFeature: pop_RTGLKawasanWisataPendidikan_6,
        style: style_RTGLKawasanWisataPendidikan_6_0,
    });
    bounds_group.addLayer(layer_RTGLKawasanWisataPendidikan_6);
    map.addLayer(layer_RTGLKawasanWisataPendidikan_6);
    function pop_RTGLKawasanWisataKonservasiMangrove_7(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NEW_RTGL</th>\
                    <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">LUAS_Ha</th>\
                    <td>' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_RTGLKawasanWisataKonservasiMangrove_7_0() {
        return {
            pane: 'pane_RTGLKawasanWisataKonservasiMangrove_7',
            stroke: false,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(133,180,123,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_RTGLKawasanWisataKonservasiMangrove_7');
    map.getPane('pane_RTGLKawasanWisataKonservasiMangrove_7').style.zIndex = 407;
    map.getPane('pane_RTGLKawasanWisataKonservasiMangrove_7').style['mix-blend-mode'] = 'normal';
    var layer_RTGLKawasanWisataKonservasiMangrove_7 = new L.geoJson(json_RTGLKawasanWisataKonservasiMangrove_7, {
        attribution: '',
        interactive: true,
        dataVar: 'json_RTGLKawasanWisataKonservasiMangrove_7',
        layerName: 'layer_RTGLKawasanWisataKonservasiMangrove_7',
        pane: 'pane_RTGLKawasanWisataKonservasiMangrove_7',
        onEachFeature: pop_RTGLKawasanWisataKonservasiMangrove_7,
        style: style_RTGLKawasanWisataKonservasiMangrove_7_0,
    });
    bounds_group.addLayer(layer_RTGLKawasanWisataKonservasiMangrove_7);
    map.addLayer(layer_RTGLKawasanWisataKonservasiMangrove_7);
    function pop_RTGLKawasanHGUSawit_8(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NEW_RTGL</th>\
                    <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">LUAS_Ha</th>\
                    <td>' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_RTGLKawasanHGUSawit_8_0() {
        return {
            pane: 'pane_RTGLKawasanHGUSawit_8',
            stroke: false,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(254,85,0,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_RTGLKawasanHGUSawit_8');
    map.getPane('pane_RTGLKawasanHGUSawit_8').style.zIndex = 408;
    map.getPane('pane_RTGLKawasanHGUSawit_8').style['mix-blend-mode'] = 'normal';
    var layer_RTGLKawasanHGUSawit_8 = new L.geoJson(json_RTGLKawasanHGUSawit_8, {
        attribution: '',
        interactive: true,
        dataVar: 'json_RTGLKawasanHGUSawit_8',
        layerName: 'layer_RTGLKawasanHGUSawit_8',
        pane: 'pane_RTGLKawasanHGUSawit_8',
        onEachFeature: pop_RTGLKawasanHGUSawit_8,
        style: style_RTGLKawasanHGUSawit_8_0,
    });
    bounds_group.addLayer(layer_RTGLKawasanHGUSawit_8);
    map.addLayer(layer_RTGLKawasanHGUSawit_8);
    function pop_RTGLHutanTanamanRakyat_9(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NEW_RTGL</th>\
                    <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">LUAS_Ha</th>\
                    <td>' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_RTGLHutanTanamanRakyat_9_0() {
        return {
            pane: 'pane_RTGLHutanTanamanRakyat_9',
            stroke: false,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(36,183,16,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_RTGLHutanTanamanRakyat_9');
    map.getPane('pane_RTGLHutanTanamanRakyat_9').style.zIndex = 409;
    map.getPane('pane_RTGLHutanTanamanRakyat_9').style['mix-blend-mode'] = 'normal';
    var layer_RTGLHutanTanamanRakyat_9 = new L.geoJson(json_RTGLHutanTanamanRakyat_9, {
        attribution: '',
        interactive: true,
        dataVar: 'json_RTGLHutanTanamanRakyat_9',
        layerName: 'layer_RTGLHutanTanamanRakyat_9',
        pane: 'pane_RTGLHutanTanamanRakyat_9',
        onEachFeature: pop_RTGLHutanTanamanRakyat_9,
        style: style_RTGLHutanTanamanRakyat_9_0,
    });
    bounds_group.addLayer(layer_RTGLHutanTanamanRakyat_9);
    map.addLayer(layer_RTGLHutanTanamanRakyat_9);
    function pop_RTGLHutanKemasyarakatan_10(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NEW_RTGL</th>\
                    <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">LUAS_Ha</th>\
                    <td>' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2"><strong>KETERANGAN</strong><br />' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_RTGLHutanKemasyarakatan_10_0() {
        return {
            pane: 'pane_RTGLHutanKemasyarakatan_10',
            stroke: false,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(29,133,13,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_RTGLHutanKemasyarakatan_10');
    map.getPane('pane_RTGLHutanKemasyarakatan_10').style.zIndex = 410;
    map.getPane('pane_RTGLHutanKemasyarakatan_10').style['mix-blend-mode'] = 'normal';
    var layer_RTGLHutanKemasyarakatan_10 = new L.geoJson(json_RTGLHutanKemasyarakatan_10, {
        attribution: '',
        interactive: true,
        dataVar: 'json_RTGLHutanKemasyarakatan_10',
        layerName: 'layer_RTGLHutanKemasyarakatan_10',
        pane: 'pane_RTGLHutanKemasyarakatan_10',
        onEachFeature: pop_RTGLHutanKemasyarakatan_10,
        style: style_RTGLHutanKemasyarakatan_10_0,
    });
    bounds_group.addLayer(layer_RTGLHutanKemasyarakatan_10);
    map.addLayer(layer_RTGLHutanKemasyarakatan_10);
    function pop_RTGLHutanKampung_11(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NEW_RTGL</th>\
                    <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">LUAS_Ha</th>\
                    <td>' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_RTGLHutanKampung_11_0() {
        return {
            pane: 'pane_RTGLHutanKampung_11',
            stroke: false,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(16,97,7,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_RTGLHutanKampung_11');
    map.getPane('pane_RTGLHutanKampung_11').style.zIndex = 411;
    map.getPane('pane_RTGLHutanKampung_11').style['mix-blend-mode'] = 'normal';
    var layer_RTGLHutanKampung_11 = new L.geoJson(json_RTGLHutanKampung_11, {
        attribution: '',
        interactive: true,
        dataVar: 'json_RTGLHutanKampung_11',
        layerName: 'layer_RTGLHutanKampung_11',
        pane: 'pane_RTGLHutanKampung_11',
        onEachFeature: pop_RTGLHutanKampung_11,
        style: style_RTGLHutanKampung_11_0,
    });
    bounds_group.addLayer(layer_RTGLHutanKampung_11);
    map.addLayer(layer_RTGLHutanKampung_11);
    function pop_RTGLHutanAdat_12(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['fid'] !== null ? autolinker.link(feature.properties['fid'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NEW_RTGL</th>\
                    <td>' + (feature.properties['NEW_RTGL'] !== null ? autolinker.link(feature.properties['NEW_RTGL'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">KAMPUNG</th>\
                    <td>' + (feature.properties['KAMPUNG'] !== null ? autolinker.link(feature.properties['KAMPUNG'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">LUAS_Ha</th>\
                    <td>' + (feature.properties['LUAS_Ha'] !== null ? autolinker.link(feature.properties['LUAS_Ha'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['KETERANGAN'] !== null ? autolinker.link(feature.properties['KETERANGAN'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_RTGLHutanAdat_12_0() {
        return {
            pane: 'pane_RTGLHutanAdat_12',
            stroke: false,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(7,44,3,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_RTGLHutanAdat_12');
    map.getPane('pane_RTGLHutanAdat_12').style.zIndex = 412;
    map.getPane('pane_RTGLHutanAdat_12').style['mix-blend-mode'] = 'normal';
    var layer_RTGLHutanAdat_12 = new L.geoJson(json_RTGLHutanAdat_12, {
        attribution: '',
        interactive: true,
        dataVar: 'json_RTGLHutanAdat_12',
        layerName: 'layer_RTGLHutanAdat_12',
        pane: 'pane_RTGLHutanAdat_12',
        onEachFeature: pop_RTGLHutanAdat_12,
        style: style_RTGLHutanAdat_12_0,
    });
    bounds_group.addLayer(layer_RTGLHutanAdat_12);
    map.addLayer(layer_RTGLHutanAdat_12);
    function pop_PersilBidang_13(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['Id'] !== null ? autolinker.link(feature.properties['Id'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">RT</th>\
                    <td>' + (feature.properties['RT'] !== null ? autolinker.link(feature.properties['RT'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['PL_CITRA'] !== null ? autolinker.link(feature.properties['PL_CITRA'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NAMA</th>\
                    <td>' + (feature.properties['NAMA'] !== null ? autolinker.link(feature.properties['NAMA'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">NOP</th>\
                    <td>' + (feature.properties['NOP'] !== null ? autolinker.link(feature.properties['NOP'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">LUAS</th>\
                    <td>' + (feature.properties['LUAS'] !== null ? autolinker.link(feature.properties['LUAS'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_PersilBidang_13_0() {
        return {
            pane: 'pane_PersilBidang_13',
            opacity: 1,
            color: 'rgba(254,203,0,1.0)',
            dashArray: '',
            lineCap: 'butt',
            lineJoin: 'miter',
            weight: 1.0,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(145,82,45,0.0)',
            interactive: true,
        }
    }
    map.createPane('pane_PersilBidang_13');
    map.getPane('pane_PersilBidang_13').style.zIndex = 413;
    map.getPane('pane_PersilBidang_13').style['mix-blend-mode'] = 'normal';
    var layer_PersilBidang_13 = new L.geoJson(json_PersilBidang_13, {
        attribution: '',
        interactive: true,
        dataVar: 'json_PersilBidang_13',
        layerName: 'layer_PersilBidang_13',
        pane: 'pane_PersilBidang_13',
        onEachFeature: pop_PersilBidang_13,
        style: style_PersilBidang_13_0,
    });
    bounds_group.addLayer(layer_PersilBidang_13);
    map.addLayer(layer_PersilBidang_13);
    function pop_Sungai_14(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['Id'] !== null ? autolinker.link(feature.properties['Id'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_Sungai_14_0() {
        return {
            pane: 'pane_Sungai_14',
            opacity: 1,
            color: 'rgba(6,141,214,1.0)',
            dashArray: '',
            lineCap: 'butt',
            lineJoin: 'miter',
            weight: 1.0,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(6,141,214,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_Sungai_14');
    map.getPane('pane_Sungai_14').style.zIndex = 414;
    map.getPane('pane_Sungai_14').style['mix-blend-mode'] = 'normal';
    var layer_Sungai_14 = new L.geoJson(json_Sungai_14, {
        attribution: '',
        interactive: true,
        dataVar: 'json_Sungai_14',
        layerName: 'layer_Sungai_14',
        pane: 'pane_Sungai_14',
        onEachFeature: pop_Sungai_14,
        style: style_Sungai_14_0,
    });
    bounds_group.addLayer(layer_Sungai_14);
    map.addLayer(layer_Sungai_14);
    function pop_Jalan_15(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['Id'] !== null ? autolinker.link(feature.properties['Id'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['RT'] !== null ? autolinker.link(feature.properties['RT'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_Jalan_15_0() {
        return {
            pane: 'pane_Jalan_15',
            opacity: 1,
            color: 'rgba(35,35,35,1.0)',
            dashArray: '',
            lineCap: 'butt',
            lineJoin: 'miter',
            weight: 1.0,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(152,125,183,1.0)',
            interactive: true,
        }
    }
    map.createPane('pane_Jalan_15');
    map.getPane('pane_Jalan_15').style.zIndex = 415;
    map.getPane('pane_Jalan_15').style['mix-blend-mode'] = 'normal';
    var layer_Jalan_15 = new L.geoJson(json_Jalan_15, {
        attribution: '',
        interactive: true,
        dataVar: 'json_Jalan_15',
        layerName: 'layer_Jalan_15',
        pane: 'pane_Jalan_15',
        onEachFeature: pop_Jalan_15,
        style: style_Jalan_15_0,
    });
    bounds_group.addLayer(layer_Jalan_15);
    map.addLayer(layer_Jalan_15);
    function pop_BatasAdministrasi_16(feature, layer) {
        layer.on({
            mouseout: function(e) {
                for (i in e.target._eventParents) {
                    e.target._eventParents[i].resetStyle(e.target);
                }
            },
            mouseover: highlightFeature,
        });
        var popupContent = '<table>\
                <tr>\
                    <td colspan="2">' + (feature.properties['Id'] !== null ? autolinker.link(feature.properties['Id'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <th scope="row">RT</th>\
                    <td>' + (feature.properties['RT'] !== null ? autolinker.link(feature.properties['RT'].toLocaleString()) : '') + '</td>\
                </tr>\
                <tr>\
                    <td colspan="2">' + (feature.properties['PL_CITRA'] !== null ? autolinker.link(feature.properties['PL_CITRA'].toLocaleString()) : '') + '</td>\
                </tr>\
            </table>';
        layer.bindPopup(popupContent, {maxHeight: 400});
    }

    function style_BatasAdministrasi_16_0() {
        return {
            pane: 'pane_BatasAdministrasi_16',
            opacity: 1,
            color: 'rgba(178,223,138,1.0)',
            dashArray: '',
            lineCap: 'butt',
            lineJoin: 'miter',
            weight: 1.0,
            fill: true,
            fillOpacity: 1,
            fillColor: 'rgba(157,118,45,0.0)',
            interactive: true,
        }
    }
    map.createPane('pane_BatasAdministrasi_16');
    map.getPane('pane_BatasAdministrasi_16').style.zIndex = 416;
    map.getPane('pane_BatasAdministrasi_16').style['mix-blend-mode'] = 'normal';
    var layer_BatasAdministrasi_16 = new L.geoJson(json_BatasAdministrasi_16, {
        attribution: '',
        interactive: true,
        dataVar: 'json_BatasAdministrasi_16',
        layerName: 'layer_BatasAdministrasi_16',
        pane: 'pane_BatasAdministrasi_16',
        onEachFeature: pop_BatasAdministrasi_16,
        style: style_BatasAdministrasi_16_0,
    });
    bounds_group.addLayer(layer_BatasAdministrasi_16);
    map.addLayer(layer_BatasAdministrasi_16);
    var osmGeocoder = new L.Control.Geocoder({
        collapsed: true,
        position: 'topleft',
        text: 'Search',
        title: 'Testing'
    }).addTo(map);
    document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
    .className += ' fa fa-search';
    document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
    .title += 'Search for a place';
    var baseMaps = {};
    L.control.layers(baseMaps,{'<img src="/webgis/legend/BatasAdministrasi_16.png" /> Batas Administrasi': layer_BatasAdministrasi_16,'<img src="/webgis/legend/Jalan_15.png" /> Jalan': layer_Jalan_15,'<img src="/webgis/legend/Sungai_14.png" /> Sungai': layer_Sungai_14,'<img src="/webgis/legend/PersilBidang_13.png" /> Persil Bidang': layer_PersilBidang_13,'<img src="/webgis/legend/RTGLHutanAdat_12.png" /> RTGL Hutan Adat': layer_RTGLHutanAdat_12,'<img src="/webgis/legend/RTGLHutanKampung_11.png" /> RTGL Hutan Kampung': layer_RTGLHutanKampung_11,'<img src="/webgis/legend/RTGLHutanKemasyarakatan_10.png" /> RTGL Hutan Kemasyarakatan': layer_RTGLHutanKemasyarakatan_10,'<img src="/webgis/legend/RTGLHutanTanamanRakyat_9.png" /> RTGL Hutan Tanaman Rakyat': layer_RTGLHutanTanamanRakyat_9,'<img src="/webgis/legend/RTGLKawasanHGUSawit_8.png" /> RTGL Kawasan HGU Sawit': layer_RTGLKawasanHGUSawit_8,'<img src="/webgis/legend/RTGLKawasanWisataKonservasiMangrove_7.png" /> RTGL Kawasan Wisata & Konservasi Mangrove': layer_RTGLKawasanWisataKonservasiMangrove_7,'<img src="/webgis/legend/RTGLKawasanWisataPendidikan_6.png" /> RTGL Kawasan Wisata & Pendidikan': layer_RTGLKawasanWisataPendidikan_6,'<img src="/webgis/legend/RTGLKebunCampuran_5.png" /> RTGL Kebun Campuran': layer_RTGLKebunCampuran_5,'<img src="/webgis/legend/RTGLKemitraanKehutanan_4.png" /> RTGL Kemitraan Kehutanan': layer_RTGLKemitraanKehutanan_4,'<img src="/webgis/legend/RTGLPerkebunanSawitMasyarakat_3.png" /> RTGL Perkebunan Sawit Masyarakat': layer_RTGLPerkebunanSawitMasyarakat_3,'<img src="/webgis/legend/RTGLPerlindunganMataAirBufferSungai_2.png" /> RTGL Perlindungan Mata Air & Buffer Sungai': layer_RTGLPerlindunganMataAirBufferSungai_2,'<img src="/webgis/legend/RTGLPermukiman_1.png" /> RTGL Permukiman': layer_RTGLPermukiman_1,"Google Earth": layer_GoogleEarth_0,}).addTo(map);
    setBounds();
    map.addControl(new L.Control.Search({
        layer: layer_RTGLPermukiman_1,
        initial: false,
        hideMarkerOnCollapse: true,
        propertyName: 'fid'}));
    document.getElementsByClassName('search-button')[0].className +=
      ' fa fa-binoculars';
  </script>

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
