<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hinhanh extends Model
{
    use HasFactory;
    protected $table = "hinhanh";
    public $timestamps = false;
    protected $fillable = [
        'id_hinh',
        'url_hinh',
        'id_ct'
    ];
    public function congthuc(){
        return $this->hasOne('App\Congthuc','id_hinh','id_lct');
    }
}
