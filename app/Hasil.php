<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $fillable = [
        'alternatif', 'hasil',
    ];
    public $timestamps = false; //karena tabel register tidak terdapat field created_at dan updated_at
    protected $primaryKey = 'id_hasil';
}
