<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puskesmas extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_puskesmas';

    protected $fillable = ['kode_puskesmas','nama_puskesmas','kecamatan_id','kelurahan_id'];

    public function kecamatan()
  	{
        return $this->belongsTo('App\Kecamatan','kecamatan_id','id');
    }

    public function kelurahan()
  	{
        return $this->belongsTo('App\Kelurahan','kelurahan_id','id');
    }
}
