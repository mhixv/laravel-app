<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SatuanKecil;
use App\Http\Requests\SatuanKecilRequest;

class SatuanKecilController extends Controller
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
      $sk = SatuanKecil::all();
      return view('satuankecil.index', compact('sk','row'));
    }

    /**
  	 * Show the form for creating a new resource.
  	 *
  	 * @return Response
  	 */
  	public function create()
  	{
  		return view('satuankecil.create');
  	}

  	/**
  	 * Store a newly created resource in storage.
  	 *
  	 * @return Response
  	 */
  	public function store(SatuanKecilRequest $request)
  	{
  		SatuanKecil::create($request->all());
  		return redirect('admin/satuankecil');
  	}

    /**
  	 * Show the form for editing the specified resource.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function edit($id)
  	{
  		$sk = SatuanKecil::findOrFail($id);
  		// dd($dep);
  		return view('satuankecil.edit', compact('sk'));
  	}

  	/**
  	 * Update the specified resource in storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function update($id, SatuanKecilRequest $request)
  	{
  		$sk = SatuanKecil::findOrFail($id);
  		$sk->update($request->all());
  		return redirect('admin/satuankecil');
  	}

  	/**
  	 * Remove the specified resource from storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function destroy($id)
  	{
  		SatuanKecil::destroy($id);

  		return redirect('admin/satuankecil');

  	}
}
