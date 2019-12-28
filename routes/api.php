<?php

Route::get('/questions', 'API\QuestionController@index');
Route::post('/questions', 'API\QuestionController@store');
Route::get('/questions/{qid}', 'API\QuestionController@show');

Route::post('/questions/{qid}/replies', 'API\QuestionReplyController@store');


