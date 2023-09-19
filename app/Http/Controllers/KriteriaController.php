<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use Illuminate\Support\Facades\DB;

class KriteriaController extends Controller
{
	// utk auth login
	// public function __construct()
	// {
	//     $this->middleware('auth');
	// }

	public function index()
	{
		// $data = DB::select("SELECT * FROM mjenis");
		// return view('ftkp.index', compact('res_ftkp'));
		// dump($res_ftkp);
		$data = Criteria::all();
		return view('kriteria.home', compact('data'));
	}

	public function insert(Request $request)
	{
		$input = $request->all();
		$insert = Criteria::create([
			'kode' => $input['kode'],
			'nama_kriteria' => $input['nama_kriteria'],
			'atribut' => $input['atribut'],
			'bobot' => $input['bobot'],
		]);
		// if ($insert) {
		//     return redirect('tanaman');  
		// } else {

		// } 
		return redirect()->back();
		// return redirect()->back()->withErrors(array('war' => 'success'));
	}

	public function edit($id)
	{
		$data = Criteria::find($id);
		return view('kriteria.edit', compact('data'));
	}

	public function update(Request $request)
	{
		$input = $request->id;
		$data = Criteria::find($input);
		$data->kode = $request->kode;
		$data->nama_kriteria = $request->nama_kriteria;
		$data->atribut = $request->atribut;
		$data->bobot = $request->bobot;
		$data->update();

		return redirect('kriteria');
	}

	public function delete($id)
	{
		Criteria::destroy($id);
		return redirect()->back();
	}
}
