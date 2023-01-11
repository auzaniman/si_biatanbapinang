<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeskripsiKebijakanModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = "deskripsi_kebijakan_strategi";

  protected $fillable = [
    'deskripsi',
  ];
}
