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
Route::post('/find/store','FindController@store');
Route::post('/find/find_result','FindController@find_result');


// Route::get('/ask', 'AskController@ask');
Route::get('/', 'PagesController@index');
Route::get('/ask', 'QuestionController@create')->middleware('auth');
Route::post('/ask', 'QuestionController@store')->middleware('auth');
Route::get('/questions/{qid}/show', 'QuestionController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('therapists', 'TherapistController@index'); // this is a page to show consulters for users
Route::get('therapists/create', 'TherapistController@create');//->middleware('auth-admin');
Route::post('therapists', 'TherapistController@store');

Route::get('questions', 'QuestionController@index')->middleware('auth'); // getting patient's questions for them
Route::post('questions/{id}/replies', 'QuestionReplyController@store')->middleware('auth');

// Route::get('clinics', 'ClinicController@index');
// Route::get('clinics/create', 'ClinicController@create');
// Route::post('clinics', 'ClinicController@store');

Route::get('admin/users', 'Admin\UserController@index');
Route::get('admin/users/create', 'Admin\UserController@create');
Route::post('admin/users', 'Admin\UserController@store')->name('store');
Route::get('admin', 'Admin\HomeController@index');
Route::get('admin/edit/{id}', 'Admin\UserController@edit')->name('user-edit');
Route::get('admin/delete/{id}', 'Admin\UserController@delete')->name('user-delete');
