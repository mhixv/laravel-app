<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\GolonganObat;
use App\Http\Requests\GolonganObatRequest;

class GolonganObatController extends Controller
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
      $go = GolonganObat::all();
      return view('golonganobat.index', compact('go','row'));
    }

    /**
  	 * Show the form for creating a new resource.
  	 *
  	 * @return Response
  	 */
  	public function create()
  	{
  		return view('golonganobat.create');
  	}

  	/**
  	 * Store a newly created resource in storage.
  	 *
  	 * @return Response
  	 */
  	public function store(GolonganObatRequest $request)
  	{
  		GolonganObat::create($request->all());
  		return redirect('admin/golonganobat');
  	}

    /**
  	 * Show the form for editing the specified resource.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function edit($id)
  	{
  		$go = GolonganObat::findOrFail($id);
  		// dd($dep);
  		return view('golonganobat.edit', compact('go'));
  	}

  	/**
  	 * Update the specified resource in storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function update($id, GolonganObatRequest $request)
  	{
  		$go = GolonganObat::findOrFail($id);
  		$go->update($request->all());
  		return redirect('admin/golonganobat');
  	}

  	/**
  	 * Remove the specified resource from storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function destroy($id)
  	{
  		GolonganObat::destroy($id);

  		return redirect('admin/golonganobat');

  	}
}
