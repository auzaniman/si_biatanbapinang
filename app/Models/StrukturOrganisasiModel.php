<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StrukturOrganisasiModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = "struktur_organisasi";

  protected $fillable = [
    'tahun_kepengurusan',
    'divisi',
    'divisi_baru',
    'sub_divisi',
    'nama_anggota',
  ];
}
