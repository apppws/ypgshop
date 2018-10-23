<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'goods_cats';
    protected $fillable = ['name','parent1_id','parent2_id'];
    public $timestamps = false;
}
