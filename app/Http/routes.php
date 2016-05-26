<?php

Route::get('/',['uses'=>'PostController@index']);
Route::get('/post/newpost',['uses'=>'PostController@newpost']);
Route::post('/post/newpost',['uses'=>'PostController@publishedpost','as'=>'publishedpost']);
Route::get('post/history',['uses'=>'PostController@history']);
Route::post('post/showeditpost',['uses'=>'PostController@showeditpost']);
Route::post('post/delete',['uses'=>'PostController@delete']);
Route::post('post/editpost',['uses'=>'PostController@editpost']);
Route::post('post/addcomment',['uses'=>'CommentController@addcomment', 'as'=>'addcomment']);
Route::any('post/{id}',['uses'=>'PostController@selectpost']);
