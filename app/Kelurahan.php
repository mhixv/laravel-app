<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_kelurahan';

    protected $fillable = ['kode_kelurahan','nama_kelurahan','kecamatan_id'];

    public function kecamatan()
  	{
        return $this->belongsTo('App\Kecamatan','kecamatan_id','id');
    }
}
