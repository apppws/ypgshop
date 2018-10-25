<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// 显示登录页面
Route::get('/login','LoginController@login');
// 处理登陆页面
Route::post('/login','LoginController@dologin')->name('dologin');
// 显示后台页面
Route::get('/admin/index','IndexController@index')->name('adindex');
Route::get('/admin/home','IndexController@home')->name('home');

/**
 * 会员管理
 */
// 列表(查)
Route::get('/member','MemberController@index')->name('member_index');
// 增
Route::get('/member/add','MemberController@add')->name('memberadd');
Route::post('/member/add','MemberController@doadd')->name('memberdoadd');
//改
Route::get('/member/edit/{id}','MemberController@edit')->name('memberedit');
Route::post('/member/edit/{id}','MemberController@doedit')->name('memberdoedit');
// 删
Route::get('/member/delete/{id}','MemberController@delete')->name('memberdelete');
/**
 * 会员等级
 */
Route::get('/memberlevel','MemberlevelController@index')->name('member_level');
// 增
Route::get('/memberlevel/add','MemberlevelController@add')->name('memberleveladd');
Route::post('/memberlevel/add','MemberlevelController@doadd')->name('memberleveldoadd');
//改
Route::get('/memberlevel/edit/{id}','MemberlevelController@edit')->name('memberleveledit');
Route::post('/memberlevel/edit/{id}','MemberlevelController@doedit')->name('memberleveldoedit');
// 删
Route::get('/memberlevel/delete/{id}','MemberlevelController@delete')->name('memberleveldelete');
/**
 * 商品分类
 */
Route::get('/category','CategoryController@list')->name('category');
// 增
Route::get('/add','CategoryController@add')->name('categoryadd');
Route::post('/add','CategoryController@doadd')->name('categorydoadd');
// 获取二级分类
Route::get('/subcat/{parent1_id}','CategoryController@subcat')->name('subcat');
// 获取三级分类
Route::get('/subcat1/{parent2_id}','CategoryController@subcat1');
// 修改页面
Route::get('/category/edit/{id}','CategoryController@edit')->name('categoryedit');
Route::post('/category/edit/{id}','CategoryController@doedit')->name('categorydoedit');
//删除
Route::get('/category/delete/{id}','CategoryController@delete')->name('categorydelete');

/**
 * 商品模块
 */
Route::get('/goods','GoodsController@list')->name('goods');
// 增
Route::get('/goods/add','GoodsController@add')->name('goods_add');
Route::post('/goods/add','GoodsController@doadd')->name('goods_doadd');
// 修改
Route::get('/goods/edit/{id}','GoodsController@edit')->name('goods_edit');
Route::post('/goods/edit/{id}','GoodsController@doedit')->name('goods_doedit');
// 删除
Route::get('/goods/delete/{id}','GoodsController@delete')->name('goods_delete');
/**
 * 商品品牌
 */
Route::get('/brand','BrandController@list')->name('brand');
// 增
Route::get('/brand/add','BrandController@add')->name('brand_add');
Route::post('/brand/add','BrandController@doadd')->name('brand_doadd');
// 修改
Route::get('/brand/edit/{id}','BrandController@edit')->name('brand_edit');
Route::post('/brand/edit/{id}','BrandController@doedit')->name('brand_doedit');
// 删除
Route::get('/brand/delete/{id}','BrandController@delete')->name('brand_delete');
/**
 * 商品属性
 */
Route::get('/attr','AttrController@list')->name('attr');
// 增
Route::get('/attr/add','AttrController@add')->name('attr_add');
Route::post('/attr/add','AttrController@doadd')->name('attr_doadd');
// 修改
Route::get('/attr/edit/{id}','AttrController@edit')->name('attr_edit');
Route::post('/attr/edit/{id}','AttrController@doedit')->name('brand_doedit');
// 删除
Route::get('/attr/delete/{id}','AttrController@delete')->name('attr_delete');
