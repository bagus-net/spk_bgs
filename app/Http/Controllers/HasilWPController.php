<?php

namespace App\Http\Controllers;

use App\Helper;
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

    //   dd($bobot);
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
            
        for ($i=0;$i<$jmlh_kriteria;$i++) {
            for ($j=0;$j<$jmlh_alternatif;$j++) {
                $bobot_k[$i] = $bobot [$i] / $jmlh_bobot;
            }
        }
    
      

        //   dd($bobot_kepentingan);         

//Tahap 4 = Mencari Nilai S
        $S = array();
        
        for ($i=0;$i<$jmlh_alternatif;$i++){
            $s[$i] = 1;
            
for ($j=0;$j<$jmlh_kriteria;$j++) {
    $nilai[$i][$j] = Helper::nilai($id_alternatif[$i], $id_kriteria[$j]);
    $s[$i] *= pow($nilai[$i][$j] , $bobot_k[$j]);

    $total_s=array_sum($s);
}  
        }
        // dd($total_s);
       
for ($i=0;$i<$jmlh_alternatif;$i++) {
    $v[$i] = $s[$i] / $total_s;
 //menyimpan data
             $data = Hasil::firstOrNew(array('alternatif' => $id_alternatif[$i]));
             $data['alternatif'] = $id_alternatif[$i];
             $data['hasil'] = $v[$i];
             $data->save();
        }
        // dd($preferensi);
        
        

        //proses perangkingan nilai
        	$rangkingwp = Hasil::orderBy('hasil','desc')->get();

        return view('hasilwp', compact('kriteria', 'alternatif', 'relasi', 'jmlh_kriteria', 'jmlh_alternatif','bobot_k','s','total_s','v','rangkingwp'));
    }
}