<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

// unsecure routes
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users1',['uses' => 'UserController@getUsers']);
});

// more simple routes
$router->get('/users1', 'UserController@index'); // get all users records
$router->post('/users1', 'UserController@addUser'); // create new user record
$router->get('/users1/{id}', 'UserController@show'); // get user by id
$router->put('/users1/{id}', 'UserController@update'); // update user record
$router->patch('/users1/{id}', 'UserController@update'); // update user record
$router->delete('/users1/{id}', 'UserController@delete'); // delete record

// userjob routes
$router->get('/usersjob', 'UserJobController@index');
$router->get('/usersjob/{id}', 'UserJobController@show'); // get user by id