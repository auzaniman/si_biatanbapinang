<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\SettingModel;
use App\Models\TantanganPotensiModel;
use Illuminate\Http\Request;

class TantanganDanPotensiOfficerController extends Controller
{
  public function index(Request $request)
  {
    $data = TantanganPotensiModel::all();

    return view('officer.pages.tantanganpotensi.tantangandanpotensi', compact('data'))->with('i', ($request->input('page', 1) - 1) * 20);
  }

  public function store(Request $request)
  {
    $data = new TantanganPotensiModel();

    $data->kategori_urusan = $request->kategori_urusan;
    $data->sub_kategori = $request->sub_kategori;
    $data->sub_kategori_baru = $request->sub_kategori_baru;
    $data->potensi = $request->potensi;
    $data->tantangan = $request->tantangan;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Tantangan Potensi berhasil Ditambahkan',
      'status' => 'Tantangan Potensi berhasil Ditambahkan'
    ]);
  }

  public function show($id)
  {
    $data = TantanganPotensiModel::findOrFail($id);

    return view('officer.pages.tantanganpotensi.edit', compact('data'));
  }

  public function update(Request $request, $id)
  {
    $data = TantanganPotensiModel::findOrFail($id);

    $data->kategori_urusan = $request->kategori_urusan;
    $data->sub_kategori = $request->sub_kategori;
    $data->sub_kategori_baru = $request->sub_kategori_baru;
    $data->potensi = $request->potensi;
    $data->tantangan = $request->tantangan;

    $data->save();

    return redirect()->back()->with([
      'message' => 'Tantangan Potensi berhasil Diubah',
      'status' => 'Tantangan Potensi berhasil Diubah'
    ]);
  }

  public function destroyTDP($id)
  {
    $data = TantanganPotensiModel::findOrFail($id);
    $data->delete();

    return redirect()->back()
    ->with([
      'message' => 'berhasil dihapus',
      'status' => 'Berhasil dihapus'
    ]);
  }
}
