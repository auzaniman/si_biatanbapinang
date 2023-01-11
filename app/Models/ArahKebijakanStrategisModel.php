<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArahKebijakanStrategisModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = "arah_kebijakan_strategi";

  protected $fillable = [
    'strategi',
    'kebijakan',
  ];
}
