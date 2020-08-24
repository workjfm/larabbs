<?php

Route::get('/', 'PagesController@root')->name('root');

Auth::routes(['verify' => true]);

// 用户
Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

// 帖子
Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);

// 分类
Route::resource('categories', 'CategoriesController', ['only' => ['show']]);
