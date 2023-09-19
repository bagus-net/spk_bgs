<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use App\Alternative;
use App\Relation;
use App\Result;
use App\Hasil;

class HasilMetodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $hasilwp = Hasil::all();
        $hasiltopsis = Result::all();
        $alternatif = Alternative::all();
        $relasi = Relation::all();
        $kriteria = Criteria::all();
        

        $rankingwp = Hasil::orderBy('hasil','desc')->take(2)->get();
        $ranking = Result::orderBy('hasil','desc')->take(2)->get();

        

        //   dd($topRankings);    

        return view('hasildua', compact('kriteria', 'alternatif', 'relasi','hasilwp','hasiltopsis','rankingwp', 'ranking'));
    }
}

