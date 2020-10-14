<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Paraf extends Model
{
    protected $fillable = [
        'surat_id', 'file_paraf',
    ];

    public function surat()
    {
        return $this->belongsTo('App\Model\Surat');
    }
}
