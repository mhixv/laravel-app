<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GolonganObat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ref_golongan_obat';

    protected $fillable = ['kode_golongan_obat','nama_golongan_obat'];
}
