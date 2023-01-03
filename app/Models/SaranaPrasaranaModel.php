<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaranaPrasaranaModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = "sarana_prasarana";

  protected $fillable = [
    'jenis_fasilitas',
    'nama_barang',
    'jumlah_barang',
  ];
}
