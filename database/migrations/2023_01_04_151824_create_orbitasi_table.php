<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrbitasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orbitasi', function (Blueprint $table) {
            $table->id();
            $table->string('jarak_ke_kecamatan')->nullable();
            $table->string('waktu_ke_kecamatan')->nullable();
            $table->string('kendaraan_ke_kecamatan')->nullable();
            $table->string('jarak_ke_kabupaten')->nullable();
            $table->string('waktu_ke_kabupaten')->nullable();
            $table->string('kendaraan_ke_kabupaten')->nullable();
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
        Schema::dropIfExists('orbitasi');
    }
}
