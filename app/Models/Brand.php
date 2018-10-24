<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'goods_brand';
    protected $fillable = ['name','logo','chandi','note'];
    public $timestamps = false;
}
