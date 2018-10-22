<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // 表名
    protected $table = "users";
    //白名单
    protected $fillable = ['username','phone','password','birthday','jifen','jingyan','sex','email','address','jifen','jingyan'];
}
