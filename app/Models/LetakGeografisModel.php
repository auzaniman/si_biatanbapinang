<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LetakGeografisModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = "letak_geografis";

  protected $fillable = [
    'sebelah_utara',
    'sebelah_timur',
    'sebelah_barat',
    'sebelah_selatan',
  ];
}
