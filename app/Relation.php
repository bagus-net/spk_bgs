<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    protected $fillable = [
        'alternatif', 'kriteria', 'nilai',
    ];
    public $timestamps = false; //karena tabel register tidak terdapat field created_at dan updated_at
    protected $primaryKey = 'id_relasi';
}
