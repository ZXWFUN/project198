<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    //后台登录
    Route::get('login','LoginController@login')->name('admin.login');
//获取验证码
    Route::get('yzm','LoginController@yzm');
    //提交后台登录处理逻辑
    Route::post('dologin','LoginController@doLogin');

});

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'login'],function(){



//加密
    Route::get('jiami','LoginController@jiami');

//session知识点
    Route::get('session','LoginController@session');

//    后台首页
    Route::get('index','LoginController@index');
//    后台详情页
    Route::get('welcome','LoginController@welcome');


    Route::get('msg','LoginController@msg');

//    退出登录
    Route::get('logout','LoginController@logout');


    //用户模块路由
    //修改用户状态的路由
    Route::get('user/changestate','UserController@changeState');
//    批量删除用户路由
    Route::get('user/del','UserController@del');
    Route::resource('user','UserController');
});


















//  给角用户授权
Route::get('admin/user/auth/{id}','Admin\RoleController@auth');
//    处理用户授权角色的路由
Route::post('admin/user1/doauth','Admin\RoleController@doAuth');
Route::get('/code/captcha/{tmp}', 'Admin\LoginController@captcha');

//配置模块路由
Route::resource('admin/config','Admin\ConfigController');

//角色模块路由
Route::resource('admin/role','Admin\RoleController');
//  给角色授权
Route::get('admin/role/auth/{id}','Admin\RoleController@auth');
//    处理授权的路由
Route::post('admin/role/doauth','Admin\RoleController@doAuth');
//权限模块路由
Route::resource('admin/permission','Admin\PermissionController');
