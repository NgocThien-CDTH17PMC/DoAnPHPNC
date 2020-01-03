<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cau_Hoi extends Model
{
    protected $table = 'Cau_Hoi';

    public function linhVuc()
    {
    	return $this->belongsTo('App\Linh_Vuc');
    }
}
