<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TantanganPotensiModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = "tantangan_potensi";

  protected $fillable = [
    'kategori_urusan',
    'sub_kategori',
    'sub_kategori_baru',
    'potensi',
    'tantangan',
  ];
}
