<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
    * The URIs that should be excluded from CSRF verification.
    *
    * @var array
    */
    protected $except = [
       'admin/kecamatan/delete/*',
       'admin/puskesmas/delete/*',
       'admin/pegawai/delete/*',
       'admin/satuankecil/delete/*',
       'admin/satuanbesar/delete/*',
       'admin/jenisobat/delete/*',
       'admin/golonganobat/delete/*',
       'admin/terapiobat/delete/*',
       'admin/obat/delete/*',
      //  'admin/provinsi/delete/*',
      //  'admin/pengasuh/delete/*',
      //  'admin/pesantren/delete/*',
      //  'api/v1/*',
    ];
}
