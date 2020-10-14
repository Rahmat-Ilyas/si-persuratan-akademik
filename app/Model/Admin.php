<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

	protected $guard = 'admin';

	protected $fillable = [
        'nama', 'role', 'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pfu() {
    	if ($this->role == 1) return true;
    	return false;
    }

    public function kasubag() {
    	if ($this->role == 2) return true;
    	return false;
    }

    public function kabag() {
    	if ($this->role == 3) return true;
    	return false;
    }

    public function wd() {
    	if ($this->role == 4) return true;
    	return false;
    }

    public function dekan() {
    	if ($this->role == 5) return true;
    	return false;
    }
}
