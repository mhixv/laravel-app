<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pegawai;
use App\Http\Requests\PegawaiRequest;

class PegawaiController extends Controller
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
      $peg = Pegawai::all();
      return view('pegawai.index', compact('peg','row'));
    }

    /**
  	 * Show the form for creating a new resource.
  	 *
  	 * @return Response
  	 */
  	public function create()
  	{
  		return view('pegawai.create');
  	}

  	/**
  	 * Store a newly created resource in storage.
  	 *
  	 * @return Response
  	 */
  	public function store(PegawaiRequest $request)
  	{
  		Pegawai::create($request->all());
  		return redirect('admin/pegawai');
  	}

    /**
  	 * Show the form for editing the specified resource.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function edit($id)
  	{
  		$peg = Pegawai::findOrFail($id);
  		// dd($dep);
  		return view('pegawai.edit', compact('peg'));
  	}

  	/**
  	 * Update the specified resource in storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function update($id, PegawaiRequest $request)
  	{
  		$peg = Pegawai::findOrFail($id);
  		$peg->update($request->all());
  		return redirect('admin/pegawai');
  	}

  	/**
  	 * Remove the specified resource from storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function destroy($id)
  	{
  		Pegawai::destroy($id);

  		return redirect('admin/pegawai');

  	}
}
