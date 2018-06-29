@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
				<a href=" {{Route('home') }} " class="btn btn-info pull-right">Regresar</a>
		  <a href=" {{Route('production.create') }} " class="btn btn-danger pull-right">Agregar a Produccion</a>
	            <h2>Listado de Alimentos En Produccion</h2>
	            
				@include('food.partials.info')
		      <table class="table table-hover table-striped" >
			   <thead>
			    <tr>
			      <th>ID</th>
				   <th>Nombre</th>
				    <th>Cantidad en Produccion</th>
			    </tr>
			   </thead>
			   <tbody>
			       @foreach($foodsProduction as $foodProduction)
				   <tr>
	
				     <td> {{ $foodProduction->idFood }} </td>
					 <td> {{ $foodProduction->foods->name }} </td>
				     <td> {{ $foodProduction->quantityProduction }} </td>		  
				
				   </tr>
                   @endforeach				   
			   </tbody>
			  </table>
	  
            </div>
        </div>
		<div class="col-sm-3">
		 	@include('food.partials.aside')
		</div>
    </div>
</div>
@endsection
