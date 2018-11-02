<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Blog extends Model
{
    protected $table = "blog";
    protected $fillable = ['title','img','content','is_show','cat_id','url'];

    // 获取咨询
    public function getblog(){
        /**
         * SELECT a.id,a.title,a.content,a.cat_id,b.parent_id,b.id as bid,b.cat_name
         *   FROM shop_blog a
         *   LEFT JOIN shop_blog_cat b ON a.cat_id = b.id
         */
        $data = DB::table('blog')
                    ->select('blog.id','title','content','cat_id','url','parent_id','blog_cat.id','blog_cat.cat_name')
                    ->leftJoin('blog_cat','blog.cat_id','=','blog_cat.id')
                    ->limit(6)
                    ->get();


        return $data;
    }
}
