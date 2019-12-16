<?php

Route::group(['namespace' => 'Consulter'], function() {
    Route::get('/', 'HomeController@index')->name('consulter.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('consulter.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('consulter.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('consulter.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('consulter.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('consulter.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('consulter.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('consulter.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('consulter.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('consulter.verification.verify');

    Route::get('messages', 'MessageController@index');
});
