@extends('webgis.layouts.app-member')

@section('title')
Peta Kampung
@endsection

@section('content')
<div id="map">
  <div id="popup" class="ol-popup">
    <a href="#" id="popup-closer" class="ol-popup-closer"></a>
    <div id="popup-content"></div>
  </div>
</div>
@endsection
