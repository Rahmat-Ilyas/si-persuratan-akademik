<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
	use Notifiable;
    protected $fillable = [
        'nim', 'nama', 'jns_kelamin', 'password',
    ];
}
