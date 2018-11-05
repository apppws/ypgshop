<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    protected $table = 'attribute';
    public $timestamps = false;
    protected $fillable = ['attr_name','show_type','group_name','cat_id1','cat_id2','cat_id3','attr_options','group_name'];
}
