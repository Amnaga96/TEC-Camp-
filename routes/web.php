<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/find','FindController@find');
// Route::get('/ask', 'AskController@ask');
Route::get('/', 'PagesController@index');
Route::get('/ask', 'QuestionController@create');
Route::post('/ask', 'QuestionController@store');
Route::get('/questions', 'QuestionController@index');
Route::get('/questions/{qid}/show', 'QuestionController@show');
