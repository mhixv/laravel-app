<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddJenisObatIdOnObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_obat', function (Blueprint $table) {
            $table->integer('jenis_obat_id')->after('golongan_obat_id')->unsigned();
            $table->foreign('jenis_obat_id')->references('id')
                  ->on('ref_jenis_obat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropColumn('jenis_obat_id');
    }
}
