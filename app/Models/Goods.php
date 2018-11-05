<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use DB;
class Goods extends Model
{
    protected $table="goods";
    protected $fillable = ['goods_name','cat_id1','cat_id2','cat_id3','brand_id','is_on_sale','goods_desc','weigth','maprice','shprice','height','width'];

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

    public function cat1()
    {
    	$goods = DB::table('goods')
            ->select('*')
            ->leftJoin('goods_cats','goods.cat_id1','=','goods_cats.id')
            ->first();
        return $goods;
    }
    public function cat2()
    {
    	$goods = DB::table('goods')
            ->select('*')
            ->leftJoin('goods_cats','goods.cat_id2','=','goods_cats.id')
            ->first();
        return $goods;
    }
    public function cat3()
    {
    	$goods = DB::table('goods')
            ->select('*')
            ->leftJoin('goods_cats','goods.cat_id3','=','goods_cats.id')
            ->first();
        return $goods;
    }

    // 商品图片
    public function pics(){
        $pic = DB::table('goods')
            ->select('*')
            ->leftJoin('goods_pic','goods.id','=','goods_pic.goods_id')
            ->get();
        return $pic;
    }

    // 商品属性
    public function attrs(){
        return $this->hasMany('App\Models\GoodsAttr','goods_id');
    }

    public function specs(){
        return $this->hasMany('App\Models\GoodsSpec','goods_id');
    }

}
