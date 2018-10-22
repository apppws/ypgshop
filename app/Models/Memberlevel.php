<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memberlevel extends Model
{
     // 表名
    protected $table = "user_level";
    //白名单
    protected $fillable = ['level_name','jybottom','jytop'];
    public $timestamps = false;
}
