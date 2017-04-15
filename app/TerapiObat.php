<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerapiObat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ref_terapi_obat';

    protected $fillable = ['kode_terapi_obat','nama_terapi_obat'];
}
