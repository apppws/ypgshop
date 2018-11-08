<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'user_address';
    protected $fillable = ['user_id','name','phone','province','city','area','address','is_default'];
    public $timestamps = false;
}
