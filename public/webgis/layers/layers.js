ol.proj.proj4.register(proj4);
ol.proj
  .get("EPSG:32650")
  .setExtent([586020.255166, 173802.934302, 618690.280334, 195664.219801]);
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
var format_BatasAdministrasiBiatanBapinang_1 = new ol.format.GeoJSON();
var features_BatasAdministrasiBiatanBapinang_1 =
  format_BatasAdministrasiBiatanBapinang_1.readFeatures(
    json_BatasAdministrasiBiatanBapinang_1,
    { dataProjection: "EPSG:4326", featureProjection: "EPSG:32650" }
  );
var jsonSource_BatasAdministrasiBiatanBapinang_1 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_BatasAdministrasiBiatanBapinang_1.addFeatures(
  features_BatasAdministrasiBiatanBapinang_1
);
var lyr_BatasAdministrasiBiatanBapinang_1 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_BatasAdministrasiBiatanBapinang_1,
  style: style_BatasAdministrasiBiatanBapinang_1,
  interactive: true,
  title:
    '<img src="/webgis/styles/legend/BatasAdministrasiBiatanBapinang_1.png" /> Batas Administrasi Biatan Bapinang',
});
var format_PersilBiatanBapinang_Erase2_2 = new ol.format.GeoJSON();
var features_PersilBiatanBapinang_Erase2_2 =
  format_PersilBiatanBapinang_Erase2_2.readFeatures(
    json_PersilBiatanBapinang_Erase2_2,
    { dataProjection: "EPSG:4326", featureProjection: "EPSG:32650" }
  );
var jsonSource_PersilBiatanBapinang_Erase2_2 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_PersilBiatanBapinang_Erase2_2.addFeatures(
  features_PersilBiatanBapinang_Erase2_2
);
var lyr_PersilBiatanBapinang_Erase2_2 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_PersilBiatanBapinang_Erase2_2,
  style: style_PersilBiatanBapinang_Erase2_2,
  interactive: true,
  title:
    '<img src="/webgis/styles/legend/PersilBiatanBapinang_Erase2_2.png" /> Persil Biatan Bapinang_Erase 2',
});
var format_POLYGON_BAPINANG_21_NOV_3 = new ol.format.GeoJSON();
var features_POLYGON_BAPINANG_21_NOV_3 =
  format_POLYGON_BAPINANG_21_NOV_3.readFeatures(
    json_POLYGON_BAPINANG_21_NOV_3,
    { dataProjection: "EPSG:4326", featureProjection: "EPSG:32650" }
  );
var jsonSource_POLYGON_BAPINANG_21_NOV_3 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_POLYGON_BAPINANG_21_NOV_3.addFeatures(
  features_POLYGON_BAPINANG_21_NOV_3
);
var lyr_POLYGON_BAPINANG_21_NOV_3 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_POLYGON_BAPINANG_21_NOV_3,
  style: style_POLYGON_BAPINANG_21_NOV_3,
  interactive: true,
  title:
    '<img src="/webgis/styles/legend/POLYGON_BAPINANG_21_NOV_3.png" /> POLYGON_BAPINANG_21_NOV',
});
var format_JALAN_BAPINANG_4 = new ol.format.GeoJSON();
var features_JALAN_BAPINANG_4 = format_JALAN_BAPINANG_4.readFeatures(
  json_JALAN_BAPINANG_4,
  { dataProjection: "EPSG:4326", featureProjection: "EPSG:32650" }
);
var jsonSource_JALAN_BAPINANG_4 = new ol.source.Vector({
  attributions: " ",
});
jsonSource_JALAN_BAPINANG_4.addFeatures(features_JALAN_BAPINANG_4);
var lyr_JALAN_BAPINANG_4 = new ol.layer.Vector({
  declutter: true,
  source: jsonSource_JALAN_BAPINANG_4,
  style: style_JALAN_BAPINANG_4,
  interactive: true,
  title:
    '<img src="/webgis/styles/legend/JALAN_BAPINANG_4.png" /> JALAN_BAPINANG',
});

lyr_GoogleEarth_0.setVisible(true);
lyr_BatasAdministrasiBiatanBapinang_1.setVisible(true);
lyr_PersilBiatanBapinang_Erase2_2.setVisible(true);
lyr_POLYGON_BAPINANG_21_NOV_3.setVisible(true);
lyr_JALAN_BAPINANG_4.setVisible(true);
var layersList = [
  lyr_GoogleEarth_0,
  lyr_BatasAdministrasiBiatanBapinang_1,
  lyr_PersilBiatanBapinang_Erase2_2,
  lyr_POLYGON_BAPINANG_21_NOV_3,
  lyr_JALAN_BAPINANG_4,
];
lyr_BatasAdministrasiBiatanBapinang_1.set("fieldAliases", {
  Id: "Id",
  RT: "RT",
});
lyr_PersilBiatanBapinang_Erase2_2.set("fieldAliases", {
  Id: "Id",
  Shape_Leng: "Shape_Leng",
  Shape_Area: "Shape_Area",
});
lyr_POLYGON_BAPINANG_21_NOV_3.set("fieldAliases", {
  Id: "Id",
  RT: "RT",
  PL_CITRA: "PL_CITRA",
});
lyr_JALAN_BAPINANG_4.set("fieldAliases", { Id: "Id", RT: "RT" });
lyr_BatasAdministrasiBiatanBapinang_1.set("fieldImages", {
  Id: "Range",
  RT: "TextEdit",
});
lyr_PersilBiatanBapinang_Erase2_2.set("fieldImages", {
  Id: "TextEdit",
  Shape_Leng: "TextEdit",
  Shape_Area: "TextEdit",
});
lyr_POLYGON_BAPINANG_21_NOV_3.set("fieldImages", {
  Id: "Range",
  RT: "TextEdit",
  PL_CITRA: "TextEdit",
});
lyr_JALAN_BAPINANG_4.set("fieldImages", { Id: "Range", RT: "TextEdit" });
lyr_BatasAdministrasiBiatanBapinang_1.set("fieldLabels", {
  Id: "no label",
  RT: "no label",
});
lyr_PersilBiatanBapinang_Erase2_2.set("fieldLabels", {
  Id: "no label",
  Shape_Leng: "no label",
  Shape_Area: "no label",
});
lyr_POLYGON_BAPINANG_21_NOV_3.set("fieldLabels", {
  Id: "no label",
  RT: "no label",
  PL_CITRA: "no label",
});
lyr_JALAN_BAPINANG_4.set("fieldLabels", { Id: "no label", RT: "no label" });
lyr_JALAN_BAPINANG_4.on("precompose", function (evt) {
  evt.context.globalCompositeOperation = "normal";
});
