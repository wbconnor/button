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

$app->get('/', 'IndexController@index');

$app->get('/new', 'ButtonController@create');

$app->get('/{name}', 'ButtonController@show');

$app->get('/find', 'ButtonController@find');
$app->post('/find', 'ButtonController@search');