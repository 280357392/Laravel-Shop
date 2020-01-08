<?php

Route::get('/', 'PagesController@root')->name('root');
Route::get('/home', 'PagesController@root')->name('root');

Auth::routes();

