<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $table="goods";
    protected $fillable = ['goods_name','cat_id1','cat_id2','cat_id3','is_on_sale','goodDesc','weigth','maprice','shprice','chandi','caizhi'];

    public function goodsattrs(){
        return $this->belongToMany('App\models\GoodsAttr','goods_sku','goods_id','attr_id');
    }

    public function goods_pics()
    {
    	return $this->hasMany('App\Models\GoodsPic', 'goods_id');
    }

    public function comments()
    {
    	return $this->hasMany('App\Models\Comment', 'goods_id');
    }
}
