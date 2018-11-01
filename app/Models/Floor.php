<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $table = "floor";
    public $timestamps = false;
    protected $fillable = ['flo_name','sort_num','ad_img','ad_img_link','cat_id1','cat_id2','cat_id3','subtitle1','subtitle2','subtitle3','subtitle4','subtitle5','goods_id1','goods_id2','goods_id3','goods_id4','goods_id5'];
}
