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

$router->get('/barang', [
    'as' => 'barang', 'uses' => 'BarangController@index'
]);

$router->post('/barang/add', [
    'as' => 'add', 'uses' => 'BarangController@add'
]);

$router->get('/key', function() {
    return str_random(32);
});
