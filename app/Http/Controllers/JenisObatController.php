<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\JenisObat;
use App\Http\Requests\JenisObatRequest;

class JenisObatController extends Controller
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
      $jo = JenisObat::all();
      return view('jenisobat.index', compact('jo','row'));
    }

    /**
  	 * Show the form for creating a new resource.
  	 *
  	 * @return Response
  	 */
  	public function create()
  	{
  		return view('jenisobat.create');
  	}

  	/**
  	 * Store a newly created resource in storage.
  	 *
  	 * @return Response
  	 */
  	public function store(JenisObatRequest $request)
  	{
  		JenisObat::create($request->all());
  		return redirect('admin/jenisobat');
  	}

    /**
  	 * Show the form for editing the specified resource.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function edit($id)
  	{
  		$jo = JenisObat::findOrFail($id);
  		// dd($dep);
  		return view('jenisobat.edit', compact('jo'));
  	}

  	/**
  	 * Update the specified resource in storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function update($id, JenisObatRequest $request)
  	{
  		$jo = JenisObat::findOrFail($id);
  		$jo->update($request->all());
  		return redirect('admin/jenisobat');
  	}

  	/**
  	 * Remove the specified resource from storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function destroy($id)
  	{
  		JenisObat::destroy($id);

  		return redirect('admin/jenisobat');

  	}
}
