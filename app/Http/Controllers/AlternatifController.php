<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use App\Alternative;
use App\Relation;

class AlternatifController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$data = Alternative::all();
    	return view('alternatif.home', compact('data'));
    }

    public function insert(Request $request)
    {
    	$input = $request->all();
    	$insert = Alternative::create([
    	    'nama_alternatif' => $input['nama_alternatif'],
            // 'alamat' => $input['alamat'],
            // 'no_hp' => $input['no_hp'],
    	    
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
    	$data = Alternative::find($id);
    	return view('alternatif.edit', compact('data'));
    }

    public function update(Request $request)
    {
    	$input = $request->id;
    	$data = Alternative::find($input);
    	$data->nama_alternatif = $request->nama_alternatif;
    
    	$data->update();

    	return redirect('alternatif');
    }

    public function delete($id)
    {
    	Alternative::destroy($id);
    	return redirect()->back();
    }

    public function value($id)
    {
    	$kriteria = Criteria::all();
    	$alternatif = Alternative::find($id);
    	return view('alternatif.penilaian', compact('kriteria','alternatif'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $kriteria = Criteria::all();
        foreach ($kriteria as $key => $value) {
            $data = Relation::firstOrNew(array('alternatif' => $input['id_alternatif'],'kriteria' => $value->id_kriteria));
            $data['alternatif'] = $input['id_alternatif'];
            $data['kriteria'] = $value->id_kriteria;
            $data['nilai'] = $input['nilai_'.$value->id_kriteria.''];
            $data->save();
        }
        return redirect('alternatif');
    }

    public function show($id)
    {
        $data = Relation::where('alternatif',$id)->get();
        foreach ($data as $key => $value) {
            $nilai[] = $value->nilai;
            $kriteria[] = $value->kriteria;
        }
        $jumlah = $data->count();
        // for ($i=0;$i<$jumlah;$i++){
        //     echo \App\Helper::kriteria($kriteria[$i])." ".$nilai[$i];
        //     echo "<br>";
        // }
        $nama_alternatif = \App\Helper::alternatif($id);
        $alamat = \App\Helper::alamat($id);
        $no_hp = \App\Helper::no_hp($id);
        return view('alternatif.detail', compact('nilai','kriteria','jumlah','nama_alternatif','alamat','no_hp'));
    }
}
