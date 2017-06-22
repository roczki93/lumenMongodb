<?php

$app->get('api/v1/article','ArticleController@index');
$app->get('api/v1/article/{id}','ArticleController@getArticle');
$app->post('api/v1/article','ArticleController@createArticle');
$app->put('api/v1/article/{id}','ArticleController@updateArticle');
$app->delete('api/v1/article/{id}','ArticleController@deleteArticle');

