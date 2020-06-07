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
     Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
     Route::post('news/create', 'Admin\NewsController@create'); # 追記
});


//3.「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。
//Route::group(['prefix' => '○○'], function() {
    //Route::get('XXX','Admin\AAAController@bbb');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

