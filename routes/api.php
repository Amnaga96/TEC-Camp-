<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

// Route::get('/blog', 'API\ArticleController@index');
// Route::get('/article/{a_id}', 'API\ArticleController@show');
// // Route::post('patient/register', 'API\PatientRegisterController@register');

// Route::post('/login', 'API\LoginController@login');


// Route::get('/find-therapist','API\FindTherapistController@index');
// Route::post('patient/register', 'API\PatientRegisterController@register');

// Route::post('/login', 'API\LoginController@login');
// +
Route::post('user/auth/login', 'Api\AuthController@login');
Route::post('user/auth/logout', 'Api\AuthController@logout') ->middleware('auth:api');
// Route::post('user/auth/refresh', 'AuthController@refresh');
Route::get('user/auth/me', 'Api\AuthController@me');//->middleware('auth:api');

Route::get('/questions', 'Api\QuestionController@index');
Route::post('/questions', 'Api\QuestionController@store');
Route::get('/questions/{qid}', 'Api\QuestionController@show');

Route::post('/questions/{qid}/replies', 'Api\QuestionReplyController@store');


