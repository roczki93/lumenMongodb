<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
//use Jenssegers\Mongodb\Http\Request;


class ArticleController extends Controller
{
   
    public function index()
    {
	$articles = Article::all();
	return response()->json($articles);
     //
    }

    public function createArticle(Request $request){
	$article = Article::create($request->all());
	
	return response()->json($article);
    }
    //
}



