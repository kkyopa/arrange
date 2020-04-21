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
    return view('index');
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });


// アレンジデータ

Route::get('/arrange-data/top',  function () {
    return view('/arrange-data/top');
});


// オープンアウト
Route::get('/openout', 'OpenOutController@index');
Route::post('/openout', 'OpenOutController@create');
Route::get('/openout/show/{id}', 'OpenOutController@show');




// マスターアウト
Route::get('/masterout',  function () {
    return view('/masterout/masterout');
});

// パーフェクトモード
Route::get('/perfect',  function () {
    return view('/perfect/perfect');
});


// ログイン
Auth::routes();


// プロフィール系
Route::get('/user/profile', 'OpenOutController@profile');
Route::post('/user/profile', 'OpenOutController@profile');
Route::get('/home', 'HomeController@index')->name('home');


// 各種ページ
Route::get('/contact',  function () {
    return view('contact');
});

Route::get('/privacy',  function () {
    return view('privacy');
});

Route::get('/service',  function () {
    return view('service');
});