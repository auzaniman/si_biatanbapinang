<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrbitasiModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = "orbitasi";

  protected $fillable = [
    'jarak_ke_kecamatan',
    'waktu_ke_kecamatan',
    'kendaraan_ke_kecamatan',
    'jarak_ke_kabupaten',
    'waktu_ke_kabupaten',
    'kendaraan_ke_kabupaten',
  ];
}
