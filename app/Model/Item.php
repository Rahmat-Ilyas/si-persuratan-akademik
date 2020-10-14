<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'surat_id', 'item_surat', 'tipe',
    ];

    public function surat()
    {
        return $this->belongsTo('App\Model\Surat');
    }
}
