<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderGoods extends Model
{
    protected $table = 'order_goods';
    protected $fillable = ['order_id','goods_name','goods_id','goods_count','goods_price','goods_attr_list','goods_pic','sku_id','cat_id1','cat_id2','cat_id3'];
    public $timestamps = false;
}
