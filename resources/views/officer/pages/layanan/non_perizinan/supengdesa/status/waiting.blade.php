@extends('officer.layouts.app')

@section('title')
Permohonan Waiting
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Data Pemohon Surat Pengantar Kampung dalam proses
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-sm">Table Data</p>
        <button class="btn btn-icon btn-xs btn-3 btn-primary me-2" type="button">
          <span class="btn-inner--icon"><i class="fa fa-globe"></i></span>
          <a href="{{route('officer.supengdesa')}}" class="btn-inner--text text-decoration-none text-reset">Semua</a>
        </button>
        <button class="btn btn-icon btn-xs btn-3 btn-success me-2" type="button">
          <span class="btn-inner--icon"><i class="fa fa-check-circle"></i></span>
          <a href="{{route('officer.terverifikasi_supengdesa')}}" class="btn-inner--text text-decoration-none text-reset">Terverifikasi</a>
        </button>
        <button class="btn btn-icon btn-xs btn-3 btn-danger" type="button">
          <span class="btn-inner--icon"><i class="fa fa-times-circle"></i></span>
          <a href="{{route('officer.ditolak_supengdesa')}}" class="btn-inner--text text-decoration-none text-reset">Ditolak</a>
        </button>
        <div class="table-responsive">
          <table class="table align-items-center mb-3">
            <thead>
              <tr>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">No</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">Nama Pemohon</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">Email Pemohon</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">Berkas</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder">Waktu Pengajuan</th>
                <th class="px-2 text-uppercase text-secondary text-xxs font-weight-bolder text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($supengdesa as $item)
                <tr>
                  <td class="align-middle text-sm">
                    <h6 class="mb-0 text-xs">{{++$i}}</h6>
                  </td>
                  <td class="align-middle text-sm">
                    <h6 class="mb-0 text-xs">{{$item->nama_pemohon}}</h6>
                  </td>
                  <td class="align-middle text-sm">
                    <h6 class="mb-0 text-xs">{{$item->email_pemohon}}</h6>
                  </td>
                  @if (($berkas) != null)
                    @if ($berkas->foto_ktp = null && $berkas->foto_kk = null)
                    <td class="align-middle text-sm">
                      <h6 class="mb-0 text-xs">Tidak Lengkap</h6>
                    </td>
                    @else
                    @endif
                  @else
                  <td class="align-middle text-sm">
                    <h6 class="mb-0 text-xs"><i class="fas fa-check-circle text-success text-sm" aria-hidden="true"></i> Lengkap</h6>
                  </td>
                  @endif
                  <td class="align-middle text-sm">
                    <h6 class="mb-0 text-xs">{{$item->created_at}}</h6>
                  </td>
                  <td class="align-middle text-center">
                    <a href="{{route('officer.show_supengdesa', $item->id)}}" class="btn btn-xs btn-success text-xs mb-0" data-toggle="tooltip" data-original-title="Edit user">
                      Verifikasi
                    </a>
                  </td>
                </tr>
              @empty

              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<a href="{{route('officer.supengdesa')}}" class="btn btn-warning btn-icon mt-3">
  <span class="btn-inner--icon"><i class="ni ni-bold-left text-white"></i></span>
  <span class="btn-inner--text text-white">Kembali</span>
</a>
@endsection
