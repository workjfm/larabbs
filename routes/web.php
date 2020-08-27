<?php

// 站点首页
Route::get('/', 'TopicsController@index')->name('root');

// 登陆注册
Auth::routes(['verify' => true]);

// 用户
Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

// 帖子
Route::resource('topics', 'TopicsController', ['only' => ['index', 'create', 'store', 'update', 'edit', 'destroy']]);

// 分类
Route::resource('categories', 'CategoriesController', ['only' => ['show']]);

// 上传图片
Route::post('upload_image', 'TopicsController@uploadImage')->name('topics.upload_image');

// 帖子
Route::get('topics/{topic}/{slug?}', 'TopicsController@show')->name('topics.show');

// 回复
Route::resource('replies', 'RepliesController', ['only' => ['store', 'destroy']]);

// 通知
Route::resource('notifications', 'NotificationsController', ['only' => ['index']]);

// 后台访问权限
Route::get('permission-denied', 'PagesController@permissionDenied')->name('permission-denied');
