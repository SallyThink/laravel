<?php

Route::any('/{one}/{two}/{three}','menu@main');
Route::any('result-{numb}',['uses'=>'menu@result', 'as'=>'result']);
