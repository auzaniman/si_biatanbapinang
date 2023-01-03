<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasiModel;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
  public function index()
  {
    $pusat = StrukturOrganisasiModel::all()->where('divisi', 'pengurus_pusat');
    $rt = StrukturOrganisasiModel::all()->where('divisi', 'ketua_rt');
    $bpk = StrukturOrganisasiModel::all()->where('divisi', 'bpk');
    $lpm = StrukturOrganisasiModel::all()->where('divisi', 'lpm');
    $pkk = StrukturOrganisasiModel::all()->where('divisi', 'pkk');
    $posyandu = StrukturOrganisasiModel::all()->where('divisi', 'posyandu');
    $kartar = StrukturOrganisasiModel::all()->where('divisi', 'karang_taruna');
    $kelsawi = StrukturOrganisasiModel::all()->where('divisi', 'kelompok_sadar_wisata');

    return view('officer.pages.strukturorganisasi', compact('pusat','rt','bpk','lpm','pkk','posyandu','kartar','kelsawi'));
  }
}
