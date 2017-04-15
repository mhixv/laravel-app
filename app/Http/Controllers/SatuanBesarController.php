<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SatuanBesar;
use App\Http\Requests\SatuanBesarRequest;

class SatuanBesarController extends Controller
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
      $sb = SatuanBesar::all();
      return view('satuanbesar.index', compact('sb','row'));
    }

    /**
  	 * Show the form for creating a new resource.
  	 *
  	 * @return Response
  	 */
  	public function create()
  	{
  		return view('satuanbesar.create');
  	}

  	/**
  	 * Store a newly created resource in storage.
  	 *
  	 * @return Response
  	 */
  	public function store(SatuanBesarRequest $request)
  	{
  		SatuanBesar::create($request->all());
  		return redirect('admin/satuanbesar');
  	}

    /**
  	 * Show the form for editing the specified resource.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function edit($id)
  	{
  		$sb = SatuanBesar::findOrFail($id);
  		// dd($dep);
  		return view('satuanbesar.edit', compact('sb'));
  	}

  	/**
  	 * Update the specified resource in storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function update($id, SatuanBesarRequest $request)
  	{
  		$sb = SatuanBesar::findOrFail($id);
  		$sb->update($request->all());
  		return redirect('admin/satuanbesar');
  	}

  	/**
  	 * Remove the specified resource from storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function destroy($id)
  	{
  		SatuanBesar::destroy($id);

  		return redirect('admin/satuanbesar');

  	}
}
