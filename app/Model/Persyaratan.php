<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    protected $fillable = [
        'surat_id', 'nama_syarat', 'file_berkas',
    ];

    public function surat()
    {
        return $this->belongsTo('App\Model\Surat');
    }
}
