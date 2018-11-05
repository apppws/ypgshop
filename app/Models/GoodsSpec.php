<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsSpec extends Model
{
    protected $table = 'goods_spec';
    public $timestamps = false;
    protected $fillable = ['attr_id','attr_value','goods_id'];
    // 商品属性关联
    public function Attrgood(){
        return $this->belongsTo('App\Models\Attr','attr_id');
    }
}
