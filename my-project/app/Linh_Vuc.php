<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linh_Vuc extends Model
{
    protected $table = 'Linh_Vuc';

    public function CauHoi()
    {
    	return $this->hasMany('App\Cau_hoi');
    }
}

