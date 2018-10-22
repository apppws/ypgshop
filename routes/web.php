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
Route::get('add','MemberController@add')->name('memberadd');
Route::post('add','MemberController@doadd')->name('memberdoadd');
//改
Route::get('/member/edit/{id}','MemberController@edit')->name('memberedit');
Route::post('/member/edit/{id}','MemberController@doedit')->name('memberdoedit');
// 删
Route::get('member/delete/{id}','MemberController@delete')->name('memberdelete');
