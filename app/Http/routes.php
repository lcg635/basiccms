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

$app->get('/', function () use ($app)
{
	return view('admin/admin_template');
});

$app->group(['prefix'=>'admin', 'namespace'=>'App\Http\Controllers\Admin'], function($app)
{
	$app->get('/articles', 'ArticleController@manage');
	$app->get('/articles/edit/{id}', 'ArticleController@edit');
	$app->post('/articles/edit/{id}', 'ArticleController@save');
	$app->get('/articles/delete/{id}', 'ArticleController@delete');
});