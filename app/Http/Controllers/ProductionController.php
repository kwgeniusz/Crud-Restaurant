<?php

namespace restaurant\Http\Controllers;

use Illuminate\Http\Request;
use restaurant\Food;
use restaurant\FoodProduction;

class ProductionController extends Controller
{


    public function index () {
		$foodsProduction = FoodProduction::orderBy('idFood','ASC')->paginate();
		return View('production.index',compact('foodsProduction'));
  }
  
	public function create() {
	    $foods = Food::orderBy('idFood','ASC')->paginate();
		return View('production.create',compact('foods'));
  }

     public function process(Request $request) {
		 
	//validation
		$this->validate($request, [
		   'weightProduction'=>'required|numeric'
		]);
		 //primer paso - actualizar la tabla food restando la cantidad sacada de almacen
		  $food = Food::find($request->idFood);
		  $weightUpdate = $food->weight - $request->weightProduction;
		  $food->weight = $weightUpdate;
		  $food->save();
		 
		 //segundo paso - insertar alimento en produccion OJOO
		 $foodProduction = FoodProduction::find($request->idFood);
		 $weightProduction = $request->weightProduction - $request->merma;  
		  
		 
	
		 if ($foodProduction == null) {    
			//inserta nuevo, sino existe
			$foodProduction = new FoodProduction;
			$foodProduction->idFood = $request->idFood;    
			$foodProduction->quantityProduction = $weightProduction;
			$foodProduction->save();
		} else {
			 //actualiza registro
			 $foodProduction->quantityProduction = $foodProduction->quantityProduction + $weightProduction;
			 $foodProduction->save();
		}
  
		  return redirect()->route('production.index')
		                   ->with('info','La Cantidad de Alimento a Pasado A Produccion');
  }


  public function getWeight($id) {
		
	$foodProduction = FoodProduction::find($id);
	return $foodProduction;
	
}


}
