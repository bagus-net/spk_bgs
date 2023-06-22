<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use App\Alternative;
use App\Relation;
use App\Result;

class HasilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$kriteria = Criteria::all();
    	foreach ($kriteria as $keyK => $dataK) {
    		$id_kriteria[] = $dataK->id_kriteria;
    		$bobot[] = $dataK->bobot;
    		$atribut[] = $dataK->atribut;
    	}
    	$alternatif = Alternative::all();
    	foreach ($alternatif as $keyT => $dataT) {
    		$id_alternatif[] = $dataT->id_alternatif;
    	}
        // dd($bobot);
    	$relasi = Relation::all();
    	$jmlh_bobot = $kriteria->sum('bobot');
    	$jmlh_kriteria = $kriteria->count();
    	$jmlh_alternatif = $alternatif->count();

    	//Tahap 1 = Mencari Perpangkatan dari masing-masing bobot
        for ($i=0;$i<$jmlh_kriteria;$i++){
            for ($j=0;$j<$jmlh_alternatif;$j++){
                $nilai[$j][$i] = \App\Helper::nilai($id_alternatif[$j],$id_kriteria[$i]);
                $pangkat_kriteria[$j][$i] = pow($nilai[$j][$i], 2);
            }
        }
        
        dd($pangkat_kriteria);

        //Tahap 2 = Mencari Total Perpangkatan Sebelumnya per-kriteria
        $jmlh_pangkat = array();
        for ($i=0;$i<$jmlh_kriteria;$i++){
            $jmlh_pangkat[$i] = 0;
            for ($j=0;$j<$jmlh_alternatif;$j++){
                $jmlh_pangkat[$i] += $pangkat_kriteria[$j][$i];
            }
        }   

        //Tahap 3 = Normalisasi
        for ($i=0;$i<$jmlh_kriteria;$i++){
            for ($j=0;$j<$jmlh_alternatif;$j++){
                $nilai[$j][$i] = \App\Helper::nilai($id_alternatif[$j],$id_kriteria[$i]);
                $normalisasi[$j][$i] = $nilai[$j][$i] / sqrt($jmlh_pangkat[$i]);
            }
        }

        //Tahap 4 = Normalisasi Terbobot
        for ($i=0;$i<$jmlh_kriteria;$i++){
            for ($j=0;$j<$jmlh_alternatif;$j++){
                $normalisasi_terbobot[$j][$i] = $bobot[$i] * $normalisasi[$j][$i];
            }
        }
        // dd($normalisasi_terbobot);

        //Tahap 5 = Matriks Solusi Ideal (Positif dan Negatif)
        for ($i=0;$i<$jmlh_kriteria;$i++){
            for ($j=0;$j<$jmlh_alternatif;$j++){
                $array[$i][$j] = $normalisasi_terbobot[$j][$i];
                $positif[$i] = max($array[$i]);
                $negatif[$i] = min($array[$i]);
            }
        }
        // dd($negatif);

        //Tahap 6 = Jarak Solusi (Positif dan Negatif)
        $total_positif = array();
        $total_negatif = array();
        for ($i=0;$i<$jmlh_alternatif;$i++){
            $total_positif[$i] = 0;
            $total_negatif[$i] = 0;
            for ($j=0;$j<$jmlh_kriteria;$j++){
                $total_positif[$i] += pow(($positif[$j] - $normalisasi_terbobot[$i][$j]), 2);
                $total_negatif[$i] += pow(($negatif[$j] - $normalisasi_terbobot[$i][$j]), 2);
            }
            $hasil_positif[$i] = sqrt($total_positif[$i]);
            $hasil_negatif[$i] = sqrt($total_negatif[$i]);
        }

         dd($total_positif);

        //Tahap 7 = Mencari Preferensi
        for ($i=0;$i<$jmlh_alternatif;$i++){
            $preferensi[$i] = $hasil_negatif[$i] / ($hasil_positif[$i]+$hasil_negatif[$i]);
             //menyimpan data
             $data = Result::firstOrNew(array('alternatif' => $id_alternatif[$i]));
             $data['alternatif'] = $id_alternatif[$i];
             $data['hasil'] = $preferensi[$i];
             $data->save();
        }
        // dd($preferensi);

    	//proses perangkingan nilai
    	$rangking = Result::orderBy('hasil','desc')->get();

    	return view('hasil', compact('kriteria','alternatif','relasi','jmlh_kriteria','jmlh_alternatif','normalisasi','normalisasi_terbobot','positif','negatif','hasil_positif','hasil_negatif','preferensi','rangking'));
    }
}
