<?php
Route::group(['prefix'=>'index'],function (){
    Route::any('index','IndexController@index');
    Route::any('aaa','IndexController@show');
    Route::any('bbb','IndexController@del');
    Route::any('add','IndexController@insert');
    Route::any('insert','IndexController@add_do');
    Route::any('add_do','IndexController@plan');
    Route::any('upd','IndexController@upd');
    Route::any('uuu','IndexController@update');
    Route::any('service','IndexController@service');
});
Route::group(['prefix'=>'service'],function (){
    Route::any('service','ServiceController@index');
    Route::any('create','ServiceController@create');
    Route::any('house','ServiceController@house');
    Route::any('play','ServiceController@show');
    Route::any('unset','ServiceController@unset');
    Route::any('redact','ServiceController@redact');
    Route::any('compile','ServiceController@compile');
    Route::any('fack','ServiceController@fack');
});

Route::group(['prefix'=>'over'],function (){
    Route::any('over','FlootController@index');
    Route::any('show','FlootController@show');


});

Route::group(['prefix'=>'home'],function (){
    Route::any('index','HomeController@index');
    Route::any('login','HomeController@login');
    Route::any('doLogin','HomeController@doLogin');
    Route::any('exit','HomeController@exit');
    Route::any('information','HomeController@information');
    Route::any('whole','HomeController@whole');
    Route::any('shows','HomeController@shows');
    Route::any('add','HomeController@add');
    Route::any('insert','HomeController@insert');
    Route::any('delete','HomeController@delete');
    Route::any('update','HomeController@update');
    Route::any('save','HomeController@save');
});

