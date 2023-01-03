<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileKampungModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = "profile_kampung";

  protected $fillable = [
    'sejarah_kampung',
    'kondisi_ekonomi',
    'kondisi_pemerintah',
  ];
}
