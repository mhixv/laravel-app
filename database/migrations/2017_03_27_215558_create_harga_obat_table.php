<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHargaObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga_obat', function (Blueprint $table) {
            $table->increments('id_harga_obat');
            $table->integer('kode_tarif_id')->unsigned();
            $table->integer('obat_id')->unsigned();
            $table->integer('harga');
            $table->string('kode_milik_obat');
            $table->timestamps();
            $table->foreign('kode_tarif_id')->references('id')
                  ->on('ref_kode_tarif');
            $table->foreign('obat_id')->references('id')
                  ->on('m_obat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('harga_obat');
    }
}
