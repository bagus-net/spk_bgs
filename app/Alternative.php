<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    protected $fillable = [
        'nama_alternatif', 'alamat', 'no_hp',
    ];
    public $timestamps = false; //karena tabel register tidak terdapat field created_at dan updated_at
    protected $primaryKey = 'id_alternatif';
}
