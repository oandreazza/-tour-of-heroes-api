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


$app->get('heroes',['as' => 'heroes.index', 'uses' => 'HeroesController@index']);
$app->get('heroes/{id}',['as' => 'heroes.edit', 'uses' => 'HeroesController@edit']);
$app->post('heroes/save',['as' => 'heroes.save', 'uses' => 'HeroesController@save']);
$app->post('heroes/update',['as' => 'heroes.update', 'uses' => 'HeroesController@update']);
$app->options('heroes/{id}',['as' => 'heroes.delete', 'uses' => 'HeroesController@delete']);
$app->delete('heroes/{id}',['as' => 'heroes.delete', 'uses' => 'HeroesController@delete']);
