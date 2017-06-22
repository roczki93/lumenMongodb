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
    public function getArticle($id){
  
        $article  = Article::find($id);
  
        return response()->json($article);
    }
    public function createArticle(Request $request){
	$article = Article::create($request->all());
	
	return response()->json($article);
    }

    public function deleteArticle($id){
        $article  = Article::find($id);
        $article->delete();
 
        return response()->json('deleted');
    }
    public function updateArticle(Request $request,$id){
        $article  = Article::find($id);
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->coment = $request->input('coment');
        $article->short = $request->input('short');
        $article->save();
  
        return response()->json($article);
    }
    //
}



