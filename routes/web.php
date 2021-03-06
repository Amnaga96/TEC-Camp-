<?php


Route::group([
'prefix' => 'admin/clinic',
'as' => 'clinic.'
],function(){
    Route::get('/create', 'Admin\ClinicController@create')->name('create')->middleware('auth-admin');
    Route::post('/store', 'Admin\ClinicController@store')->name('store')->middleware('auth-admin');
    Route::get('/', 'Admin\ClinicController@index')->name('index')->middleware('auth-admin');
    Route::get('/page', 'Admin\ClinicController@page')->name('page')->middleware('auth-admin');
    Route::get('/delete/{id}', 'Admin\ClinicController@destroy')->name('delete')->middleware('auth-admin');
    Route::get('/edit/{id}', 'Admin\ClinicController@edit')->name('edit')->middleware('auth-admin');
    Route::patch('/{id}', 'Admin\ClinicController@update')->name('update')->middleware('auth-admin');


});


Route::group([
    'prefix' => 'admin/specialization',
    'as' => 'specialization.'
    ],function(){
        Route::get('/create', 'Admin\SpecializationController@create')->name('create')->middleware('auth-admin');
        Route::post('/store', 'Admin\SpecializationController@store')->name('store');
        Route::get('/', 'Admin\SpecializationController@index')->name('index')->middleware('auth-admin');
        Route::get('/page', 'Admin\SpecializationController@page')->name('page')->middleware('auth-admin');
        Route::get('/{id}', 'Admin\SpecializationController@destroy')->name('delete')->middleware('auth-admin');
    });

Route::group([
    'prefix' => 'admin/doctor',
    'as' => 'doctor.'
    ],function(){
        Route::get('/create', 'Admin\DoctorController@create')->name('create')->middleware('auth');
        Route::post('/store', 'Admin\DoctorController@store')->name('store');
        Route::get('/', 'Admin\DoctorController@index')->name('index')->middleware('auth-admin');
        Route::get('/page', 'Admin\DoctorController@page')->name('page')->middleware('auth-admin');
        Route::get('/edit/{id}', 'Admin\DoctorController@edit')->name('edit');
        Route::patch('/{id}', 'Admin\DoctorController@update')->name('update')->middleware('auth-admin');
        Route::get('/delete/{id}', 'Admin\DoctorController@destroy')->name('delete')->middleware('auth-admin');



    });


    Route::group([
        'prefix' => 'admin/area',
        'as' => 'area.'
        ],function(){
            Route::get('/create', 'Admin\AreaController@create')->name('create')->middleware('auth-admin');
            Route::post('/store', 'Admin\AreaController@store')->name('store');
            Route::get('/', 'Admin\AreaController@index')->name('index')->middleware('auth-admin');
            Route::get('/page', 'Admin\AreaController@page')->name('page')->middleware('auth');
            Route::get('/edit/{id}', 'Admin\AreaController@edit')->name('edit')->middleware('auth-admin');
            Route::patch('/{id}','Admin\AreaController@update')->name('update');
            Route::get('/delete/{id}', 'Admin\AreaController@destroy')->name('delete')->middleware('auth-admin');
        });

            Route::group([
            'prefix' => '/find',
            'as' => 'find.'
            ],function(){
                Route::post('/','FindController@index')->name('index');
                Route::get('/','FindController@show')->name('find');
            });
            Route::get('clinics', 'ClinicController@index')->name('clinics')->middleware('auth');
<<<<<<< HEAD

            Route::post('/find/find_result','FindController@find_result')->middleware('auth');
=======
            Route::post('/find/find_result','FindController@find_result');
>>>>>>> 779204156b26b390c6575170401bf5c6b09d19c6

 //Articles Routes!
 
            Route::group([
            'prefix' => 'articles',
             'as' => 'article.'
            ], function () {
            Route::get('/blog', 'ArticleController@index'); // showa the ganeral blog page
            Route::get('/create-article', 'ArticleController@create')->middleware('auth-admin');//create a new article
            Route::post('/create-article', 'ArticleController@store')->middleware('auth-admin'); //store a new article
            Route::get('/article/{a_id}', 'ArticleController@show')->name('show'); //show an article
            Route::get('/article/edit/{a_id}', 'ArticleController@edit')->middleware('auth-admin'); //to edit an article
            Route::patch('/article/{a_id}', 'ArticleController@update')->middleware('auth-admin');
            Route::get('article/delete/{a_id}', 'ArticleController@delete')->name('destroy')->middleware('auth-admin'); //to delete an article

            });

Auth::routes();


/////////////////////////////////////////////////////////////////////////////////////////////////

// Route::get('/ask', 'AskController@ask');
Route::get('/', 'PagesController@index'); // home page

Route::get('/ask',                      'QuestionController@create')->middleware('auth');  
Route::post('/ask',                     'QuestionController@store');                            
Route::get('/questions/{qid}/show',     'QuestionController@show')->middleware('auth');
Route::get('questions',                 'QuestionController@index')->name('questions')->middleware('auth'); // getting patient's questions for them
Route::post('questions/{id}/replies',   'QuestionReplyController@store')->middleware('auth');



// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth'); un wanted dashboard


// Route::get('clinics', 'ClinicController@index');
// Route::get('clinics/create', 'ClinicController@create');
// Route::post('clinics', 'ClinicController@store');

Route::get('admin/users',        'Admin\UserController@index')->middleware('auth-auth-admin');
Route::get('admin/users/create', 'Admin\UserController@create')->middleware('auth-auth-admin');
Route::post('admin/users',       'Admin\UserController@store')->name('store')->middleware('auth-auth-admin');
Route::get('admin/home',         'Admin\HomeController@index')->middleware('auth-auth-admin');
Route::get('admin/edit/{id}',    'Admin\UserController@edit')->name('user-edit')->middleware('auth-admin');
Route::patch('admin/{id}',       'Admin\UserController@update');//->name('user-update');
Route::get('admin/delete/{id}',  'Admin\UserController@delete')->name('user-delete')->middleware('auth-admin');
// Route::get('therapists/create', 'TherapistController@create')->middleware('auth-admin');
// Route::post('therapists',       'TherapistController@store');


// contact form
//   Route::get('/contact',  'ContactUSController@contactUS' );
  Route::post('/contact', 'MessageController@contactSaveData')->name('contactus');  // don't work

