<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPuskesmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_puskesmas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('kode_puskesmas');
          $table->string('nama_puskesmas');
          $table->integer('kecamatan_id')->unsigned();
          $table->integer('kelurahan_id')->unsigned();
          $table->timestamps();
          $table->foreign('kecamatan_id')->references('id')
                ->on('m_kecamatan');
          $table->foreign('kelurahan_id')->references('id')
                ->on('m_kelurahan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('m_puskesmas');
    }
}
