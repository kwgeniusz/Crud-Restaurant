@extends('layouts.app')

@section('content')
<div id="vueApp">
<div class="container">
    <div class="row">
	
        <div class="col-md-8 col-md-offset-1">
			@include('food.partials.error')
		 <a href=" {{Route('home') }} " class="btn btn-info pull-right">Regresar</a>
            <div class="panel panel-default">
			<br><br>
              <form action="{{Route('production.create') }}" method="POST" class="">
			  
			  	{{csrf_field()}}
			
				
			    <div class="form-group">
			   <label for="idFood">Alimento:</label>
			  
               <select v-model="idfood" v-on:change="checkWeight(idfood)" name="idFood" class="form-control">
			   @foreach($foods as $food)
                    <option value="{{$food->idFood}}">{{$food->name}}</option>
		       @endforeach
               </select>
                   </div>
				
				 <div class="form-group">
				 <label>Peso actual en Almacen:</label>
				  @{{weight}} Gramos
					
				</div>
				
				 <div class="form-group">
				 <label for="weightProduction">Cantidad que va a Producción:</label>
				 <input type="number" name="weightProduction" class="form-control" required/>
				</div>
				@{{typeFood}} 
			  <div v-if="typeFood == 'PERECEDERO'" class="form-group">
				 <label for="merma">Cantidad de Merma:</label>
				 <input type="number" name="merma" class="form-control" required/>
				</div>
				
				 <div class="form-group col-lg-offset-5">
				 <input  type="submit" class="btn btn-lg btn-success" value="Procesar">
				</div>
				
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
