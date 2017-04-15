<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kecamatan;
use App\Http\Requests\KecamatanRequest;

class KecamatanController extends Controller
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
      $kec = Kecamatan::all();
      return view('kecamatan.index', compact('kec','row'));
    }

    /**
  	 * Show the form for creating a new resource.
  	 *
  	 * @return Response
  	 */
  	public function create()
  	{
  		return view('kecamatan.create');
  	}

  	/**
  	 * Store a newly created resource in storage.
  	 *
  	 * @return Response
  	 */
  	public function store(KecamatanRequest $request)
  	{
  		Kecamatan::create($request->all());
  		return redirect('admin/kecamatan');
  	}

    /**
  	 * Show the form for editing the specified resource.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function edit($id)
  	{
  		$kec = Kecamatan::findOrFail($id);
  		// dd($dep);
  		return view('kecamatan.edit', compact('kec'));
  	}

  	/**
  	 * Update the specified resource in storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function update($id, KecamatanRequest $request)
  	{
  		$kec = Kecamatan::findOrFail($id);
  		$kec->update($request->all());
  		return redirect('admin/kecamatan');
  	}

  	/**
  	 * Remove the specified resource from storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function destroy($id)
  	{
  		Kecamatan::destroy($id);

  		return redirect('admin/kecamatan');

  	}
}
