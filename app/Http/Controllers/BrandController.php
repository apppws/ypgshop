<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use Storage;
class BrandController extends Controller
{
    //列表页
    public function list(Request $req){
        $data = Brand::orderBy('id','desc')->paginate(5);
        if($req->keyword){
            $data->where('username','like',"%$req->keyword%");
        }
        return view('brand/brand',[
            'data'=>$data,
            'req' => $req,
        ]);
    }
    // 添加
    public function add(){
        // 取出一级的分类
        $topCat = Category::where('parent1_id',0)->get();
        return view('brand/add',[
            'topCat'=>$topCat
        ]);
    }
    // 处理添加
    public function doadd(Request $req){
       $brand = new Brand;
       $brand->fill($req->all());
        // logo
        if($req->hasFile('logo') && $req->file('logo')->isValid()){
            $brand->logo ='/upload/'.$req->logo->store('brand/'.date('Ymd'));
        }
        $brand->save();
        // 向品牌表中插入数据
        $brand->category()->attach($req->get('category_id'));
        return redirect()->route('brand');
    }

    // 修改页面
    public function edit($id){
        $brand = new Brand;
        $data = $brand::find($id);
        // return $data;
        // dd($data);
        // 取出一级的分类
        $topCat = Category::where('parent1_id',0)->get();
        return view('brand/edit',[
            'data'=>$data,
            'topCat'=>$topCat
        ]);
    }
    // 处理修改的页面
    public function doedit(Request $req,$id){
        $brand = Brand::find($id);
        $brand->fill($req->all());
        // logo
        if($req->hasFile('logo') && $req->file('logo')->isValid()){
            // 删除原来的图片
            if($req->logo){
                Storage::delete($brand->logo);
            }
            $brand->logo ='/upload/'.$req->logo->store('brand/'.date('Ymd'));
        }
        // 保存
        $brand->save();
        // 先删除
        $brand->category()->detach();
        // 在加入数据
        $brand->category()->attach($req->get('category_id'));
        return redirect()->route('brand');
    }

    // 删除
    public function delete($id){
        $brand = Brand::find($id);
        // 删除品牌的时候要把 分类表一起删掉
        $brand->category()->detach();
        $brand->delete();
        return redirect()->route('brand');
    }
}

