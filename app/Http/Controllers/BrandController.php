<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
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
        return view('brand/add');
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
        return redirect()->route('brand');
    }

    // 修改页面
    public function edit($id){
        $brand = new Brand;
        $data = $brand::find($id);
        // return $data;
        return view('brand/edit',[
            'data'=>$data
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
        return redirect()->route('brand');
    }

    // 删除
    public function delete($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('brand');
    }
}

