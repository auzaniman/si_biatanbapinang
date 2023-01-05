<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ChartBar;
use App\Models\LetakGeografisModel;
use App\Models\OrbitasiModel;
use App\Models\ProfileKampungModel;
use App\Models\SaranaPrasaranaModel;
use App\Models\SettingModel;
use App\Models\StrukturOrganisasiModel;
use App\Models\User;

class ProfileDesaController extends Controller
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

    return
    view('superuser.pages.profiledesa.profiledesa',
      compact('profil','struktur','geografis','orbitasi','sarana_jalan','sarana_kesehatan','sarana_pendidikan','sarana_pertanian','sarana_umum','sarana_jalan_id')
    );
  }
}
