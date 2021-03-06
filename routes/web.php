<?php

//dd(resolve('App\Billing\Stripe'));

Route::get('/', 'PostController@index')->name('home');

Route::get('/posts', 'PostController@index');

Route::post('/posts', 'PostController@store');

Route::get('/posts/create', 'PostController@create');	

Route::get('/posts/{post}', 'PostController@show');

Route::post('/posts/{post}/comments', 'CommentController@store');

Route::get('/posts/tags/{tag}', 'TagController@index');


Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create')->name('login');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');
