<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\ArahKebijakanStrategisModel;
use App\Models\DeskripsiKebijakanModel;
use App\Models\StrategiPencapaianModel;
use App\Models\VisiMisiModel;
use Illuminate\Http\Request;

class RencanaJangkaMenengahOfficerController extends Controller
{
    public function index(Request $request)
    {
      $visi_misi = VisiMisiModel::first();
      $arah_kebijakan = ArahKebijakanStrategisModel::get();
      $deskripsi_kebijakan = DeskripsiKebijakanModel::first();
      $strategi_pencapaian = StrategiPencapaianModel::first();

      return view('officer.pages.rencanajangkamenengah.rencanajangkamenengah', compact('visi_misi','arah_kebijakan','deskripsi_kebijakan','strategi_pencapaian'))->with('i', ($request->input('page', 1) - 1) * 20);
    }

    public function show($id)
    {
      $data =  ArahKebijakanStrategisModel::findOrFail($id);

      return view('officer.pages.rencanajangkamenengah.edit_arah_kebijakan', compact('data'));
    }

    public function storeVisiMisi(Request $request)
    {
      $data = new VisiMisiModel();

      $data->visi = $request->visi;
      $data->misi = $request->misi;
      $data->save();

      return redirect()->back()->with([
        'message' => 'Visi Misi berhasil Ditambahkan',
        'status' => 'Visi Misi berhasil Ditambahkan'
     ]);
    }

    public function storeArahKebijakan(Request $request)
    {
      $data = new ArahKebijakanStrategisModel();

      $data->strategi = $request->strategi;
      $data->kebijakan = $request->kebijakan;
      $data->save();

      return redirect()->back()->with([
        'message' => 'Arah Kebijakan berhasil Ditambahkan',
        'status' => 'Arah Kebijakan berhasil Ditambahkan'
     ]);
    }

    public function storeDeskripsiKebijakan(Request $request)
    {
      $data = new DeskripsiKebijakanModel();

      $data->deskripsi = $request->deskripsi;
      $data->save();

      return redirect()->back()->with([
        'message' => 'Deskripsi berhasil Ditambahkan',
        'status' => 'Deskripsi berhasil Ditambahkan'
     ]);
    }

    public function storeStrategiPencapaian(Request $request)
    {
      $data = new StrategiPencapaianModel();

      $data->pencapaian = $request->pencapaian;
      $data->save();

      return redirect()->back()->with([
        'message' => 'Strategi Pencapaian berhasil Ditambahkan',
        'status' => 'Strategi Pencapaian berhasil Ditambahkan'
     ]);
    }

    public function updateVisiMisi(Request $request, $id)
    {
      $data = VisiMisiModel::findOrFail($id);

      $data->visi = $request->visi;
      $data->misi = $request->misi;
      $data->save();

      return redirect()->back()->with([
        'message' => 'Visi Misi berhasil Diubah',
        'status' => 'Visi Misi berhasil Diubah'
     ]);
    }

    public function updateArahKebijakan(Request $request, $id)
    {
      $data = ArahKebijakanStrategisModel::findOrFail($id);

      $data->strategi = $request->strategi;
      $data->kebijakan = $request->kebijakan;
      $data->save();

      return redirect()->back()->with([
        'message' => 'Arah Kebijakan berhasil Diubah',
        'status' => 'Arah Kebijakan berhasil Diubah'
     ]);
    }

    public function updateDeskripsiKebijakan(Request $request, $id)
    {
      $data = DeskripsiKebijakanModel::findOrFail($id);

      $data->deskripsi = $request->deskripsi;
      $data->save();

      return redirect()->back()->with([
        'message' => 'Deskripsi berhasil Diubah',
        'status' => 'Deskripsi berhasil Diubah'
     ]);
    }

    public function updateStrategiPencapaian(Request $request, $id)
    {
      $data = StrategiPencapaianModel::findOrFail($id);

      $data->pencapaian = $request->pencapaian;
      $data->save();

      return redirect()->back()->with([
        'message' => 'Strategi Pencapaian berhasil Diubah',
        'status' => 'Strategi Pencapaian berhasil Diubah'
     ]);
    }

    public function destroyVisiMisi($id)
    {
      $data = VisiMisiModel::findOrFail($id);
      $data->delete();

      return redirect()->back()
      ->with([
        'message' => 'berhasil dihapus',
        'status' => 'Berhasil dihapus'
      ]);
    }

    public function destroyArahKebijakan($id)
    {
      $data = ArahKebijakanStrategisModel::findOrFail($id);
      $data->delete();

      return redirect()->back()
      ->with([
        'message' => 'berhasil dihapus',
        'status' => 'Berhasil dihapus'
      ]);
    }

    public function destroyDeskripsiKebijakan($id)
    {
      $data = DeskripsiKebijakanModel::findOrFail($id);
      $data->delete();

      return redirect()->back()
      ->with([
        'message' => 'berhasil dihapus',
        'status' => 'Berhasil dihapus'
      ]);
    }

    public function destroyStrategiPencapaian($id)
    {
      $data = StrategiPencapaianModel::findOrFail($id);
      $data->delete();

      return redirect()->back()
      ->with([
        'message' => 'berhasil dihapus',
        'status' => 'Berhasil dihapus'
      ]);
    }
}
