<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    ///显示列表页
    public function list(Admin $admin,Request $req){
        $data = $admin->paginate(5);
        // dd($data);
        if($req->keyword){
            $data->where('name','like',"%$req->keyword%");
        }
        if($req->from){
            $data->where('created_at','==',$req->from);
        }
        return view('admin/list',[
            'data'=>$data,
            'req'=>$req
        ]);
    }
    // 显示添加页面
    public function add(){
        $roleData = Role::all();
       return  view('admin/add',[
           'roleData'=>$roleData
       ]);
    }
    // 处理添加页面
    public function doadd(Request $req){
        // 表单验证
        // $req->validate([
        //     'name'=> 'required|max:18|min:3',
        //     'password'=>'required|between:6,18',
        //     'cpassword'=>'same:password'
        // ]);
        $admin = new Admin;
        $admin->name = $req->name;
        $admin->password = Hash::make($req->password);
        // dd($admin);
        $admin->save();
        // 角色列表
        if($req->role_id){
            // 如果有就添加到这个表中
            $admin->roles()->attach($req->role_id);
        }
        return redirect()->route('admins');
     }
    //  修改页面
    public function edit(Request $req,$id){
        $roleData = Role::all();
        $admin = Admin::find($id);
        // 取出这个表中这个权限id  为了判断选中状态
        $roleadmin = $admin->roles()->get(['role_id']);;
        // dd($roleadmin);
        $roleId = [];
        foreach($roleadmin as $v){
            $roleId[]= $v->role_id;
        }
        // dd($roleId);
        // dd($admin);
        return view('admin/edit',[
            'roleData'=>$roleData,
            'data'=>$admin,
            'roleId'=>$roleId
        ]);
    }
    // 处理修改好的表单
    public function doedit(Request $req,$id){
        $admin = Admin::find($id);
        $admin->name = $req->name;
        $admin->password = Hash::make($req->password);
        $admin->save();
        // 先删除
        $admin->roles()->detach();
        // 如果有就添加
        if($req->role_id)
        {
           $admin->roles()->attach($req->role_id);
        }
        // 跳转
        return redirect()->route('admins');
    }

    // 删除
    public function delete($id){
        $admin = Admin::find($id);
        // 要删除关联表中的 所有关于这个id的值
        $admin->roles()->detach();
        $admin->delete();
        return redirect()->route('admins');
    }


}
