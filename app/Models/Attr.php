<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    protected $table = 'goods_sku';
    public $timestamps = false;
    protected $fillable = ['attr_name','attrval','attrprice','cat_id1','cat_id2','cat_id3','attrstock','group_name','attr_type','show_type','attr_options'];
}
