<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdPos extends Model
{
    protected $table = 'ad_positions';
    protected $fillable =['po_width','po_height','po_name'];
    public $timestamps = false;

    // 连接ad
    public function abs(){
        return $this->hasMany('App\Models\Ad');
    }
}
