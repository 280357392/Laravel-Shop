<?php

Route::get('/', 'PagesController@root')->name('root')->middleware('verified');
Route::get('/home', 'PagesController@root')->name('root')->middleware('verified');

// 在之前的路由里加上一个 verify 参数
Auth::routes(['verify' => true]);

