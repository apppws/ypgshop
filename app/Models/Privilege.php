<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    protected $table = "privilege";
    protected $fillable = ['pri_name','url_path','parent_id'];
    public $timestamps = false;

    // 连接权限角色表  多对多
    public function roles(){
        return $this->belongsToMany('App\Models\Role','Role','role_id','privilege_id');
    }

    // 递归树形结构
    public function tree(){
        // 取出所有的分类
        $data = $this->get();
        // dd($data);
        // 递归重新排序
        $ret = $this->_tree($data);

        return $ret;
    }
    // 递归排序
    public function _tree($data,$parent_id=0,$level=0){
        // 1 先定义一个已经排序好的数组
        static $_ret = [];
        // 2 循环
        foreach($data as $k=>$v){
            // 如果data中的 parent_id = 0
            if($v['parent_id']==$parent_id){
                // 标记级别
                $v['level'] = $level;
                // 并放到排序好的数组
                $_ret[] = $v;
                // 并找到 子类
                $this->_tree($data,$v['id'],$level+1);
            }
        }
        // 排序好  就返回
        return $_ret;
    }

    // 取出这个分类所有子集分类
    public function childen($cid){
        $data = $this->get();
        // dd($cid);
        return  $this->_childen($data,$cid,TRUE);
    }
    public function _childen($data,$cid,$isChear){
        // dd($cid);
        // 1 先定义一个已经排序好的数组
        static $ret = [];
        // 2判断是否需要清除
        if($isChear){
            $ret=[];
        }
        // 3 循环
        foreach($data as $k => $v){
            // dd($v['parent_id']);
            if($v['parent_id']==$cid){
                // 并放到排序好的数组
                $ret[] = $v['id'];
                // 并找到 子类
                $this->_childen($data,$v['id'],false);
            }
        }
        // dd($ret);
        // 排序好  就返回
        return $ret;
    }

}
