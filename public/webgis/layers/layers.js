var wms_layers = [];

var lyr_GoogleEarth_0 = new ol.layer.Tile({
  title: "Google Earth",
  type: "base",
  opacity: 1.0,

  source: new ol.source.XYZ({
    attributions: " ",
    url: "https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}",
  }),
});
var format_BatasAdministrasi_1 = new ol.format.GeoJSON();
var features_BatasAdministrasi_1 = format_BatasAdministrasi_1.readFeatures(
  json_BatasAdministrasi_1,
  { dataProjection: "EPSG:4326", featureProjection: "EPSG:3857" }
);
var jsonSource_BatasAdministrasi_1 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_BatasAdministrasi_1.addFeatures(features_BatasAdministrasi_1);
var lyr_BatasAdministrasi_1 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_BatasAdministrasi_1,
  style: style_BatasAdministrasi_1,
  interactive: true,
  title:
    '<img src="/webgis/styles/legend/BatasAdministrasi_1.png" /> Batas Administrasi',
});
var format_RencanaTataGunaLahan_2 = new ol.format.GeoJSON();
var features_RencanaTataGunaLahan_2 =
  format_RencanaTataGunaLahan_2.readFeatures(json_RencanaTataGunaLahan_2, {
    dataProjection: "EPSG:4326",
    featureProjection: "EPSG:3857",
  });
var jsonSource_RencanaTataGunaLahan_2 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_RencanaTataGunaLahan_2.addFeatures(features_RencanaTataGunaLahan_2);
var lyr_RencanaTataGunaLahan_2 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_RencanaTataGunaLahan_2,
  style: style_RencanaTataGunaLahan_2,
  interactive: true,
  title:
    '<img src="/webgis/styles/legend/RencanaTataGunaLahan_2.png" /> Rencana Tata Guna Lahan',
});
var format_PersilBidang_3 = new ol.format.GeoJSON();
var features_PersilBidang_3 = format_PersilBidang_3.readFeatures(
  json_PersilBidang_3,
  { dataProjection: "EPSG:4326", featureProjection: "EPSG:3857" }
);
var jsonSource_PersilBidang_3 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_PersilBidang_3.addFeatures(features_PersilBidang_3);
var lyr_PersilBidang_3 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_PersilBidang_3,
  style: style_PersilBidang_3,
  interactive: true,
  title: '<img src="/webgis/styles/legend/PersilBidang_3.png" /> Persil Bidang',
});
var format_Sungai_4 = new ol.format.GeoJSON();
var features_Sungai_4 = format_Sungai_4.readFeatures(json_Sungai_4, {
  dataProjection: "EPSG:4326",
  featureProjection: "EPSG:3857",
});
var jsonSource_Sungai_4 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_Sungai_4.addFeatures(features_Sungai_4);
var lyr_Sungai_4 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_Sungai_4,
  style: style_Sungai_4,
  interactive: true,
  title: '<img src="/webgis/styles/legend/Sungai_4.png" /> Sungai',
});
var format_Jalan_5 = new ol.format.GeoJSON();
var features_Jalan_5 = format_Jalan_5.readFeatures(json_Jalan_5, {
  dataProjection: "EPSG:4326",
  featureProjection: "EPSG:3857",
});
var jsonSource_Jalan_5 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_Jalan_5.addFeatures(features_Jalan_5);
var lyr_Jalan_5 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_Jalan_5,
  style: style_Jalan_5,
  interactive: true,
  title: '<img src="/webgis/styles/legend/Jalan_5.png" /> Jalan',
});

lyr_GoogleEarth_0.setVisible(true);
lyr_BatasAdministrasi_1.setVisible(true);
lyr_RencanaTataGunaLahan_2.setVisible(true);
lyr_PersilBidang_3.setVisible(true);
lyr_Sungai_4.setVisible(true);
lyr_Jalan_5.setVisible(true);
var layersList = [
  lyr_GoogleEarth_0,
  lyr_BatasAdministrasi_1,
  lyr_RencanaTataGunaLahan_2,
  lyr_PersilBidang_3,
  lyr_Sungai_4,
  lyr_Jalan_5,
];
lyr_BatasAdministrasi_1.set("fieldAliases", {
  Id: "Id",
  RT: "RT",
  PL_CITRA: "PL_CITRA",
});
lyr_RencanaTataGunaLahan_2.set("fieldAliases", {
  NEW_RTGL: "NEW_RTGL",
  KAMPUNG: "KAMPUNG",
  LUAS_Ha: "LUAS_Ha",
  KETERANGAN: "KETERANGAN",
});
lyr_PersilBidang_3.set("fieldAliases", {
  Id: "Id",
  RT: "RT",
  PL_CITRA: "PL_CITRA",
  NAMA: "NAMA",
  NOP: "NOP",
  LUAS: "LUAS",
});
lyr_Sungai_4.set("fieldAliases", { Id: "Id" });
lyr_Jalan_5.set("fieldAliases", { Id: "Id", RT: "RT" });
lyr_BatasAdministrasi_1.set("fieldImages", {
  Id: "Range",
  RT: "TextEdit",
  PL_CITRA: "TextEdit",
});
lyr_RencanaTataGunaLahan_2.set("fieldImages", {
  NEW_RTGL: "TextEdit",
  KAMPUNG: "TextEdit",
  LUAS_Ha: "TextEdit",
  KETERANGAN: "TextEdit",
});
lyr_PersilBidang_3.set("fieldImages", {
  Id: "Range",
  RT: "TextEdit",
  PL_CITRA: "TextEdit",
  NAMA: "TextEdit",
  NOP: "TextEdit",
  LUAS: "TextEdit",
});
lyr_Sungai_4.set("fieldImages", { Id: "Range" });
lyr_Jalan_5.set("fieldImages", { Id: "", RT: "" });
lyr_BatasAdministrasi_1.set("fieldLabels", {
  Id: "header label",
  RT: "inline label",
  PL_CITRA: "no label",
});
lyr_RencanaTataGunaLahan_2.set("fieldLabels", {
  NEW_RTGL: "header label",
  KAMPUNG: "inline label",
  LUAS_Ha: "inline label",
  KETERANGAN: "no label",
});
lyr_PersilBidang_3.set("fieldLabels", {
  Id: "inline label",
  RT: "inline label",
  PL_CITRA: "no label",
  NAMA: "inline label",
  NOP: "inline label",
  LUAS: "inline label",
});
lyr_Sungai_4.set("fieldLabels", { Id: "no label" });
lyr_Jalan_5.set("fieldLabels", { Id: "no label", RT: "no label" });
lyr_Jalan_5.on("precompose", function (evt) {
  evt.context.globalCompositeOperation = "normal";
});
