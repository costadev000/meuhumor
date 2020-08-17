<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api', 'middleware' => 'autenticador'], function() use ($router){
    $router->group(['prefix' => 'questions'], function() use ($router){
        $router->get('', 'QuestionsController@index');
        $router->post('', 'QuestionsController@store');
        $router->get('{id}', 'QuestionsController@show');
        $router->put('{id}', 'QuestionsController@update');
        $router->delete('{id}', 'QuestionsController@delete');
    });
    $router->group(['prefix' => 'moments'], function() use ($router){
        $router->get('', 'MomentsController@index');
        $router->post('', 'MomentsController@store');
        $router->get('{id}', 'MomentsController@show');
        $router->put('{id}', 'MomentsController@update');
        $router->delete('{id}', 'MomentsController@delete');
    });
    $router->group(['prefix' => 'questions'], function() use ($router){
        $router->get('', 'QuestionsController@index');
        $router->post('', 'QuestionsController@store');
        $router->get('{id}', 'QuestionsController@show');
        $router->put('{id}', 'QuestionsController@update');
        $router->delete('{id}', 'QuestionsController@delete');
    });
    $router->group(['prefix' => 'tasks'], function() use ($router){
        $router->get('', 'TasksController@index');
        $router->post('', 'TasksController@store');
        $router->get('{id}', 'TasksController@show');
        $router->put('{id}', 'TasksController@update');
        $router->delete('{id}', 'TasksController@delete');
    });
    $router->group(['prefix' => 'user'], function () use($router){
        $router->get('{id}', 'UsersController@show');
        $router->put('{id}', 'UsersController@update');
    });
});

$router->post('/api/login', 'TokenController@gerarToken');
$router->post('/api/refreshToken', 'TokenController@refreshToken');
$router->post('/api/user/', 'UsersController@newUser');

