<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ad';
    protected $fillable = ['adname','po_id','img','is_on','ad_type','url','code'];
    public $timestamps = false;


}
