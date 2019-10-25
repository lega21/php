<?php

use \Illuminate\Support\Facades\Route;

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

$router->get('/region', 'RegionController@index');
$router->get('/region/{id}', 'RegionController@show');
$router->post('/region', 'RegionController@create');
$router->put('/region/{id}', 'RegionController@update');
$router->delete('/region/{id}', 'RegionController@destroy');

