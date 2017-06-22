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
$app->get('api/v1/article','ArticleController@index');
$app->get('api/v1/article/{id}','ArticleController@getArticle');
$app->post('api/v1/article','ArticleController@createArticle');
$app->put('api/v1/article/{id}','ArticleController@updateArticle');
$app->delete('api/v1/article/{id}','ArticleController@deleteArticle');



$app->get('tutaj','MealController@index');

$app->post('tutaj','MealController@createMeal');
$app->get('/nic', function () 
{
    $user = Testmongodb::all();
    print_r($user);
});
