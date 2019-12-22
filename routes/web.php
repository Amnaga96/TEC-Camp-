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
Route::get('/find/create','FindController@create');
Route::get('/find/store','FindController@store');

// Route::get('/ask', 'AskController@ask');
Route::get('/', 'PagesController@index');
Route::get('/ask', 'QuestionController@create')->middleware('auth');
Route::post('/ask', 'QuestionController@store')->middleware('auth');
Route::get('/questions/{qid}/show', 'QuestionController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('therapists', 'TherapistController@index'); // this is a page to show consulters for users
// create
// store

Route::get('questions', 'QuestionController@index')->middleware('auth'); // getting patient's questions for them
Route::post('questions/{id}/replies', 'QuestionReplyController@store')->middleware('auth');
