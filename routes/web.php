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

//Route::get('/', function () {
//    return view('welcome');
//});
//同下，定义单个路由
//Route::get('/', 'IndexController@index');



//路由可以使用一个name来定义
//Route::name('index')->get('/', function (){
//    return "this is test";
//});
Route::name('index')
//    ->middleware('auth')
    ->get('/', 'IndexController@index');

//还可以批量定义路由，最多7个
Route::resource('user', 'UserController');

Route::get('home', 'IndexController@Index');