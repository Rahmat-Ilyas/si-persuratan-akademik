<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mhswa extends Model
{
    protected $table = 'mahasiswas';

    public function surat()
    {
        return $this->belongsTo('App\Model\Surat');
    }
}
