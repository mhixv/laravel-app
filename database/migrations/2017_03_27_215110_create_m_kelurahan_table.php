<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMKelurahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kelurahan', function (Blueprint $table) {
          $table->increments('id');
          $table->string('kode_kelurahan');
          $table->string('nama_kelurahan');
          $table->integer('kecamatan_id')->unsigned();
          $table->timestamps();
          $table->foreign('kecamatan_id')->references('id')->on('m_kecamatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('m_kelurahan');
    }
}
