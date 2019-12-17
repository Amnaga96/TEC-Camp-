<?php

/*
// Admin
// Patient (User)
// Consulter
// Clinic
// Message
// Article
*/

Route::get('/find','FindController@find');
// Route::get('/ask', 'AskController@ask');
Route::get('/', 'PagesController@index');
Route::get('/ask', 'QuestionController@create')->middleware('auth');
Route::post('/ask', 'QuestionController@store')->middleware('auth');
Route::get('/questions', 'QuestionController@index');
Route::get('/questions/{qid}/show', 'QuestionController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('consulters', 'ConsulterController@index');
