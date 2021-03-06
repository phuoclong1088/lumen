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

$router->get('foo', function () {
    return 'Hello World';
});

$router->get('user[/{name}]', function ($name = null) {
    return $name;
});

$router->get('profile', ['as' => 'profile', function () {
    //
}]);


$router->get('/todos', "TodoController@index");
$router->post('/todos', "TodoController@store");
$router->post('/todos/delete', "TodoController@delete");
$router->post('/todos/complete', "TodoController@complete");
