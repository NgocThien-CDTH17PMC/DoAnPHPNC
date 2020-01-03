<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cau_Hoi extends Model
{
    protected $table = 'Cau_Hoi';

    use SoftDeletes;

    public function linhVuc()
    {
    	return $this->belongsTo('App\Linh_Vuc');
    }
}
