@extends('layouts.app')

@section('content')
<div id="vueApp">
<div class="container">
    <div class="row">
	
        <div class="col-md-8 col-md-offset-1">
			@include('food.partials.error')
		    <a href=" {{Route('production.index') }} " class="btn btn-info pull-right">Return</a>
            <div class="panel panel-default">
			<br><br>
              <form action="{{Route('production.process') }}" method="POST" class="">
			  
			  	{{csrf_field()}}
			
				
			    <div class="form-group">
			   <label for="idFood">Food:</label>
			  
               <select v-model="idfood" v-on:change="checkWeight(idfood)" name="idFood" class="form-control">
			   @foreach($foods as $food)
                    <option value="{{$food->idFood}}">{{$food->name}}</option>
		       @endforeach
               </select>
                   </div>
				
				 <div class="form-group">
				 <label>Current Weight in Warehouse:</label>
				  @{{weight}} Grams
					
				</div>
				
				 <div class="form-group">
				 <label for="weightProduction">Quantity going to production:</label>
				 <input type="number" name="weightProduction" class="form-control" required/>
				</div>
				@{{typeFood}} 
			  <div v-if="typeFood == 'PERECEDERO'" class="form-group">
				 <label for="merma">Cantidad de Merma:</label>
				 <input type="number" name="merma" class="form-control" required/>
				</div>
				
				 <div class="form-group col-lg-offset-5">
				 <input  type="submit" class="btn btn-lg btn-success" value="Process">
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
