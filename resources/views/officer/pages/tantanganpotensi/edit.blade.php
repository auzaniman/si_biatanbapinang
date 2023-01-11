@extends('officer.layouts.app')

@section('title')
TDP Setting
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <form method="POST" action="{{route('officer.update_tdp', $data->id)}}" enctype="multipart/form-data">
          @method('put')
          @csrf
          <label>Jenis Urusan</label>
          <div class="input-group mb-3">
            <select class="form-control me-3 @error('kategori_urusan') is-invalid @enderror" id="kategori_urusan" name="kategori_urusan">
              <option value="{{$data->kategori_urusan}}">{{$data->kategori_urusan}}</option>
              <option value="wajib">Wajib</option>
              <option value="pilihan">Pilihan</option>
            </select>
          </div>
          <label>Kategori</label>
          <div class="input-group mb-3">
            <select class="form-control me-3 @error('sub_kategori') is-invalid @enderror" id="sub_kategori" name="sub_kategori">
              <option value="{{$data->sub_kategori}}">{{$data->sub_kategori}}</option>
              <option value="pendidikan">Pendidikan</option>
              <option value="kesehatan">kesehatan</option>
              <option value="sarana">Sarana Prasarana</option>
              <option value="sosial">Sosial Budaya</option>
              <option value="kerohanian">Kerohanian</option>
              <option value="koperasi">Koperasi dan Usaha Masyarakat</option>
              <option value="pemerintah">Pemerintah</option>
              <option value="pertanian">Pertanian</option>
              <option value="peternakan">peternakan</option>
            </select>
          </div>
          <label>Kategori Lain</label>
          <div class="input-group mb-3">
            <input type="text" name="sub_kategori_baru" id="sub_kategori_baru" class="form-control" value="{{$data->sub_kategori_baru}}">
          </div>
          <label>Potensi</label>
          <div class="input-group mb-3">
            <textarea type="text" name="potensi" id="potensi" class="form-control" rows="5">
              {{$data->potensi}}
            </textarea>
          </div>
          <label>Tantangan</label>
          <div class="input-group mb-3">
            <textarea type="text" name="tantangan" id="tantangan" class="form-control" rows="5">
              {{$data->tantangan}}
            </textarea>
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
