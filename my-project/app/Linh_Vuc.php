<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Linh_Vuc extends Model
{
    protected $table = 'Linh_Vuc';

    use SoftDeletes;

    public function CauHoi()
    {
    	return $this->hasMany('App\Cau_hoi');
    }
}

