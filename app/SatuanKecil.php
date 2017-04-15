<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SatuanKecil extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ref_satuan_kecil';

    protected $fillable = ['kode_satuan_kecil','nama_satuan_kecil'];
}
