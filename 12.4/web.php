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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix'=>'index'],function (){
	Route::any('index','IndexController@index');
	Route::any('add','IndexController@add');
	Route::any('login','IndexController@login');
	Route::any('show','IndexController@show');
	Route::any('del','IndexController@del');
	Route::any('upd','IndexController@upd');
});

Route::group(['prefix'=>'first'],function (){
	Route::any('index','FirstController@index');
	Route::any('home','FirstController@home');
	Route::any('login','FirstController@login');
	Route::any('doLogin','FirstController@doLogin');
});

Route::group(['prefix'=>'role'],function (){
	Route::any('index','RoleController@index');
	Route::any('shows','RoleController@shows');
	Route::any('add','RoleController@add');
	Route::any('doAdd','RoleController@doAdd');
	Route::any('use','RoleController@use');
	Route::any('del','RoleController@del');
});
