<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChartBar;
use App\Models\LetakGeografisModel;
use App\Models\ProfileKampungModel;
use App\Models\SaranaPrasaranaModel;
use App\Models\StrukturOrganisasiModel;
use App\Models\SettingModel;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProfileDesaOfficerController extends Controller
{
  public function index()
  {
    $profil = ProfileKampungModel::first();
    $struktur = StrukturOrganisasiModel::all()->where('divisi', 'pengurus_pusat')->where('sub_divisi', 'Ketua Kampung');
    $geografis = LetakGeografisModel::select('batas_wilayah', 'keterangan_batas')->get();
    $orbitasi = LetakGeografisModel::select('orbitasi', 'keterangan_orbitasi')->get();
    $sarana_jalan = SaranaPrasaranaModel::all()->where('jenis_fasilitas', 'akses');
    $sarana_kesehatan = SaranaPrasaranaModel::all()->where('jenis_fasilitas', 'kesehatan');
    $sarana_pendidikan = SaranaPrasaranaModel::all()->where('jenis_fasilitas', 'pendidikan');
    $sarana_pertanian = SaranaPrasaranaModel::all()->where('jenis_fasilitas', 'pertanian_perternakan');
    $sarana_umum = SaranaPrasaranaModel::all()->where('jenis_fasilitas', 'fasilitas_umum');

    $sarana_jalan_id = SaranaPrasaranaModel::where('jenis_fasilitas', 'akses')->first();

    return view('officer.pages.profiledesa.profiledesa', compact('profil','struktur','geografis','orbitasi','sarana_jalan','sarana_kesehatan','sarana_pendidikan','sarana_pertanian','sarana_umum','sarana_jalan_id'));
  }

  public function store(Request $request)
  {
    $chartbar = new ChartBar([
      'jumlahWarga' => $request->get('jumlahWarga'),
      'jumlahKepalaKeluarga' => $request->get('jumlahKepalaKeluarga'),
      'rt' => $request->get('rt'),
    ]);
    $chartbar->save();

    return redirect()->back()
    ->with([
        'message' => 'berhasil ditambahkan',
        'status' => 'Sukses! Data chart berhasil ditambahkan'
    ]);
  }

  public function storeProfileKampung(Request $request)
  {
    $data = new ProfileKampungModel();

    $data->sejarah_kampung = $request->sejarah_kampung;
    $data->kondisi_ekonomi = $request->kondisi_ekonomi;
    $data->kondisi_pemerintah = $request->kondisi_pemerintah;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Profil Kampung berhasil Diubah',
      'status' => 'Profil Kampung berhasil Diubah'
    ]);
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

  public function storeLetakGeografis(Request $request)
  {
    $data = new LetakGeografisModel();

    $data->batas_wilayah = $request->batas_wilayah;
    $data->keterangan_batas = $request->keterangan_batas;
    $data->orbitasi = $request->orbitasi;
    $data->keterangan_orbitasi = $request->keterangan_orbitasi;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Letak Geografis berhasil Diubah',
      'status' => 'Letak Geografis berhasil Diubah'
    ]);
  }

  public function storeOrbitasi(Request $request)
  {
    $data = new LetakGeografisModel();

    $data->batas_wilayah = $request->batas_wilayah;
    $data->keterangan_batas = $request->keterangan_batas;
    $data->orbitasi = $request->orbitasi;
    $data->keterangan_orbitasi = $request->keterangan_orbitasi;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Letak Geografis berhasil Diubah',
      'status' => 'Letak Geografis berhasil Diubah'
    ]);
  }

  public function storeSaranaPrasarana(Request $request)
  {
    $data = new SaranaPrasaranaModel();

    $data->jenis_fasilitas = $request->jenis_fasilitas;
    $data->nama_barang = $request->nama_barang;
    $data->jumlah_barang = $request->jumlah_barang;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Sarana Prasarana berhasil Ditambahkan',
      'status' => 'Sarana Prasarana berhasil Ditambahkan'
    ]);
  }

  public function updateProfileKampung(Request $request, $id)
  {
    $data = ProfileKampungModel::findOrFail($id);

    $data->sejarah_kampung = $request->sejarah_kampung;
    $data->kondisi_ekonomi = $request->kondisi_ekonomi;
    $data->kondisi_pemerintah = $request->kondisi_pemerintah;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Profil Kampung berhasil Diubah',
      'status' => 'Profil Kampung berhasil Diubah'
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

  public function updateLetakGeografis(Request $request, $id)
  {
    $data = LetakGeografisModel::findOrFail($id);

    $data->batas_wilayah = $request->batas_wilayah;
    $data->keterangan_batas = $request->keterangan_batas;
    $data->orbitasi = $request->orbitasi;
    $data->keterangan_orbitasi = $request->keterangan_orbitasi;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Letak Geografis berhasil Diubah',
      'status' => 'Letak Geografis berhasil Diubah'
    ]);
  }

  public function updateSaranaPrasarana(Request $request, $id)
  {
    $data = SaranaPrasaranaModel::findOrFail($id);

    $data->jenis_fasilitas = $request->jenis_fasilitas;
    $data->nama_barang = $request->nama_barang;
    $data->jumlah_barang = $request->jumlah_barang;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Sarana Prasarana berhasil Diubah',
      'status' => 'Sarana Prasarana berhasil Diubah'
    ]);
  }

  public function update(Request $request, $id)
  {
    ChartBar::where('id', $id)
      ->update([
        'jumlahWarga' => $request->jumlahWarga,
        'jumlahKepalaKeluarga' => $request->jumlahKepalaKeluarga,
        'rt' => $request->rt,
      ]);

    return redirect()->back()
    ->with([
        'message' => 'berhasil diubah',
        'status' => 'Data chart berhasil diubah'
    ]);
    // return $request;
  }

  public function destroy($id)
  {
    $chart = ChartBar::where('id', $id)->first();
    $chart->delete();

    return redirect()->back()
    ->with([
        'message' => 'berhasil dihapus',
        'status' => 'Data chart berhasil dihapus'
    ]);

  }

  public function index_edit()
    {
      $charts = ChartBar::all();
      return view('officer.pages.profiledesa.chart.edit', [
        'charts' => $charts
      ]);
    }
}
