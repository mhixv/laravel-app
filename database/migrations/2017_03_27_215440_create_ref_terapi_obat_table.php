<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefTerapiObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_terapi_obat', function (Blueprint $table) {
          $table->increments('id');
          $table->string('kode_terapi_obat');
          $table->string('nama_terapi_obat');
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
        Schema::drop('ref_terapi_obat');
    }
}
