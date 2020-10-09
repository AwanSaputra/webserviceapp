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
    return "hello world!";
});

$router->post('/login',['uses'=>'AuthController@login','as'=>'login']);
$router->get('/articles',['uses'=>'ArticleController@index','as'=>'articles']);
$router->post('/create',['uses'=>'ArticleController@create','as'=>'create']);
$router->put('/update/{id}',['uses'=>'ArticleController@update','as'=>'update']);
$router->delete('/delete/{id}',['uses'=>'ArticleController@delete','as'=>'delete']);
