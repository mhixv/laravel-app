<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TerapiObat;
use App\Http\Requests\TerapiObatRequest;

class TerapiObatController extends Controller
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
      $to = TerapiObat::all();
      return view('terapiobat.index', compact('to','row'));
    }

    /**
  	 * Show the form for creating a new resource.
  	 *
  	 * @return Response
  	 */
  	public function create()
  	{
  		return view('terapiobat.create');
  	}

  	/**
  	 * Store a newly created resource in storage.
  	 *
  	 * @return Response
  	 */
  	public function store(TerapiObatRequest $request)
  	{
  		TerapiObat::create($request->all());
  		return redirect('admin/terapiobat');
  	}

    /**
  	 * Show the form for editing the specified resource.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function edit($id)
  	{
  		$to = TerapiObat::findOrFail($id);
  		// dd($dep);
  		return view('terapiobat.edit', compact('to'));
  	}

  	/**
  	 * Update the specified resource in storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function update($id, TerapiObatRequest $request)
  	{
  		$to = TerapiObat::findOrFail($id);
  		$to->update($request->all());
  		return redirect('admin/terapiobat');
  	}

  	/**
  	 * Remove the specified resource from storage.
  	 *
  	 * @param  int  $id
  	 * @return Response
  	 */
  	public function destroy($id)
  	{
  		TerapiObat::destroy($id);

  		return redirect('admin/terapiobat');

  	}
}
