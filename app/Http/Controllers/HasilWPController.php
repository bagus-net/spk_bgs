<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use App\Alternative;
use App\Relation;
use App\Result;
use App\Hasil;

class HasilWPController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$kriteria = Criteria::all();
    	foreach ($kriteria as $key => $dataK) {
    		$id_kriteria[] = $dataK->id_kriteria;
    		$bobot[] = $dataK->bobot;
    		$atribut[] = $dataK->atribut;
    	}
    	$alternatif = Alternative::all();
    	foreach ($alternatif as $keyT => $dataT) {
    		$id_alternatif[] = $dataT->id_alternatif;
    	}
         
    	$relasi = Relation::all();
    	$jmlh_bobot = $kriteria->sum('bobot');
    	$jmlh_kriteria = $kriteria->count();
    	$jmlh_alternatif = $alternatif->count();
        // dd($jmlh_kriteria);
    	//Tahap 1 = Mencari Perpangkatan dari masing-masing bobot
        // for ($i=0;$i<$jmlh_kriteria;$i++){
        //     for ($j=0;$j<$jmlh_alternatif;$j++){
        //         $nilai[$j][$i] = \App\Helper::nilai($id_alternatif[$j],$id_kriteria[$i]);
        //         $pangkat_kriteria[$j][$i] = pow($nilai[$j][$i], 2);
        //     }
        // }
        // dd($pangkat_kriteria);
     
        //Tahap 2 = Mencari Total Perpangkatan Sebelumnya per-kriteria
        // $jmlh_pangkat = array();
        // for ($i=0;$i<$jmlh_kriteria;$i++){
        //     $jmlh_pangkat[$i] = 0;
        //     for ($j=0;$j<$jmlh_alternatif;$j++){
        //         $jmlh_pangkat[$i] += $pangkat_kriteria[$j][$i];
        //     }
        // }

            

        //Tahap 3 = Mencari Nilai pangkat

        for ($i=0;$i<$jmlh_kriteria;$i++){
                $bobot_kepentingan[$i] = $bobot[$i] / $jmlh_bobot[$i];
            }
          dd($bobot_kepentingan);

        //Tahap 4 = Mencari Nilai S

       
        // dd($normalisasi_terbobot);

        //Tahap 5 = Matriks Solusi Ideal (Positif dan Negatif)
        
        // dd($negatif);

        //Tahap 6 = Jarak Solusi (Positif dan Negatif)
        

        // dd($hasil_positif);

        //Tahap 7 = Mencari Preferensi
        // for ($i=0;$i<$jmlh_alternatif;$i++){
        //     $preferensi[$i] = $hasil_negatif[$i] / ($hasil_positif[$i]+$hasil_negatif[$i]);
        //      //menyimpan data
        //      $data = Result::firstOrNew(array('alternatif' => $id_alternatif[$i]));
        //      $data['alternatif'] = $id_alternatif[$i];
        //      $data['hasil'] = $preferensi[$i];   
        //      $data->save();
        // }
        // dd($preferensi);

    	//proses perangkingan nilai
    // 	$rangking = Result::orderBy('hasil','desc')->get();

    	return view('hasilwp', compact('kriteria','alternatif','relasi','jmlh_kriteria', 'jmlh_bobot','jmlh_alternatif','bobot_kepentingan'));
    
}}
