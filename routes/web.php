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

//１３編集
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     //4-1.admin/profile/createにアクセスしたらProfileController の add Actionに割り当て
    Route::get('profile/create','Admin\ProfileController@add');
    //4-2.admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当て
    Route::get('profile/edit','Admin\ProfileController@edit');
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create'); # 追記
    Route::post('profile/create','Admin\ProfileController@create');
    Route::post('profile/edit','Admin\ProfileController@update') ;
    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/edit', 'Admin\NewsController@edit');// 追記
    Route::post('news/edit', 'Admin\NewsController@update');//追記
    Route::get('news/delete', 'Admin\NewsController@delete');
    
});


//3.「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。
Route::get('XXX','Admin\AAAController@bbb');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'NewsController@index');
Route::get('/profile', 'ProfileController@index');


