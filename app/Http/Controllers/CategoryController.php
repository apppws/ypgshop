<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\models\Category;

class CategoryController extends Controller
{
    //显示分类的页面
    public function list(){
        $data = Category::where('parent1_id',0)->get();
        // var_dump($data);die;
        return view('category/category',[
            'data'=>$data
        ]);
    }
    public function add(){
        $topCat = Category::where('parent1_id',0)->get();
        // var_dump($topCat);die;
        return view('category/categoryadd',[
            'topCat'=>$topCat
        ]);
    }
    public function doadd(Request $req){
        $data = $req->all();
        // var_dump($data);die;
        $category = new Category;
        $category->fill($data);
        // dd($category);
        $category->save();
        return redirect()->route('category');
    }

    // 获取二级分类
    public function subcat($parent1_id)
    {
        // var_dump($parent1_id);die;
        $data = Category::where('parent1_id',$parent1_id)
                            ->where('parent2_id',0)
                            ->get();
        return response()->json($data);
    }
    // 获取三级分类
    public function subcat1($parent2_id)
    {
        $data = Category::where('parent2_id',$parent2_id)->get();
        return response()->json($data);
    }

    // 修改页面
    public function edit(Request $req,$id)
    {
        $category = Category::where('id',$id)->first();
        // 取出一级父分类  条件是 parent1_id == 0 取出来
        $topCat = Category::where('parent1_id',0)->get();
        // 取出二级父分类  条件是 parent1_id大于0 全部取出来
        if($category->parent1_id>0){
            $secCat = Category::where('parent1_id',$category->parent1_id)->where('parent2_id',0)->get();
            // dd($secCat);
        }
        else{
            // 否则就为空
            $secCat=[];
        }

        return view('category/categoryedit',[
            'data'=>$category,
            'topCat'=>$topCat,
            'secCat'=>$secCat,
        ]);
    }

    // 处理修改的表单
    public function doedit(Request $req,$id){
        $category = Category::find($id);
        // var_dump($id);die;
        $category->fill($req->all());
        $category->save();
        return redirect()->route('category');
    }

    // 删除页面
    public function delete($id){
        // var_dump($id);die;
        $category = Category::find($id);
        // dd($category->parent1_id);
        // 顶级分类
        if($category->parent1_id == 0)
        {
            // 取出二级子分类
            $subCat = Category::where('parent1_id',$category->id)->get();
            // 循环二级子分类
            foreach($subCat as $v)
            {
                // 删除三级子分类
                Category::where('parent2_id',$v->id)->delete();
            }
            // 删除二级子分类
            Category::where('parent1_id',$category->id)->delete();
            $category->delete();
        }// 三级分类
        else if($category->parent2_id > 0)
        {
            $category->delete();
        }
        // 二级分类
        else
        {
            // 删除三级子分类
            $category->where('parent2_id',$category->id)->delete();
            $category->delete();
        }
        return redirect()->route('category');
    }
}
