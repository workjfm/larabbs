<?php

Route::get('/', 'PagesController@root')->name('root');

Auth::routes(['verify' => true]);

// 用户
Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
