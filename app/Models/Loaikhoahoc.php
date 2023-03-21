<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaikhoahoc extends Model
{
    use HasFactory;
    protected $table = "loaikh";
    public $timestamps = false;
    protected $fillable = [
        'ten_loaikhoahoc'
    ];
    public function khoahoc(){
        return $this->hasMany(Khoahoc::class, 'id_lkh', 'id');
    }

}
