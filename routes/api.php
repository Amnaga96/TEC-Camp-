<?php


// Route::get('/blog', 'API\ArticleController@index');
// Route::get('/article/{a_id}', 'API\ArticleController@show');
// // Route::post('patient/register', 'API\PatientRegisterController@register');

// Route::post('/login', 'API\LoginController@login');


Route::get('/find-therapist','API\FindTherapistController@index');
Route::post('patient/register', 'API\PatientRegisterController@create');

<<<<<<< HEAD
Route::post('user/auth/login', 'API\user\AuthController@login');
Route::post('user/auth/logout', 'API\user\AuthController@logout') ->middleware('auth:api');
Route::post('user/auth/refresh', 'API\user\AuthController@refresh');
Route::get('user/auth/me', 'API\user\AuthController@me');//->middleware('auth:api');
=======
// Route::post('/login', 'API\LoginController@login');
// +
Route::post('user/auth/login', 'Api\AuthController@login');
Route::post('user/auth/logout', 'Api\AuthController@logout') ->middleware('auth:api');
// Route::post('user/auth/refresh', 'AuthController@refresh');
Route::get('user/auth/me', 'Api\AuthController@me');//->middleware('auth:api');

Route::get('/questions', 'Api\QuestionController@index');  // getting patient's questions for them
Route::post('/questions', 'Api\QuestionController@store');
Route::get('/questions/{qid}', 'Api\QuestionController@show');

Route::post('/questions/{qid}/replies', 'Api\QuestionReplyController@store');
>>>>>>> 994f80ce0bc41dfe01f18de163c7b8061663cf95


