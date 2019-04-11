<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Arisan;

class Anggota extends Model
{
    public $primaryKey = 'id_anggota';

    protected $table = 't_anggota';

    protected $fillable = [
        'nama_anggota', 'alamat'
    ];

    public function arisan(){
            return $this->belongsToMany('App\Arisan', 't_arisan', 'id_anggota', 'id_anggota');
        
    }
}
