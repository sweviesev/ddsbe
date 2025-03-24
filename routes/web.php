<?php
/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users', 'UserController1@getUsers'); // Get all users
    $router->post('/users', 'UserController1@add'); // Create user
    $router->get('/users/{id}', 'UserController1@show'); // Get user by ID
    $router->put('/users/{id}', 'UserController1@update'); // Update user
    $router->delete('/users/{id}', 'UserController1@delete'); // Delete user
});
