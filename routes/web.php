<?php

Route::get('/', 'PostController@index');

Route::get('/posts', 'PostController@index');

Route::post('/posts', 'PostController@store');

Route::get('/posts/create', 'PostController@create');	

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');
