<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Quan_Tri_Vien extends Authenticatable
{
    protected $table = 'Quan_Tri_Vien';
    public function getPasswordAttribute()
    {
    	return $this->mat_khau;
    }
}
