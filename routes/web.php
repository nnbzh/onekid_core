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
            $router->group(['middleware' => 'auth'], function () use ($router) {
                $router->group(['prefix' => 'user'], function () use ($router) {
                    $router->get('', 'UserController@user');
                    $router->group(['prefix' => 'profile'], function () use ($router) {
                        $router->get('', 'UserProfileController@get');
                        $router->post('', 'UserProfileController@create');
                    });
                    $router->group(['prefix' => 'children'], function () use ($router) {
                        $router->get('', 'UserController@children');
                        $router->post('', 'UserController@addChild');
                    });
                });
                $router->group(['prefix' => 'categories'], function () use ($router) {
                    $router->get('', 'CategoryController@list');
                    $router->get('{id:[0-9]+}', 'CategoryController@get');
                });
                $router->get('genders', 'GenderController@list');
            });
        });
    });
});
