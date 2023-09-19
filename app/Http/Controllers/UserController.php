<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
    	$data = Users::all();
    	return view('user.home', compact('data'));
    }

    public function insert(Request $request)
    {
    	$input = $request->all();
    	$insert = Users::create([
    	    'nama' => $input['nama'],
    	    'password' => bcrypt($input['password']),
			'level' => $input['level'],
			'keterangan' => $input['keterangan'],
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
    	$data = Users::find($id);
    	return view('user.edit', compact('data'));
    }

    public function update(Request $request)
    {
    	$input = $request->id;
    	$data = Users::find($input);
    	$data->nama = $request->nama;
    	// $data->level = $request->level;
    	$data->keterangan = $request->keterangan;
		$data->pass = Hash::make($request->pass);
	

    	$data->update();

    	return redirect('user');
    }

    public function delete($id)
    {
    	Users::destroy($id);
    	return redirect()->back();
    }


	public function show($id)
    {
    	$data = Users::find($id);
    	return view('user.detail', compact('data'));
    }



}
