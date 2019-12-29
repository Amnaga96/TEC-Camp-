<?php

Route::post('patient/register', 'API\PatientRegisterController@register');

Route::post('/login', 'API\LoginController@login');



    Route::post('user/auth/login', 'API\user\AuthController@login');
    Route::post('user/auth/logout', 'API\user\AuthController@logout');//->middleware('auth:api');
    //Route::post('user/auth/refresh', 'AuthController@refresh');
    Route::get('user/auth/me', 'API\user\AuthController@me');//->middleware('auth:api');
   