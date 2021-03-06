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
/*********************后端路由************************* */
// 显示登录页面
Route::get('/login','AdminLoginController@login')->name('login');
// 处理登陆页面
Route::post('/login','AdminLoginController@dologin')->name('dologin');


// 必须登录之后才能访问
Route::middleware(['login'])->group(function(){
        // 处理退出页面
    Route::get('/logout','AdminLoginController@logout')->name('logout');
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
    // 商品品牌分类
    Route::get('/category/brand/{id}','CategoryController@brand');

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
    // 属性
    Route::get('/goods/attr/{id}','GoodsController@attr')->name('goods_attr');
    Route::post('/goods/attr/{id}','GoodsController@doattr')->name('goods_doattr');
    // 规格
    Route::get('/goods/spec/{id}','GoodsController@spec')->name('goods_spec');
    Route::post('/goods/spec/{id}','GoodsController@dospec')->name('goods_dospec');
    // 商品相册
    Route::get('/goods/pic/{id}','GoodsController@pic')->name('pic');
    Route::post('/goods/pic/{id}','GoodsController@dopic')->name('dopic');
    Route::get('/goods/uploader','GoodsController@uploader')->name('pic');
    Route::post('/goods/pic/{goods_id}','GoodsController@upload');
    Route::get('/goods/del_pic/{goods_pic}','GoodsController@del_pic');
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

     /**
     * 商品规格
     */
    Route::get('/spec','SpecController@list')->name('spec');
    // 增
    Route::get('/spec/add','SpecController@add')->name('spec_add');
    Route::post('/spec/add','SpecController@doadd')->name('spec_doadd');
    // 修改
    Route::get('/spec/edit/{id}','SpecController@edit')->name('spec_edit');
    Route::post('/spec/edit/{id}','SpecController@doedit')->name('spec_doedit');
    // 删除
    Route::get('/spec/delete/{id}','SpecController@delete')->name('spec_delete');
    /**
     * 商品评论
     */
    Route::get('/comment','CommentController@list')->name('comment');
    // 增
    Route::get('/comment/add/{goods_id}','CommentController@add')->name('comment_add');
    Route::post('/comment/add/{goods_id}','CommentController@doadd')->name('comment_doadd');
    // 修改
    Route::get('/comment/edit/{id}/{goodsid?}','CommentController@edit')->name('comment_edit');
    Route::post('/comment/edit/{id}/{goodsid?}','CommentController@doedit')->name('comment_doedit');
    // 删除
    Route::get('/comment/delete/{id}','CommentController@delete')->name('comment_delete');
    /**
     *商品楼层
     */
    Route::get('/floor','FloorController@list')->name('floor');
    // 增
    Route::get('/floor/add','FloorController@add')->name('floor_add');
    Route::post('/floor/add','FloorController@doadd')->name('floor_doadd');
    // 修改
    Route::get('/floor/edit/{id}','FloorController@edit')->name('floor_edit');
    Route::post('/floor/edit/{id}','FloorController@doedit')->name('floor_doedit');
    // 删除
    Route::get('/floor/delete/{id}','FloorController@delete')->name('floor_delete');
    /**
     * 权限管理
     */
    Route::get('/privilege','PrivilegeController@list')->name('privilege');
    // 增
    Route::get('/privilege/add','PrivilegeController@add')->name('privilege_add');
    Route::post('/privilege/add','PrivilegeController@doadd')->name('privilege_doadd');
    // 修改
    Route::get('/privilege/edit/{id}','PrivilegeController@edit')->name('privilege_edit');
    Route::post('/privilege/edit/{id}','PrivilegeController@doedit')->name('privilege_doedit');
    // 删除
    Route::get('/privilege/delete/{id}','PrivilegeController@delete')->name('privilege_delete');
    /**
     * 角色管理
     */
    Route::get('/role','RoleController@list')->name('role');
    // 增
    Route::get('/role/add','RoleController@add')->name('role_add');
    Route::post('/role/add','RoleController@doadd')->name('role_doadd');
    // 修改
    Route::get('/role/edit/{id}','RoleController@edit')->name('role_edit');
    Route::post('/role/edit/{id}','RoleController@doedit')->name('role_doedit');
    // 删除
    Route::get('/role/delete/{id}','RoleController@delete')->name('role_delete');

    /**
     * 管理员管理
     */
    Route::get('/admins','AdminController@list')->name('admins');
    // 增
    Route::get('/admins/add','AdminController@add')->name('admin_add');
    Route::post('/admins/add','AdminController@doadd')->name('admin_doadd');
    // 修改
    Route::get('/admins/edit/{id}','AdminController@edit')->name('admin_edit');
    Route::post('/admins/edit/{id}','AdminController@doedit')->name('admin_doedit');
    // 删除
    Route::get('/admins/delete/{id}','AdminController@delete')->name('admin_delete');
    /**
     * 广告管理
     */
    Route::get('/ad','AdController@list')->name('ad');
    // 增
    Route::get('/ad/add','AdController@add')->name('ad_add');
    Route::post('/ad/add','AdController@doadd')->name('ad_doadd');
    // 修改
    Route::get('/ad/edit/{id}','AdController@edit')->name('ad_edit');
    Route::post('/ad/edit/{id}','AdController@doedit')->name('ad_doedit');
    // 删除
    Route::get('/ad/delete/{id}','AdController@delete')->name('ad_delete');

    /**
     * 广告管理位置
     */
    Route::get('/adpos','AdPosController@list')->name('adpos');
    // 增
    Route::get('/adpos/add','AdPosController@add')->name('adpos_add');
    Route::post('/adpos/add','AdPosController@doadd')->name('adpos_doadd');
    // 修改
    Route::get('/adpos/edit/{id}','AdPosController@edit')->name('adpos_edit');
    Route::post('/adpos/edit/{id}','AdPosController@doedit')->name('adpos_doedit');
    // 删除
    Route::get('/adpos/delete/{id}','AdPosController@delete')->name('adpos_delete');



    /**
     * 日志分类管理
     */
    Route::get('/blogcat','BlogCatController@list')->name('blogcat');
    // 增
    Route::get('/blogcat/add','BlogCatController@add')->name('blogcat_add');
    Route::post('/blogcat/add','BlogCatController@doadd')->name('blogcat_doadd');
    // 修改
    Route::get('/blogcat/edit/{id}','BlogCatController@edit')->name('blogcat_edit');
    Route::post('/blogcat/edit/{id}','BlogCatController@doedit')->name('blogcat_doedit');
    // 删除
    Route::get('/blogcat/delete/{id}','BlogCatController@delete')->name('blogcat_delete');

    /**
     * 日志管理
     */
    Route::get('/blog','BlogController@list')->name('blog');
    // 增
    Route::get('/blog/add','BlogController@add')->name('blog_add');
    Route::post('/blog/add','BlogController@doadd')->name('blog_doadd');
    // 修改
    Route::get('/blog/edit/{id}','BlogController@edit')->name('blog_edit');
    Route::post('/blog/edit/{id}','BlogController@doedit')->name('blog_doedit');
    // 删除
    Route::get('/blog/delete/{id}','BlogController@delete')->name('blog_delete');
});

