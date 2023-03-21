<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Congthuc extends Model
{
    use HasFactory;
    protected $table = "congthuc";
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'ma_ct',
        'ten_mon',
        'tg_nau',
        'cach_lam',
        'id_lct'
    ];

    public function loaicongthuc(){
        return $this->hasOne(Loaicongthuc::class, 'id', 'id_lct')
        ->withDefault(['ten_loaicongthuc' => '']);
    }
}
