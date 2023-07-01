<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$data = User::all();
    	return view('user.home', compact('data'));
    }

    public function insert(Request $request)
    {
    	$input = $request->all();
    	$insert = User::create([
    	    'name' => $input['name'],
    	    'email' => $input['email'],
    	    'jabatan' => $input['jabatan'],
    	    'password' => bcrypt($input['password']),
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
    	$data = User::find($id);
    	return view('user.edit', compact('data'));
    }

    public function update(Request $request)
    {
    	$input = $request->id;
    	$data = User::find($input);
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->jabatan = $request->jabatan;
		$data->password = Hash::make($request->password);
	

    	$data->update();

    	return redirect('user');
    }

    public function delete($id)
    {
    	User::destroy($id);
    	return redirect()->back();
    }


	public function show($id)
    {
    	$data = User::find($id);
    	return view('user.detail', compact('data'));
    }



}
