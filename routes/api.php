<?php

Route::get('/blog', 'API\ArticleController@index');
Route::get('/article/{a_id}', 'API\ArticleController@show');
