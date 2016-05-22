<?php

Route::any('/{one}/{two}/{three}','menu@main');
Route::any('result-{numb}',['uses'=>'menu@result', 'as'=>'result']);
Route::any('/',['uses'=>'MainPageController@mainpage']);
Route::any('/index',['uses'=>'MainPageController@index']);
Route::any('{q}',['uses'=>'MainPageController@four']);
