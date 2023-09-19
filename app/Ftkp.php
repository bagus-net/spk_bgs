<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Ftkp extends Model
{
    protected $table = 'ftkp';
    protected $fillable = [
        'nama_perusahaan',
        'nojnl',
        'tgl', 
        'kode', 
        'acc',
        'bukti',
        'nilai',
        'ket',
        'modifyby',
        'modifyon',
        'dk',
        'fgroup',
        'periode',
        'catatan1',
        'catatan2',
        'catatan3',
        'catatan4',
        'catatan5',
        'catatan6',
        'tgl1',
        'lokasi',
        'note',
        'pj1',
        'pj2',
        'bt1',
        'bt2'
        ,'sk',
        'efk',
        'spk',
        'kodebrg',
        'qtyorder',
        'qtycorr',
        'qtyflexo',
        'qtygud',
        'qtyfinish',
        'kp',
        'ref',
        'kodecust'
    ];
}
