<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_pegawai';

    protected $fillable = ['nip_pegawai','nama_pegawai'];
}
