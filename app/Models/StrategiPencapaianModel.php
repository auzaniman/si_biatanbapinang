<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StrategiPencapaianModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = "strategi_pencapaian";

  protected $fillable = [
    'pencapaian',
  ];
}
