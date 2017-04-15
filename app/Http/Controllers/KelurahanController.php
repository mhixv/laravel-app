<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kelurahan;
use App\Kecamatan;
use App\Http\Requests\KelurahanRequest;

class KelurahanController extends Controller
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
      $kel = Kelurahan::all();
      return view('kelurahan.index', compact('kel','row'));
    }

    /**
  	 * Show the form for creating a new resource.
  	 *
  	 * @return Response
  	 */
  	public function create()
  	{
      $kec = Kecamatan::lists('nama_kecamatan','id')->toArray();
  		return view('kelurahan.create', compact('kec'));
  	}

  	/**
  	 * Store a newly created resource in storage.
  	 *
  	 * @return Response
  	 */
  	public function store(KelurahanRequest $request)
  	{
  		Kelurahan::create($request->all());
  		return redirect('admin/kelurahan');
  	}

    /**
  	 * Show the form for editing the specified resource.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function edit($id)
  	{
  		$kel = Kelurahan::findOrFail($id);
  		// dd($dep);
  		return view('kelurahan.edit', compact('kel'));
  	}

  	/**
  	 * Update the specified resource in storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function update($id, KelurahanRequest $request)
  	{
  		$kel = Kelurahan::findOrFail($id);
  		$kel->update($request->all());
  		return redirect('admin/kelurahan');
  	}

  	/**
  	 * Remove the specified resource from storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function destroy($id)
  	{
  		Kelurahan::destroy($id);

  		return redirect('admin/kelurahan');

  	}
}
