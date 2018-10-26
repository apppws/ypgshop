<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentPic extends Model
{
    protected $table = 'goods_comment_pic';
    protected $fillable = ['comment_id','pic','sm_pic','mid_pic','big_pic'];
    public $timestamps = false;
}
