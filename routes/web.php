<?php

Route::group([
'prefix' => 'admin/clinic',
'as' => 'clinic.'
],function(){
    Route::get('/create', 'Admin\ClinicController@create')->name('create');
    Route::post('/store', 'Admin\ClinicController@store')->name('store');
    Route::get('/', 'Admin\ClinicController@index')->name('index');
});


Route::group([
    'prefix' => 'specialization',
    'as' => 'specialization.'
    ],function(){
        Route::get('/create', 'SpecializationController@create')->name('create');
        Route::post('/store', 'SpecializationController@store')->name('store');
        Route::get('/', 'Admin\SpecializationController@index')->name('index');
    });

Route::group([
    'prefix' => 'doctor',
    'as' => 'doctor.'
    ],function(){
        Route::get('/create', 'DoctorController@create')->name('create');
        Route::post('/store', 'DoctorController@store')->name('store');
    });


Route::get('clinics', 'ClinicController@index')->name('clinics');


Route::get('/find','FindController@find');
Route::get('/find/create','FindController@create');
Route::post('/find/store','FindController@store');
Route::post('/find/find_result','FindController@find_result');


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

Route::get('therapists/create', 'TherapistController@create');//->middleware('auth-admin');
Route::post('therapists', 'TherapistController@store');

Route::get('questions', 'QuestionController@index')->name('questions')->middleware('auth'); // getting patient's questions for them
Route::post('questions/{id}/replies', 'QuestionReplyController@store')->middleware('auth');

// Route::get('clinics', 'ClinicController@index');
// Route::get('clinics/create', 'ClinicController@create');
// Route::post('clinics', 'ClinicController@store');

Route::get('admin/users', 'Admin\UserController@index');
Route::get('admin/users/create', 'Admin\UserController@create');
Route::post('admin/users', 'Admin\UserController@store')->name('store');
Route::get('admin/home', 'Admin\HomeController@index');
Route::get('admin/edit/{id}', 'Admin\UserController@edit')->name('user-edit');
Route::patch('admin/{id}', 'Admin\UserController@update');//->name('user-update');
Route::get('admin/delete/{id}', 'Admin\UserController@delete')->name('user-delete');

// contact form
//   Route::get('/contact', 'ContactUSController@contactUS' );
  Route::post('/contact', 'ContactUSController@contactSaveData')->name('contactus');

