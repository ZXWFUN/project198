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

Route::get('/code/captcha/{tmp}', 'Admin\LoginController@captcha');



















//文章模块
Route::resource('article','Admin\ArticleController');
//文件上传
Route::post('article/upload','Admin\ArticleController@upload');
//访问update方法路由
Route::post('article/modify/{id}','Admin\ArticleController@update1');
//新闻类别
Route::resource('news','Admin\NewsController');