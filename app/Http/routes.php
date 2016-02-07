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
$app->post('/new', 'ButtonController@store');

$app->get('/b/{name}', 'ButtonController@show');
$app->post('/b/{name}', 'ButtonController@show');

$app->get('/p/{name}', 'ButtonController@password');
$app->post('/p/{name}', 'ButtonController@passwordValidate');

$app->get('/find', 'ButtonController@find');
$app->post('/find', 'ButtonController@search');