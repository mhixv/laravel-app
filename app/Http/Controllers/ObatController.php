<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Obat;
use App\GolonganObat;
use App\JenisObat;
use App\SatuanBesar;
use App\SatuanKecil;
use App\TerapiObat;
use App\Http\Requests\ObatRequest;

class ObatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $row=1;
      $ob = Obat::all();
      return view('obat.index', compact('ob','row'));
    }

    /**
  	 * Show the form for creating a new resource.
  	 *
  	 * @return Response
  	 */
  	public function create()
  	{
      $go = GolonganObat::lists('nama_golongan_obat','id')->toArray();
      $jo = JenisObat::lists('nama_jenis_obat','id')->toArray();
      $sb = SatuanBesar::lists('nama_satuan_besar','id')->toArray();
      $sk = SatuanKecil::lists('nama_satuan_kecil','id')->toArray();
      $to = TerapiObat::lists('nama_terapi_obat','id')->toArray();

  		return view('obat.create', compact('go','jo','sb','sk','to'));
  	}

  	/**
  	 * Store a newly created resource in storage.
  	 *
  	 * @return Response
  	 */
  	public function store(ObatRequest $request)
  	{
  		Obat::create($request->all());
  		return redirect('admin/obat');
  	}

    /**
  	 * Show the form for editing the specified resource.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function edit($id)
  	{
      $go = GolonganObat::lists('nama_golongan_obat','id')->toArray();
      $jo = JenisObat::lists('nama_jenis_obat','id')->toArray();
      $sb = SatuanBesar::lists('nama_satuan_besar','id')->toArray();
      $sk = SatuanKecil::lists('nama_satuan_kecil','id')->toArray();
      $to = TerapiObat::lists('nama_terapi_obat','id')->toArray();

  		$ob = Obat::findOrFail($id);
  		// dd($dep);
  		return view('obat.edit', compact('ob','go','jo','sb','sk','to'));
  	}

  	/**
  	 * Update the specified resource in storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function update($id, ObatRequest $request)
  	{
  		$ob = Obat::findOrFail($id);
  		$ob->update($request->all());
  		return redirect('admin/obat');
  	}

  	/**
  	 * Remove the specified resource from storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function destroy($id)
  	{
  		Obat::destroy($id);

  		return redirect('admin/obat');

  	}
}
