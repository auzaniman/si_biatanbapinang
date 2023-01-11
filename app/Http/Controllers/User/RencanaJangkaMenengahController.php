<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ArahKebijakanStrategisModel;
use App\Models\DeskripsiKebijakanModel;
use App\Models\StrategiPencapaianModel;
use App\Models\VisiMisiModel;
use Illuminate\Http\Request;

class RencanaJangkaMenengahController extends Controller
{
  public function index(Request $request)
  {
    $visi_misi = VisiMisiModel::first();
    $arah_kebijakan = ArahKebijakanStrategisModel::get();
    $deskripsi_kebijakan = DeskripsiKebijakanModel::first();
    $strategi_pencapaian = StrategiPencapaianModel::first();

    return view('superuser.pages.rencanajangkamenengah', compact('visi_misi','arah_kebijakan','deskripsi_kebijakan','strategi_pencapaian'))->with('i', ($request->input('page', 1) - 1) * 20);
  }
}
