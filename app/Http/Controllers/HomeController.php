<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use App\Alternative;
use App\Relation;
use App\Result;
use App\Hasil;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hasilwp = Hasil::all();
        $hasiltopsis = Result::all();
        $alternatif = Alternative::all();
        $relasi = Relation::all();
        $kriteria = Criteria::all();
        $relasi = Relation::all();
        $user = User::all();

    $jmlh_bobot = $kriteria->sum('bobot');
    $jmlh_kriteria = $kriteria->count();
    $jmlh_alternatif = $alternatif->count();
    $jmlh_user= $user->count();
    $rankingwp = Hasil::orderBy('hasil','desc')->take(2)->get();
    $ranking = Result::orderBy('hasil','desc')->take(2)->get();

// dd ($ranking);
        return view('home', compact('hasiltopsis','hasilwp','kriteria', 'alternatif', 'relasi', 'jmlh_kriteria', 'jmlh_alternatif','jmlh_user','rankingwp','ranking'));
    }
}
