@extends('officer.layouts.app')

@section('title')
Struktur Setting
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <form method="POST" action="{{route('officer.edit_struktur', $data->id)}}">
          @method('put')
          @csrf
          <label>Tahun Kepengurusan</label>
          <div class="input-group mb-3">
            <input type="text" name="tahun_kepengurusan" id="tahun_kepengurusan" class="form-control" value="{{$data->tahun_kepengurusan}}">
          </div>
          <label>Divisi Utama</label>
          <div class="input-group mb-3">
            <select class="form-control me-3 @error('divisi') is-invalid @enderror" id="divisi" name="divisi">
              <option value="{{$data->divisi}}">{{$data->divisi}}</option>
              <option value="pengurus_pusat">Pengurus Pusat</option>
              <option value="ketua_rt">Ketua RT</option>
              <option value="bpk">Badan Permusyawaratan Masyarakat</option>
              <option value="lpm">Lembaga Pemberdayaan Masyarakat</option>
              <option value="pkk">Penggerak PKK</option>
              <option value="posyandu">Posyandu</option>
              <option value="karang_taruna">Karang Taruna</option>
              <option value="kelompok_sadar_wisata">Kelompok Sadar Wisata</option>
            </select>
          </div>
          <label>Tambah Divisi Utama Baru</label>
          <div class="input-group mb-3">
            <input type="text" name="divisi_baru" id="divisi_baru" class="form-control" value="{{$data->divisi_baru}}">
          </div>
          <label>Sub Divisi</label>
          <div class="input-group mb-3">
            <input type="text" name="sub_divisi" id="sub_divisi" class="form-control" value="{{$data->sub_divisi}}" placeholder="Ketua/Wakil/Sekertaris/Seksi/Anggota">
          </div>
          <label>Nama</label>
          <div class="input-group mb-3">
            <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" value="{{$data->nama_anggota}}">
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
