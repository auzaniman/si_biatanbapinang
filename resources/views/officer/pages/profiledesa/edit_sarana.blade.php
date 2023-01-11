@extends('officer.layouts.app')

@section('title')
Sarana Setting
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <form method="POST" action="{{route('officer.edit_sarana_prasarana', $data->id)}}" enctype="multipart/form-data">
          @method('put')
          @csrf
          <label>Jenis Fasilitas Sarana Prasarana</label>
          <div class="input-group mb-3">
            <select class="form-control me-3 @error('jenis_fasilitas') is-invalid @enderror" id="jenis_fasilitas" name="jenis_fasilitas">
              <option value="{{$data->jenis_fasilitas}}">{{$data->jenis_fasilitas}}</option>
              <option value="akses">Aksesbilitas/Jalan</option>
              <option value="pendidikan">Pendidikan</option>
              <option value="kesehatan">Kesehatan</option>
              <option value="pertanian_perternakan">Pertanian/Perternakan</option>
              <option value="fasilitas_umum">Fasilitas Umum</option>
            </select>
          </div>
          <label>Nama Barang</label>
          <div class="input-group mb-3">
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{$data->nama_barang}}">
          </div>
          <label>Jumlah Barang</label>
          <div class="input-group mb-3">
            <input type="text" name="jumlah_barang" id="jumlah_barang" class="form-control" value="{{$data->jumlah_barang}}">
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-round bg-gradient-info btn-sm mb-0">Ubah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
