<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    protected $fillable = [
        'kode', 'nama_kriteria', 'atribut', 'bobot',
    ];
    public $timestamps = false; //karena tabel register tidak terdapat field created_at dan updated_at
    protected $primaryKey = 'id_kriteria';
}
