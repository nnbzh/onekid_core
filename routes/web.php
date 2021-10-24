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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->group(['prefix' => 'v1'], function () use ($router) {
        $router->group(['namespace' => 'Api\v1'], function () use ($router) {
            $router->post('register', 'AuthController@loginByPhone');
            $router->post('login', 'AuthController@loginByUsername');
            $router->post('verify', 'AuthController@verify');
            $router->post('genders', 'GenderController@list');
            $router->group(['middleware' => 'auth'], function () use ($router) {
                $router->group(['prefix' => 'user'], function () use ($router) {
                    $router->get('', 'UserController@user');
                    $router->post('profile', 'UserProfileController@create');
                    $router->post('children', 'UserProfileController@create');
                });
                $router->get('categories', 'CategoriesController@list');
                $router->get('categories/{id:[0-9]+}', 'CategoriesController@get');
            });


        });
    });
});
