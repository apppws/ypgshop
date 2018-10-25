<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsAttr extends Model
{
    protected $table = 'goods_goodattr';
    public $timestamps = false;
    protected $fillable = ['attr_id','attr_value','goods_id'];
}