/**********************前端路由******************* */
// 前台页面
Route::get('/','BeIndexController@index')->name('/');
// 显示日志页面
Route::get('/blcontent','BeIndexController@blcontent')->name('/blcontent');
Route::get('bloghtml/{name}','BeIndexController@make')->name('bloghtml');
// 注册
Route::get('/register','RegisterController@register')->name('register');
Route::post('/register','RegisterController@doregister')->name('doregister');
// 发短信
Route::get('/sendmobilecode', 'RegisterController@sendmobilecode')->name('sendphone');
// 登录页面
Route::get('/belogin','BeLoginController@belogin')->name('belogin');
Route::post('/belogin','BeLoginController@dobelogin')->name('dobelogin');
// 退出
Route::get('/logout','BeLoginController@logout')->name('logout');


// 购物车
Route::get('/cart','CartController@index')->name('cart');

// 显示商品
Route::get('/begoods/{id}','BeGoodsController@index')->name('begoods');
// 获取sku信息
Route::get('/sku/{gid}/{skustr}','BeGoodsController@sku')->name('sku');
// 加入购物车   skuid   商品数量
Route::get('/addtocart/{skuid}/{gocount}','CartController@addcatr')->name('addcart');
// 显示结算页面
Route::post('/checkout','CartController@checkout')->name('checkout');
// 生成订单页面
Route::post('/order_pay', 'CartController@order_pay')->name('order_pay');

/**
 *支付宝支付
 *  */
Route::get('/pay/{orderid}/{countprice}','PayController@pay')->name('pay');
// 前端回调
Route::get('/pay/alipayReturn','PayController@alipayReturn')->name('alipayReturn');
// 后端回调
Route::post('/pay/alipayNotify','PayController@alipayNotify')->name('alipayNotify');
// 测试
// Route::get('/alipay', function() {
//     return app('alipay')->web([
//         'out_trade_no' => time(),
//         'total_amount' => '1',
//         'subject' => 'test subject - 测试',
//     ]);
// });

/**
 * 微信支付
 */
Route::get('/payByWechat/{orderid}/{countprice}','PayController@payByWechat')->name('payByWechat');
Route::get('/payimg/{orderid}/{countprice}','PayController@payimg')->name('payimg');
//服务器回调
Route::post('/payByWechat/wechatNotify', 'PayController@wechatNotify')->name('wechatNotify');

// 个人信息页面
Route::get('/bemember','BeMemberController@bemember')->name('bemember');
Route::post('/bemember/{id}','BeMemberController@dobemember')->name('dobemember');
