<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCat;
use App\Models\Blog;
use Storage;
class BlogController extends Controller
{
    //显示日志页面
    public function list(){
        $blog = Blog::paginate(5);
        // dd($blog);
        $blogcat = new BlogCat;
        $c = $blogcat->tree();
        // dd($c);
       return  view('blog/list',[
           'data'=>$blog,
           'blogcat'=>$c
       ]);
    }

    // 添加页面
    public function add(){
        $blogcat = BlogCat::get();
        // dd($blogcat);
        return view('blog/add',[
            'blogcat'=>$blogcat
        ]);
    }

    // 处理添加的表单
    public function doadd(Request $req){
        $blog = new Blog;
        $blog->fill($req->all());
        if($req->hasFile('img') && $req->file('img')->isValid()){
            $blog->img ='/upload/'.$req->img->store('blogimg/'.date('Ymd'));
        }
        // dd($blog);
        $blog->save();
        return redirect()->route('blog');
    }

    // 修改页面
    public function edit(Request $req,$id){
        $blog = Blog::find($id);
        $blogcat = BlogCat::get();
        // dd($blog);
        return view('blog/edit',[
            'blog'=>$blog,
            'blogcat'=>$blogcat
        ]);
    }
    // 处理修改页面
    public function doedit(Request $req,$id){
        $blog = Blog::find($id);
        $blog->fill($req->all());
        if($req->hasFile('img') && $req->file('img')->isValid()){
            // 删除原来的图片
            if($req->img){
                Storage::delete($blog->img);
            }
            $blog->img ='/upload/'.$req->img->store('blogimg/'.date('Ymd'));
        }
        $blog->save();
        return redirect()->route('blog');
    }
}
