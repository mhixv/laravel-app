<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefSatuanKecilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_satuan_kecil', function (Blueprint $table) {
          $table->increments('id');
          $table->string('kode_satuan_kecil');
          $table->string('nama_satuan_kecil');
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
        Schema::drop('ref_satuan_kecil');
    }
}
