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
Route::get('/questions/{qid}/show', 'QuestionController@show');

 //Articles Routes!    
 Route::get('/blog', 'ArticleController@index'); // showa the ganeral blog page
 Route::get('/create-article', 'ArticleController@create'); //create a new article
 Route::post('/create-article', 'ArticleController@store'); //store a new article
 Route::get('/article/{a_id}', 'ArticleController@show')->name('show'); //show an article
 Route::get('article/{a_id}/edit', 'ArticleController@edit'); //edit an article
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('therapists', 'TherapistController@index'); // this is a page to show consulters for users
Route::get('therapists/create', 'TherapistController@create')->middleware('auth-admin');
Route::post('therapists', 'TherapistController@store');

Route::get('questions', 'QuestionController@index')->middleware('auth'); // getting patient's questions for them
Route::post('questions/{id}/replies', 'QuestionReplyController@store')->middleware('auth');

// Route::get('clinics', 'ClinicController@index');
// Route::get('clinics/create', 'ClinicController@create');
// Route::post('clinics', 'ClinicController@store');
