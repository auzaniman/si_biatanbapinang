<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LetakGeografisModel;
use App\Models\OrbitasiModel;
use App\Models\ProfileKampungModel;
use App\Models\SaranaPrasaranaModel;
use App\Models\StrukturOrganisasiModel;

class ProfileDesaOfficerController extends Controller
{
  public function index()
  {
    $profil = ProfileKampungModel::first();
    $struktur = StrukturOrganisasiModel::all()->where('divisi', 'pengurus_pusat')->where('sub_divisi', 'Ketua Kampung');

    $geografis = LetakGeografisModel::first();
    $orbitasi = OrbitasiModel::first();

    $sarana_jalan = SaranaPrasaranaModel::all()->where('jenis_fasilitas', 'akses');
    $sarana_kesehatan = SaranaPrasaranaModel::all()->where('jenis_fasilitas', 'kesehatan');
    $sarana_pendidikan = SaranaPrasaranaModel::all()->where('jenis_fasilitas', 'pendidikan');
    $sarana_pertanian = SaranaPrasaranaModel::all()->where('jenis_fasilitas', 'pertanian_perternakan');
    $sarana_umum = SaranaPrasaranaModel::all()->where('jenis_fasilitas', 'fasilitas_umum');

    $sarana_jalan_id = SaranaPrasaranaModel::where('jenis_fasilitas', 'akses')->first();

    return view('officer.pages.profiledesa.profiledesa',
      compact('profil','struktur','geografis','orbitasi','sarana_jalan','sarana_kesehatan','sarana_pendidikan','sarana_pertanian','sarana_umum','sarana_jalan_id')
    );
  }

  public function showEditSarana($id)
  {
    $data = SaranaPrasaranaModel::findOrFail($id);

    return view('officer.pages.profiledesa.edit_sarana', compact('data'));
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

  public function storeLetakGeografis(Request $request)
  {
    $data = new LetakGeografisModel();

    $data->sebelah_utara = $request->sebelah_utara;
    $data->sebelah_timur = $request->sebelah_timur;
    $data->sebelah_barat = $request->sebelah_barat;
    $data->sebelah_selatan = $request->sebelah_selatan;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Letak Geografis berhasil Diubah',
      'status' => 'Letak Geografis berhasil Diubah'
    ]);
  }

  public function storeOrbitasi(Request $request)
  {
    $data = new OrbitasiModel();

    $data->jarak_ke_kecamatan = $request->jarak_ke_kecamatan;
    $data->waktu_ke_kecamatan = $request->waktu_ke_kecamatan;
    $data->kendaraan_ke_kecamatan = $request->kendaraan_ke_kecamatan;
    $data->jarak_ke_kabupaten = $request->jarak_ke_kabupaten;
    $data->waktu_ke_kabupaten = $request->waktu_ke_kabupaten;
    $data->kendaraan_ke_kabupaten = $request->kendaraan_ke_kabupaten;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Orbitasi berhasil Diubah',
      'status' => 'Orbitasi berhasil Diubah'
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

  public function updateLetakGeografis(Request $request, $id)
  {
    $data = LetakGeografisModel::findOrFail($id);

    $data->sebelah_utara = $request->sebelah_utara;
    $data->sebelah_timur = $request->sebelah_timur;
    $data->sebelah_barat = $request->sebelah_barat;
    $data->sebelah_selatan = $request->sebelah_selatan;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Letak Geografis berhasil Diubah',
      'status' => 'Letak Geografis berhasil Diubah'
    ]);
  }
  public function updateOrbitasi(Request $request, $id)
  {
    $data = OrbitasiModel::findOrFail($id);

    $data->jarak_ke_kecamatan = $request->jarak_ke_kecamatan;
    $data->waktu_ke_kecamatan = $request->waktu_ke_kecamatan;
    $data->kendaraan_ke_kecamatan = $request->kendaraan_ke_kecamatan;
    $data->jarak_ke_kabupaten = $request->jarak_ke_kabupaten;
    $data->waktu_ke_kabupaten = $request->waktu_ke_kabupaten;
    $data->kendaraan_ke_kabupaten = $request->kendaraan_ke_kabupaten;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Orbitasi berhasil Diubah',
      'status' => 'Orbitasi berhasil Diubah'
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

  public function destroySarana($id)
  {
    $data = SaranaPrasaranaModel::findOrFail($id);
    $data->delete();

    return redirect()->back()
    ->with([
      'message' => 'berhasil dihapus',
      'status' => 'Berhasil dihapus'
    ]);
  }

  public function destroyOrbitasi($id)
  {
    $data = OrbitasiModel::findOrFail($id);
    $data->delete();

    return redirect()->back()
    ->with([
      'message' => 'berhasil dihapus',
      'status' => 'Berhasil dihapus'
    ]);
  }

  public function destroyGeografis($id)
  {
    $data = LetakGeografisModel::findOrFail($id);
    $data->delete();

    return redirect()->back()
    ->with([
      'message' => 'berhasil dihapus',
      'status' => 'Berhasil dihapus'
    ]);
  }
}
