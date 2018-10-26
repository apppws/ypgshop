<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'goods_comment';
    protected $fillable = ['star','content','goods_id','user_id','is_show','logo','sm_pic','mid_pic','big_pic'];

    // 连表
    // 会员表
    public function member(){
        return $this->belongsTo('\App\Models\Member','user_id');
    }
    // 商品表
    public function goods(){
        return $this->belongsTo('App\Models\Goods','goods_id');
    }
}
