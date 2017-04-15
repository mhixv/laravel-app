<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_obat';

    protected $guarded = ['id'];

    public function golongan_obat()
  	{
        return $this->belongsTo('App\GolonganObat','golongan_obat_id','id');
    }

    public function jenis_obat()
  	{
        return $this->belongsTo('App\JenisObat','jenis_obat_id','id');
    }

    public function satuan_besar()
  	{
        return $this->belongsTo('App\SatuanBesar','satuan_besar_id','id');
    }

    public function satuan_kecil()
  	{
        return $this->belongsTo('App\SatuanKecil','satuan_kecil_id','id');
    }

    public function terapi_obat()
  	{
        return $this->belongsTo('App\TerapiObat','terapi_obat_id','id');
    }
}
