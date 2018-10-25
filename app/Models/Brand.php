<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'goods_brand';
    protected $fillable = ['name','logo','chandi','note'];
    public $timestamps = false;
    /**
     * belongsToMany  多对多
     *
     * 第一个参数是 第二个Model
     *第二个参数是 关系表名
     *第三个参数是 第一个Model在关系表中的外键ID
     *第四个参数是 第二个Model在关系表中的外键ID
     *保存品牌的id
     *  */
    // 保存品牌的id
    public function category(){
        return $this->belongsToMany('App\Models\Category','goods_catbrand','brand_id','category_id');
    }
}
