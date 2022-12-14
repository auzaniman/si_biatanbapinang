<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\StrukturOrganisasiModel;
use Illuminate\Http\Request;

class StrukturOrganisasiUserController extends Controller
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

    return view('superuser.pages.strukturorganisasi', compact('struktur','pusat','rt','bpk','lpm','pkk','posyandu','karang_taruna','kelompok_sadar_wisata'));
  }
}
