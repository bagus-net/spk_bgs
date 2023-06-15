<?php

namespace App;
use App\Alternative;
use App\Criteria;
use App\Relation;

use Illuminate\Database\Eloquent\Model;
class Helper extends Model
{
	public static function atribut($atribut){
		if ($atribut == 1) {
			echo "Benefit";
		}else if($atribut == 2){
			echo "Cost";
		}
	}

	public static function bobot($bobot){
		if ($bobot == 1) {
			echo "Tidak Penting";
		}else if($bobot == 2){
			echo "Kurang Penting";
		}else if($bobot == 3){
			echo "Cukup Penting";
		}else if($bobot == 4){
			echo "Penting";
		}else if($bobot == 5){
			echo "Sangat Penting";
		}
	}

	public static function nilai($alternatif,$kriteria)
	{
		$data = Relation::where('alternatif',$alternatif)->where('kriteria',$kriteria)->orderBy('nilai','ASC')->get();
		foreach ($data as $key => $value) {
			return $value->nilai;
		}
	}

	public static function kriteria($id)
	{
		$data = Criteria::find($id);
		return $data->nama_kriteria;
	}

	public static function nilai_atribut($id)
	{
		$data = Criteria::find($id);
		return $data->atribut;
	}

	public static function jabatan($id)
	{
		$data = User::find($id);
		return $data->jabatan;
	}

	public static function kode($id)
	{
		$data = Criteria::find($id);
		return $data->kode;
	}

	public static function alternatif($id)
	{
		$data = Alternative::find($id);
		return $data->nama_alternatif;
	}

// 	public static function alamat($id)
// 	{
// 		$data = Alternative::find($id);
// 		return $data->alamat;
// 	}

// 	public static function no_hp($id)
// 	{
// 		$data = Alternative::find($id);
// 		return $data->no_hp;
// 	}
 }
