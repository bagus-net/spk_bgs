<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use App\Alternative;
use App\Relation;
use App\Result;
use App\Hasil;
use App\User;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res_dokter = DB::select('SELECT * FROM public.mcust');
        dump($res_dokter);
    }
}
