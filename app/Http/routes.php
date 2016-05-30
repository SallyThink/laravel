<?php
$router->pattern('id', '[0-9]+');// паттерн для всего {id}

Route::get('/',['uses'=>'PostController@index']);

Route::group(['prefix' => 'post','middleware'=>'auth'], function()
{

    Route::get('/newpost',['uses'=>'PostController@newpost']);
    Route::post('/newpost',['uses'=>'PostController@publishedpost','as'=>'publishedpost']);
    Route::get('/history',['uses'=>'PostController@history']);
    Route::post('/showeditpost/{post}',['uses'=>'PostController@showeditpost']);
    Route::post('/delete',['uses'=>'PostController@delete']);
    Route::post('/editpost',['uses'=>'PostController@editpost']);
    Route::post('/addcomment',['uses'=>'CommentController@addcomment', 'as'=>'addcomment']);
    Route::any('/{id}',['uses'=>'PostController@selectpost']);

});

Route::auth();

Route::get('/home', 'HomeController@index');

