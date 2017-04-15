<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefSatuanBesarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_satuan_besar', function (Blueprint $table) {
          $table->increments('id');
          $table->string('kode_satuan_besar');
          $table->string('nama_satuan_besar');
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
        Schema::drop('ref_satuan_besar');
    }
}
