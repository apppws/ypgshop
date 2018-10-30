<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCat;
class BlogCatController extends Controller
{
    //显示日志列表
    public function list(){
        $blogcat = new BlogCat;
        $data = $blogcat->tree();
        // dd($data);
        return view('blogCat/list',[
            'data'=>$data
        ]);
    }
    public function doadd(Request $req){
        $blogcat = new BlogCat;
        $blogcat->fill($req->all());
        $blogcat->save();
        return redirect()->route('blogcat');
    }

    public function edit(Request $req,$id){
        $data = BlogCat::find($id);
        $parent = $data->tree();
        // dd($parent);
        $childen = $data->childen($data->id);
        return view('blogcat/edit',[
            'data'=>$data,
            'childen'=>$childen,
            'parent'=>$parent
            ]);
    }

    public function doedit(Request $req,$id){
        $blogcat = BlogCat::find($id);
        $blogcat->fill($req->all());
        $blogcat->save();
        return redirect()->route('blogcat');
    }

    public function delete($id)
    {
        $blogcat = BlogCat::find($id);
    	$children = $blogcat->childen($blogcat->id);
    	$children[]=$blogcat->id;
    	$blogcat->destroy($children);
        return redirect()->route('blogcat');
    }
}
