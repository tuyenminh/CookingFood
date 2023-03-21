<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoahoc extends Model
{
    use HasFactory;
    protected $table = "kh_hoc";
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'ma_kh',
        'ten_khoahoc',
        'mota',
        'gia',
        'ngay_kg',
        'tg_hoc',
        'id_lkh'
    ];

    public function loaikhoahoc(){
        return $this->hasOne(Loaikhoahoc::class, 'id', 'id_lkh')
        ->withDefault(['ten_loaikhoahoc' => '']);
    }
}
