<?php

namespace restaurant\Http\Controllers;

use Illuminate\Http\Request;
use restaurant\Food;
use restaurant\Recipe;
use restaurant\RecipeDetails;

class RecipeController extends Controller
{
    public function index () {
		
        $foods = Food::orderBy('idFood','ASC')->paginate();
        return View('recipe.index',compact('foods'));
        
  }
    public function create(Request $request) {
        
        $recipe = new Recipe; 
        $recipe->name = $request->nameRecipe;
        $recipe->save();
        $lastId = $recipe->idRecipe;
       

         foreach ($request->recipe as $result){ 
            $recipeDet = new RecipeDetails; 
            $recipeDet->idRecipe = $lastId ;
            $recipeDet->idFood = $result['id'];
            $recipeDet->quantity = $result['peso'];
            $recipeDet->save();
              
         }

        
        }

}
