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
			<h2>Choose Ingredients for Recipe</h2>
              <form class="">
			  
			  	{{csrf_field()}}
				  <div class="form-group">
					<label for="nameRecipe">Recipe Name:</label>
					<input v-model="nameRecipe" type="text" name="nameRecipe" class="form-control"/>
				   </div>
				
			    <div class="form-group">
               <label for="idFood">Ingredients:</label>
			   <select v-model="idFood" v-on:change="checkWeight(idFood)" class="form-control" name="idFood">
				@foreach($foods as $food)
					 <option value="{{$food->idFood}}">{{$food->name}}</option>
				@endforeach
				</select>
                   </div>
				<!--
				 <div class="form-group">
				 <label for="weight">Peso actual en Disponible:</label>
				 @{{weight}} 
				</div>
			-->
				 <div class="form-group">
				 <label for="requiredQuantity">Required Quantity:</label>
				 <input v-model="requiredQuantity" type="number" name="requiredQuantity" class="form-control"/>
				</div>
				
				 <div class="form-group col-lg-offset-5">
				 <input v-on:click="aggFood(idFood,nameFood,requiredQuantity)" type="button" class="btn btn-lg btn-warning" value="Add Ingredient">
			
				 <button class="btn btn-lg btn-danger" type="button" v-on:click="removeFood(plates)">Remove</button>
				</div>
				
				<table class="table table-hover table-striped">
                    <tr>
						<th>ID</th>
						<th>Ingredient</th>
						<th>Quantity</th>
					</tr>
					<tr v-for="recipes in recipe">
						<td>@{{recipes.id}} </td>
						<td>@{{recipes.name}} </td>
						<td>@{{recipes.peso}} </td>
					</tr>

				 </table>
				 <input v-if="recipe.length >= 2 && nameRecipe.trim()" v-on:click="processRecipe()" type="button" class="btn btn-lg btn-success" value="Create Recipe">
			 </form>
	  
            </div>
        </div>
	
		<div class="col-sm-3">
		 	@include('food.partials.aside')
		</div>
    </div>
</div>
</div>
@endsection
