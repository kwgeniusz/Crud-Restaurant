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
			<h2>Seleccione el Plato que desea Preparar</h2>
              <form class="">
			  
			  	{{csrf_field()}}
				
			    <div class="form-group">
               <label for="idFoodProduction">Consulta Disponibilidad en Produccion:</label>
			   <select v-model="idFoodProduction" v-on:change="checkWeightProduction(idFoodProduction)" class="form-control" name="idFoodProduction">
				@foreach($foodsProduction as $foodProduction)
					 <option value="{{$foodProduction->idFood}}">{{$foodProduction->foods->name}}</option>
				@endforeach                                      
				</select>
                   </div>
		
				 <div class="form-group">
				 <label for="weight">Peso actual en Produccion:</label>
				 @{{quantityProduction}} 
				</div>
			<hr>
			<div class="form-group">
				<label for="idRecipe">Recetas Disponibles:</label>
				<select v-model="idRecipe" class="form-control" name="idRecipe">
				 @foreach($recipes as $recipe)
					  <option value="{{$recipe->idRecipe}}">{{$recipe->name}}</option>
				 @endforeach                                      
				 </select>
			</div>
				
				 <div class="form-group col-lg-offset-5">
				 <input v-on:click="searchRecipeDetails(idRecipe)" type="button" class="btn btn-lg btn-success" value="Seleccionar Plato">
			
				 <button class="btn btn-lg btn-danger" type="button" v-on:click="removePlate()">Remover Plato</button>
				</div>
				
				<table class="table table-hover table-striped">
                    <tr>
						<th>ID</th>
						<th>Ingrediente</th>
						<th>Cantidad Requerida</th>
						<th>Disponibilidad</th>
					</tr>
					<tr v-for="recipes in recipe">
						<td>@{{recipes.id}} </td>
						<td>@{{recipes.name}} </td>
						<td>@{{recipes.peso}} </td>
						<td>@{{recipes.existencia}} </td>
					</tr>

				 </table>
				 <input v-if="buttonPlate" v-on:click="processPlate()" type="button" class="btn btn-lg btn-success" value="Crear Receta">
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
