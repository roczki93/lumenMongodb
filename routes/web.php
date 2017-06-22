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
    return $app->version();
});
$app->get('article','ArticleController@index');
$app->post('article','ArticleController@createArticle');


$app->get('tutaj','MealController@index');

$app->post('tutaj','MealController@createMeal');
$app->get('/nic', function () 
{
    $user = Testmongodb::all();
    print_r($user);
});
