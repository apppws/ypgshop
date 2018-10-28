<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";
    protected $fillable = ['role_name'];
    public $timestamps = false;

    // 连接权限表  多对多
    public function privileges(){
        return $this->belongsToMany('App\Models\Privilege','role_privilege','role_id','privilege_id');
    }
    // 用户表
    public function admin(){
        return $this->belongsToMany('App\Moldes\Admin','admin_role','admin_id','role_id');
    }
}
