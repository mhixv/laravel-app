<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_kecamatan';

    protected $fillable = ['kode_kecamatan','nama_kecamatan'];
}
