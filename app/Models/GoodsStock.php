<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsStock extends Model
{
    protected $table = 'goods_stock';
    public $timestamps = false;
    protected $fillable = ['stock','price','goods_attr_list','goods_id'];
}
