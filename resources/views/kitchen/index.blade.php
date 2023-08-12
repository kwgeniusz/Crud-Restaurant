@extends('layouts.app')

@section('content')
<div id="vueApp">
<div class="container">
    <div class="row">
	
	
        <div class="col-md-8 col-md-offset-1">
			@include('food.partials.error')
		    <a href=" {{Route('home') }} " class="btn btn-info pull-right">Return</a>
            <div class="panel panel-default">
			<br><br>
			<h2>Select the Plate you want to prepare </h2>
              <form class="">
			  
			  	{{csrf_field()}}
				
			    <div class="form-group">
               <label for="idFoodProduction">Consult Availability in Production:</label>
			   <select v-model="idFoodProduction" v-on:change="checkWeightProduction(idFoodProduction)" class="form-control" name="idFoodProduction">
				@foreach($foodsProduction as $foodProduction)
					 <option value="{{$foodProduction->idFood}}">{{$foodProduction->foods->name}}</option>
				@endforeach                                      
				</select>
                   </div>
		
				 <div class="form-group">
				 <label for="weight">Current Weight in Production:</label>
				 @{{quantityProduction}} 
				</div>
			<hr>
			<div class="form-group">
				<label for="idRecipe">Recipes Availables:</label>
				<select v-model="idRecipe" class="form-control" name="idRecipe">
				 @foreach($recipes as $recipe)
					  <option value="{{$recipe->idRecipe}}">{{$recipe->name}}</option>
				 @endforeach                                      
				 </select>
			</div>
				
				 <div class="form-group col-lg-offset-5">
				 <input v-on:click="searchRecipeDetails(idRecipe)" type="button" class="btn btn-lg btn-success" value="Select Plate">
			
				 <button class="btn btn-lg btn-danger" type="button" v-on:click="removePlate()">Remove Plate</button>
				</div>
				
				<table class="table table-hover table-striped">
                    <tr>
						<th>ID</th>
						<th>Ingredient</th>
						<th>Required Quantity</th>
						<th>Availability</th>
					</tr>
					<tr v-for="recipes in recipe">
						<td>@{{recipes.id}} </td>
						<td>@{{recipes.name}} </td>
						<td>@{{recipes.peso}} </td>
						<td>@{{recipes.existencia}} </td>
					</tr>

				 </table>
				 <input v-if="buttonPlate" v-on:click="processPlate()" type="button" class="btn btn-lg btn-success" value="Create Plate to Customer">
			 </form>
	  
            </div>
        </div>
	
		<div class="col-sm-3">
		 	
 <p class="alert alert-info">
    Here the plates (recipes) are prepared, to serve them at the tables and associate them with Customers
 </p>

		</div>
    </div>
</div>
</div>
@endsection
