<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Goi_Credit extends Model
{
    protected $table = 'Goi_Credit';

    use SoftDeletes;
    
}
