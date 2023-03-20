<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Congthuc extends Model
{
    use HasFactory;
    protected $table = "congthuc";
    public $timestamps = false;
    protected $fillable = [
        'ten_mon',
        'cach_lam',
        'tg_nau'
    ];
    public function loaicongthuc(){
        return $this->hasOne('App\Loaicongthuc','id','id_lct');
    }
}
