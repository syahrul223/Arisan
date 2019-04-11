<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Anggota;

class Arisan extends Model
{
    public $primaryKey = 'id_arisan';
    protected $table = 't_arisan';
    protected $fillable = [
        'id_anggota', 'status_menang', 'status_bayar'
    ];

    public function anggota(){
        return $this->hasOne('App\Anggota', 'id_anggota', 'id_anggota');
    }
}
