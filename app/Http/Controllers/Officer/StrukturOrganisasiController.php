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

    return view('officer.pages.strukturorganisasi', compact('struktur'));
  }
}
