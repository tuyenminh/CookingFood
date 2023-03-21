<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nguyenlieu extends Model
{
    use HasFactory;
    protected $table = "nguyenlieu";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'ten_nl'
    ];

}
