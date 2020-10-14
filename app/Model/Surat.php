<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $fillable = [
        'id_mhs', 'jenis_surat', 'no_surat', 'status',
    ];

    public function persyaratan()
    {
        return $this->hasMany('App\Model\Persyaratan');
    }

    public function item()
    {
        return $this->hasMany('App\Model\Item');
    }

    public function mhswa()
    {
        return $this->hasMany('App\Model\Mhswa');
    }

    public function paraf()
    {
        return $this->hasMany('App\Model\Paraf');
    }
}
