<?php

namespace restaurant\Http\Controllers;

use Illuminate\Http\Request;
use restaurant\FoodProduction;
use restaurant\Recipe;
use restaurant\Plate;

class KitchenController extends Controller
{
    public function index () {
		
        $foodsProduction = FoodProduction::orderBy('idFood','ASC')->paginate();
        $recipes = Recipe::orderBy('idRecipe','ASC')->paginate();
        return View('kitchen.index',compact('foodsProduction','recipes'));

  }
  // agregar consulta para traer los platos y solicitar
    public function getRecipeDetails($id) {


            $recipes= Recipe::find($id);
            foreach ($recipes->foods as $recipesDetails) {
              //Hare una consulta para verificar que existe la cantidad solicitada en produccion de cada ingrediente
              $foodsProduction = FoodProduction::where('idFood', '=', $recipesDetails->idFood)->get();
                  foreach ($foodsProduction as $foodProduction) {
                    if ($recipesDetails->pivot->quantity <= $foodProduction->quantityProduction){
                           $recipesDetails->existencia = TRUE;
                    }else{
                           $recipesDetails->existencia = FALSE;
                    
                    }

                }
            }
            return $recipes->foods;

    
   /*
            echo $recipes->idRecipe;
             echo $recipes->name;
           foreach ($recipes->foods as $recipesDetails) {
            echo $recipesDetails->idFood;
            echo $recipesDetails->name;
            echo $recipesDetails->pivot->quantity;
           }
     */   
        
  } //cierre segunda funcion

  public function create(Request $request) {
        
    $plate = new Plate; 
    $plate->idRecipe = $request->idRecipe;
    $plate->save();
   
     foreach ($request->recipe as $recipeDetails){ 
        $FoodProduction = FoodProduction::find($recipeDetails['id']);
        $FoodProduction->quantityProduction = $FoodProduction->quantityProduction - $recipeDetails['peso'];
        $FoodProduction->save();
          
     }

    
  }
} //cierre de la clase
