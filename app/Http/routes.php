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

$app->get('/', function () use ($app) {
    return $app->welcome();
});


$app->group(['prefix' => 'fellows'], function ($app){
    $app->get('/', 'App\Http\Controllers\FellowsController@index');
    $app->get('/{fellowId}', 'App\Http\Controllers\FellowsController@show');
});