@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	
	
        <div class="col-md-8 col-md-offset-1">
			@include('food.partials.error')
		 <a href=" {{Route('food.index') }} " class="btn btn-danger pull-right">Listado</a>
            <div class="panel panel-default">
			<br><br>
              <form action="{{Route('food.update',$food->idFood) }}" method="POST" class="">
			  
			  {{csrf_field()}}
			  {{method_field('PUT')}}
			  
			    <div class="form-group">
				 <label for="name">Nombre:</label>
				 <input type="text" name="name" class="form-control" value="{{ $food->name }}"/>
				</div>
				
			    <div class="form-group">
               <label for="type">Tipo:</label>
               <select class="form-control" name="type" id="type">
                          <option value="PERECEDERO">PERECEDERO</option>
                    <option value="NO PERECEDERO">NO PERECEDERO</option>
                       </select>
                   </div>
				
				 <div class="form-group">
				 <label for="weight">Peso en Gramos:</label>
				 <input type="number" name="weight" class="form-control" value="{{ $food->weight }}"/>
				</div>
				
				 <div class="form-group">
				 <label for="price">Precio Costo:</label>
				 <input type="number" name="price" class="form-control" value="{{ $food->price }}"/>
				</div>
				
				 <div class="form-group col-lg-offset-5">
				 <input type="submit" class="btn btn-lg btn-success">
				</div>
				
			 </form>
	  
            </div>
        </div>
		<div class="col-sm-3">
		 	@include('food.partials.aside')
		</div>
    </div>
</div>
@endsection
