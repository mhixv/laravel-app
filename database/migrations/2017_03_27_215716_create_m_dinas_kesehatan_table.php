<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMDinasKesehatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_dinas_kesehatan', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('kode_badan_hukum');
          $table->integer('kode_instansi');
          $table->string('nama_instansi');
          $table->string('alamat1');
          $table->string('alamat2');
          $table->string('kota');
          $table->string('kode_pos');
          $table->string('telepon');
          $table->string('faksimil');
          $table->date('tanggal_akta_sk_terakhir');
          $table->string('nomor_akta_sk_terakhir');
          $table->date('tanggal_pengesahan');
          $table->string('email');
          $table->string('website');
          $table->date('tanggal_awal_pendirian');
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
        Schema::drop('m_dinas_kesehatan');
    }
}
