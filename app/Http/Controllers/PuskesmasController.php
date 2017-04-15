<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Puskesmas;
use App\Kecamatan;
use App\Kelurahan;
use App\Http\Requests\PuskesmasRequest;

class PuskesmasController extends Controller
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
      $pus = Puskesmas::all();
      return view('puskesmas.index', compact('pus','row'));
    }

    /**
  	 * Show the form for creating a new resource.
  	 *
  	 * @return Response
  	 */
  	public function create()
  	{
      $kec = Kecamatan::lists('nama_kecamatan','id')->toArray();
      $kel = Kelurahan::lists('nama_kelurahan','id')->toArray();
      return view('puskesmas.create', compact('kec','kel'));
  	}

  	/**
  	 * Store a newly created resource in storage.
  	 *
  	 * @return Response
  	 */
  	public function store(PuskesmasRequest $request)
  	{
  		Puskesmas::create($request->all());
  		return redirect('admin/puskesmas');
  	}

    /**
  	 * Show the form for editing the specified resource.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function edit($id)
  	{
  		$pus = Puskesmas::findOrFail($id);
      $kec = Kecamatan::lists('nama_kecamatan','id')->toArray();
      $kel = Kelurahan::lists('nama_kelurahan','id')->toArray();
  		// dd($dep);
  		return view('puskesmas.edit', compact('pus','kec','kel'));
  	}

  	/**
  	 * Update the specified resource in storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function update($id, PuskesmasRequest $request)
  	{
  		$pus = Puskesmas::findOrFail($id);
  		$pus->update($request->all());
  		return redirect('admin/puskesmas');
  	}

  	/**
  	 * Remove the specified resource from storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function destroy($id)
  	{
  		Puskesmas::destroy($id);

  		return redirect('admin/puskesmas');

  	}

    // ajax list kabupaten berdasarkan provinsi ID
  	public function listKelurahan($id)
    {
        $kelurahans = Kelurahan::where('kecamatan_id', '=', $id)->get();
        //dd($kabupatens);
  			$options = array('0' => '-- Pilih Kelurahan --');

        foreach ($kelurahans as $kelurahan) {
            $options += array($kelurahan->id => $kelurahan->nama_kelurahan);
        }

  			//dd($options);
        return $options;
    }
}
