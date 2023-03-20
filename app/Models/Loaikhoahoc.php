<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaikhoahoc extends Model
{
    protected $table = "loaikhoahoc";
    public function khoahoc(){
        return $this->hasMany('App\Khoahoc','ma_loaikhoahoc','ma_loaikhoahoc');
    }

}
