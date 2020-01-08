<?php

<<<<<<< HEAD
Route::get('/blog', 'API\ArticleController@index');
Route::get('/article/{a_id}', 'API\ArticleController@show');
=======
Route::post('patient/register', 'API\PatientRegisterController@register');

Route::post('/login', 'API\LoginController@login');



    Route::post('user/auth/login', 'API\user\AuthController@login');
    Route::post('user/auth/logout', 'API\user\AuthController@logout') ->middleware('auth:api');
    //Route::post('user/auth/refresh', 'AuthController@refresh');
    Route::get('user/auth/me', 'API\user\AuthController@me');//->middleware('auth:api');
   
Route::get('/questions', 'API\QuestionController@index');
Route::post('/questions', 'API\QuestionController@store');
Route::get('/questions/{qid}', 'API\QuestionController@show');

Route::post('/questions/{qid}/replies', 'API\QuestionReplyController@store');


>>>>>>> 340234506b00dcd08571c4e1b5cee446093670ea
