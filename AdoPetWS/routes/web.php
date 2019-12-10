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

$router->group(['prefix' => 'users'], function($router){
    $router->post('login', 'UsuarioController@login');
    $router->post('signup','UsuarioController@sign');
    #$router->get('usuarios','UsuarioController@getAllUsers');
    $router->get('usuarios/{id}','UsuarioController@getUserById');
    $router->put('usuarios/{id}', 'UsuarioController@update');
    $router->delete('usuarios/{id}', 'UsuarioController@delete');
    $router->get('prueba', 'UsuarioController@prueba');
});

$router->group(['prefix' => 'pets'], function($router){
    $router->get('mascotas','MascotaController@getAllPets');
    $router->get('usuarios/{id}','MascotaController@getPetById');
    $router->put('usuarios/{id}', 'MascotaController@update');
    $router->delete('usuarios/{id}', 'MascotaController@delete');
    $router->get('prueba', 'MascotaController@prueba');
});
