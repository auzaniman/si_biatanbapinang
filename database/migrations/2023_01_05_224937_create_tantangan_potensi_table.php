<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTantanganPotensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tantangan_potensi', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_urusan')->nullable();
            $table->string('sub_kategori')->nullable();
            $table->string('sub_kategori_baru')->nullable();
            $table->text('potensi')->nullable();
            $table->text('tantangan')->nullable();
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
        Schema::dropIfExists('tantangan_potensi');
    }
}
