<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PollController@index');

$router->group(['prefix' => '/poll'], function () use ($router) {
    $router->get('/', 'PollController@register');
    $router->post('/', 'PollController@store');
    $router->get('/{id}', 'PollController@show');
    $router->post('/{id}/vote', 'PollController@vote');
});
