<?php
$router->pattern('id', '[0-9]+');// паттерн для всего {id}

Route::get('/',['uses'=>'PostController@index']);

Route::group(['prefix' => 'post'], function()
{

    Route::get('/newpost',['uses' => 'PostController@newpost']);
    Route::post('/newpost',['uses' => 'PostController@publishedpost','as'=>'publishedpost']);
    Route::get('/history',['uses' => 'PostController@history']);
    Route::post('/showeditpost/{post}',['uses' => 'PostController@showeditpost','as'=>'showeditpost']);
    Route::post('/delete',['uses' => 'PostController@delete']);
    Route::post('/editpost/{post}',['uses' => 'PostController@editpost']);
    Route::post('/addcomment',['uses' => 'CommentController@addcomment', 'as'=>'addcomment']);
    Route::any('/{id}',['uses' => 'PostController@selectpost']);

});

Route::get('/profile',['uses' => 'ProfileController@profile']);
Route::any('/profile/save',['uses' => 'ProfileController@save', 'as' => 'saveprofile']);

Route::auth();

Route::get('/home', 'HomeController@index');

