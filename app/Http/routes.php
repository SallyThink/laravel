<?php

Route::get('/',['uses'=>'PostController@index']);
Route::get('/post/newpost',['uses'=>'PostController@newpost']);
Route::post('/post/newpost',['uses'=>'PostController@publishedpost','as'=>'publishedpost']);
Route::get('post/history',['uses'=>'PostController@history']);