<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loaicongthuc extends Model
{
    use HasFactory;
    protected $table = "loaicongthuc";
    public $timestamps = false;
    protected $fillable = [
        'ten_loaicongthuc'
    ];
    public function congthuc(){
        return $this->hasMany(Congthuc::class, 'id_lct', 'id');
    }
}
