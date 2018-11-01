<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
class Category extends Model
{
    protected $table = 'goods_cats';
    protected $fillable = ['name','parent1_id','parent2_id'];
    public $timestamps = false;
    public $subCat=[];
    // 显示返回 分类的方法
    public function catindex(){
        // 先获取所有的分类
        $catData = self::all();
        // dd($catData);
        // 在循环
        $cat = [];
        foreach($catData as $k=>$v){
            // 判断是否是一级分类
            if($v->parent1_id==0){
                // 如果等于一级分类 就删除这个值的下标
                unset($catData[$k]);
                // 判断是否是二级分类
                foreach($catData as $k1=>$v1){
                    if($v1->parent1_id==$v->id && $v1->parent2_id==0){
                        unset($catData[$k1]);
                        // 判断是否是三级分类 并赋值
                        foreach($catData as $k2=>$v2){
                            if($v2->parent2_id==$v1->id){
                                unset($catData[$k2]);
                                $v1->subCat[] = $v2;
                            }
                        }
                        // dd($v1);
                        $v->subCat[] = $v1;
                    }
                }
                // dd($v);
                $cat[] = $v;
            }
        }
        // dd($cat);
        return $cat;
    }
}
