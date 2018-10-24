<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table="goods";
    protected $fillable = ['goods_name','brand_id','cat_id1','cat_id2','cat_id3','is_on_sale','goodDesc','weigth','maprice','shprice','chandi','caizhi'];
}
