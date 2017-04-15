<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisObat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ref_jenis_obat';

    protected $fillable = ['kode_jenis_obat','nama_jenis_obat'];
}
