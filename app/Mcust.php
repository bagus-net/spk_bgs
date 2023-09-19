<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Mcust extends Model
{
    protected $table = 'mcust';
    protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'kota',
        'telp',
        'fax',
        'kontak',
        'npwp',
        'deleted',
        'balanced',
        'modifyby',
        'modifyon',
        'awal'
        ,'wilayah',
        'discval',
        'discpcl',
        'hari',
        'ket',
        'kota1',
        'alamat1',
        'kota2',
        'alamat2',
        'nama2',
        'lnama',
        'kode1',
        'alamat1b',
        'hari2',
        'kodewly',
        'nmspcl',
        'tnpuksb',
        'fgroup',
        'cstatus',
        'kodesis',
        'hari_so',
        'exp_po_tglf',
        'kodetk',
        'kodest'
    ];
}
