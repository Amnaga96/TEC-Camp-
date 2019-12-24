<?php

/*
// Admin
// Patient (User)
// Consulter
// Clinic
// Message
// Article
*/

Route::group([
'prefix' => 'clinic',
'as' => 'clinic.'
],function(){
    Route::get('/create', 'ClinicController@create')->name('create');
    Route::post('/store', 'ClinicController@store')->name('store');
});


Route::group([
    'prefix' => 'specialization',
    'as' => 'specialization.'
    ],function(){
        Route::get('/create', 'SpecializationController@create')->name('create');
        Route::post('/store', 'SpecializationController@store')->name('store');
    });

Route::group([
    'prefix' => 'doctor',
    'as' => 'doctor.'
    ],function(){
        Route::get('/create', 'DoctorController@create')->name('create');
        Route::post('/store', 'ClinicController@store')->name('store');
    });


Route::get('doctors', 'DoctorController@index')->name('doctors');


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

Route::get('therapists/create', 'TherapistController@create');//->middleware('auth-admin');
Route::post('therapists', 'TherapistController@store');

Route::get('questions', 'QuestionController@index')->name('questions')->middleware('auth'); // getting patient's questions for them
Route::post('questions/{id}/replies', 'QuestionReplyController@store')->middleware('auth');

// Route::get('clinics', 'ClinicController@index');
// Route::get('clinics/create', 'ClinicController@create');
// Route::post('clinics', 'ClinicController@store');

Route::get('admin/users', 'Admin\UserController@index');
Route::get('admin/users/create', 'Admin\UserController@create');
Route::post('admin/users', 'Admin\UserController@store');
Route::get('admin', 'Admin\HomeController@index');
