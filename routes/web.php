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

Route::get('/index', function () {
    return view('welcome');
});
Route::get('/tttc', function () {
    return view('tttc');
});
Route::get('/qqq', function () {
    return view('qqq');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/mypage', 'API\IndexController@index');