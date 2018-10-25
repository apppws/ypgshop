<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandCategory extends Model
{
    protected $table="goods_catbrand";
    protected $fillable = ['category_id','brand_id'];
    public $timestamps = false;

    public function brands()
    {
        return $this->belongsTo('App\Models\Brand','brand_id');
    }
}
