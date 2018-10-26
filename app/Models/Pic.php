<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    protected $table = 'goods_pic';
    protected $fillable = ['pic','sm_pic','mid_pic','big_pic','goods_id'];
    public $timestamps = false;
}
