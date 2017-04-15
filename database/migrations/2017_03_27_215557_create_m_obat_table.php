<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_obat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_obat');
            $table->string('nama_obat');
            $table->integer('golongan_obat_id')->unsigned();
            $table->integer('satuan_besar_id')->unsigned();
            $table->integer('satuan_kecil_id')->unsigned();
            $table->string('generic');
            $table->integer('terapi_obat_id')->unsigned();
            $table->string('fraction');
            $table->string('singkatan');
            $table->timestamps();
            $table->foreign('golongan_obat_id')->references('id')
                  ->on('ref_golongan_obat');
            $table->foreign('satuan_besar_id')->references('id')
                  ->on('ref_satuan_besar');
            $table->foreign('satuan_kecil_id')->references('id')
                  ->on('ref_satuan_kecil');
            $table->foreign('terapi_obat_id')->references('id')
                  ->on('ref_terapi_obat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('m_obat');
    }
}
