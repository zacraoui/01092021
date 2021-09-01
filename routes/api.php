<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    
    Route::get('getusers','UsersController@getusers');

    Route::get('getusersaction','UserActionsController@getusersaction');
    
    Route::get('gettopics','TopicsController@gettopics');
    
    Route::get('gettests','TestsController@gettests');
    
    Route::get('gettest_answers','TestsController@gettest_answers');
    
    Route::get('getRole','RolesController@getRole');
    
    Route::get('getResult','ResultsController@getResult');
    
    Route::get('getQuestionsOption','QuestionsOptionController@getQuestionsOption');
    
    Route::get('getQuestion','QuestionsController@getQuestion');
    
    Route::get('/home', 'HomeController@index');
    Route::resource('tests', 'TestsController');
    Route::resource('roles', 'RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'UsersController');
    Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_actions', 'UserActionsController');
    Route::resource('topics', 'TopicsController');
    Route::post('topics_mass_destroy', ['uses' => 'TopicsController@massDestroy', 'as' => 'topics.mass_destroy']);
    Route::resource('questions', 'QuestionsController');
    Route::post('questions_mass_destroy', ['uses' => 'QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
    Route::resource('questions_options', 'QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', ['uses' => 'QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
    Route::resource('results', 'ResultsController');
    Route::post('results_mass_destroy', ['uses' => 'ResultsController@massDestroy', 'as' => 'results.mass_destroy']);


});
