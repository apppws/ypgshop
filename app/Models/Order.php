<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = ['orders_id','user_id','name','phone','province','city','area','address','pay_method','order_status','is_pay'];
}
