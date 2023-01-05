<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLetakGeografisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letak_geografis', function (Blueprint $table) {
          $table->id();
          $table->string('sebelah_utara')->nullable();
          $table->string('sebelah_timur')->nullable();
          $table->string('sebelah_barat')->nullable();
          $table->string('sebelah_selatan')->nullable();
          $table->softDeletes();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('letak_geografis');
    }
}
