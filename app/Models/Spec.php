<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{
    protected $table = 'spec';
    public $timestamps = false;
    protected $fillable = ['spec_name','attr_id'];
}
