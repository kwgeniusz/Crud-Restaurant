@extends('layouts.app')

@section('content')
<div id="vueApp">
<div class="container">
    <div class="row">
	
	
        <div class="col-md-8 col-md-offset-1">
			@include('food.partials.error')
		    <a href=" {{Route('home') }} " class="btn btn-info pull-right">Menu Principal</a>
            <div class="panel panel-default">
			<br><br>
			<h2>Elige Ingredientes Para Receta</h2>
              <form class="">
			  
			  	{{csrf_field()}}
				  <div class="form-group">
					<label for="nameRecipe">Nombre de la Receta:</label>
					<input v-model="nameRecipe" type="text" name="nameRecipe" class="form-control"/>
				   </div>
				
			    <div class="form-group">
               <label for="idFood">Ingredientes:</label>
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
				 <label for="requiredQuantity">Cantidad Requerida:</label>
				 <input v-model="requiredQuantity" type="number" name="requiredQuantity" class="form-control"/>
				</div>
				
				 <div class="form-group col-lg-offset-5">
				 <input v-on:click="aggFood(idFood,nameFood,requiredQuantity)" type="button" class="btn btn-lg btn-warning" value="Agregar Ingrediente">
			
				 <button class="btn btn-lg btn-danger" type="button" v-on:click="removeFood(plates)">Remover</button>
				</div>
				
				<table class="table table-hover table-striped">
                    <tr>
						<th>ID</th>
						<th>Ingrediente</th>
						<th>Cantidad</th>
					</tr>
					<tr v-for="recipes in recipe">
						<td>@{{recipes.id}} </td>
						<td>@{{recipes.name}} </td>
						<td>@{{recipes.peso}} </td>
					</tr>

				 </table>
				 <input v-if="recipe.length >= 2 && nameRecipe.trim()" v-on:click="processRecipe()" type="button" class="btn btn-lg btn-success" value="Crear Receta">
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
