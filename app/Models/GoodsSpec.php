<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsSpec extends Model
{
    protected $table = 'goods_goodspec';
    public $timestamps = false;
    protected $fillable = ['attr_id','attr_value','goods_id'];
}
