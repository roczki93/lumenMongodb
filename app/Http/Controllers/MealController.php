<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Meal;
//use Jenssegers\Mongodb\Http\Request;


class MealController extends Controller
{
   
    public function index()
    {
	$meals = Meal::all();
	return response()->json($meals);
     //
    }

    public function createMeal(Request $request){
	$meal = Meal::create($request->all());
	
	return response()->json($meal);
    }
    //
}



