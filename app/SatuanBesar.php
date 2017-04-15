<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SatuanBesar extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ref_satuan_besar';

    protected $fillable = ['kode_satuan_besar','nama_satuan_besar'];
}
