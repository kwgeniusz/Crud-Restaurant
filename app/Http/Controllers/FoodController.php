<?php

namespace restaurant\Http\Controllers;

use Illuminate\Http\Request;
use restaurant\Food;


class FoodController extends Controller
{

  private $weight = '';

    public function index () {
		  $foods = Food::orderBy('idFood','ASC')->paginate();
		  return View('food.index',compact('foods'));
	}
	
    public function create() {
		  return View('food.create');  
	}
	
    public function store(Request $request) {
		
		//validation
		$this->validate($request, [
		   'name'=>'required|string',
		   'type'=>'required|string',
		   'weight'=>'required|numeric',
		   'price'=>'required|numeric',
		
		]);
		
	$food = new Food;
		  
		  
		  $food->name = $request->name;
		  $food->type = $request->type;
		  $food->weight = $request->weight;
		  $food->price = $request->price;
		  $food->save();
		  
		  return redirect()->route('food.index')
		                   ->with('info','El Alimento se Creo');

	}
	
	 public function edit($id) {
		
		  $food = Food::find($id);
		  return View('food.edit',compact('food'));
		  
	}
	 public function update(Request $request,$id) {
		
			//validation
		$this->validate($request, [
		
		   'name'=>'required|string',
		   'type'=>'required|string',
		   'weight'=>'required|numeric',
		   'price'=>'required|numeric',
		]);
		  $food = Food::find($id);
		  
		  $food->name = $request->name;
		  $food->type = $request->type;
		  $food->weight = $request->weight;
		  $food->price = $request->price;
		  $food->save();
		  
		  return redirect()->route('food.index')
		                   ->with('info','El Alimento se actualizo');

	}
	
	 public function destroy($id) {
	
		  $food = Food::find($id);
		  $food->delete();
		  return back()->with('info','El Alimento Fue Eliminado');
		  
	}

  public function getWeight($id) {
		
	$food = Food::find($id);
	return $food;
	
}

}
