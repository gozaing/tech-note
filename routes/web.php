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
Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/memo', 'MemoController');

// 存在しないsample を叩いた場合は301を返してmemoへ
Route::get('/sample', function() {
    return redirect('/memo', 301);
});