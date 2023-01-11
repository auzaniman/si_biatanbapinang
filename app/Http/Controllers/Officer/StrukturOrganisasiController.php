<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasiModel;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
  public function index()
  {
    $struktur = StrukturOrganisasiModel::all();
    $pusat = StrukturOrganisasiModel::all()->where('divisi', 'pengurus_pusat');
    $rt = StrukturOrganisasiModel::all()->where('divisi', 'ketua_rt');
    $bpk = StrukturOrganisasiModel::all()->where('divisi', 'bpk');
    $lpm = StrukturOrganisasiModel::all()->where('divisi', 'lpm');
    $pkk = StrukturOrganisasiModel::all()->where('divisi', 'pkk');
    $posyandu = StrukturOrganisasiModel::all()->where('divisi', 'posyandu');
    $karang_taruna = StrukturOrganisasiModel::all()->where('divisi', 'karang_taruna');
    $kelompok_sadar_wisata = StrukturOrganisasiModel::all()->where('divisi', 'kelompok_sadar_wisata');

    return view('officer.pages.strukturorganisasi.strukturorganisasi', compact('struktur','pusat','rt','bpk','lpm','pkk','posyandu','karang_taruna','kelompok_sadar_wisata'));
  }

  public function showEditStruktur($id)
  {
    $data = StrukturOrganisasiModel::findOrFail($id);

    return view('officer.pages.strukturorganisasi.edit_struktur', compact('data'));
  }

  public function storeStrukturOrganisasi(Request $request)
  {
    $data = new StrukturOrganisasiModel();

    $data->tahun_kepengurusan = $request->tahun_kepengurusan;
    $data->divisi = $request->divisi;
    $data->divisi_baru = $request->divisi_baru;
    $data->sub_divisi = $request->sub_divisi;
    $data->nama_anggota = $request->nama_anggota;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Struktur Organisasi berhasil Diubah',
      'status' => 'Struktur Organisasi berhasil Diubah'
    ]);
  }

  public function updateStrukturOrganisasi(Request $request, $id)
  {
    $data = StrukturOrganisasiModel::findOrFail($id);

    $data->tahun_kepengurusan = $request->tahun_kepengurusan;
    $data->divisi = $request->divisi;
    $data->divisi_baru = $request->divisi_baru;
    $data->sub_divisi = $request->sub_divisi;
    $data->nama_anggota = $request->nama_anggota;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Struktur Organisasi berhasil Diubah',
      'status' => 'Struktur Organisasi berhasil Diubah'
    ]);
  }
}
