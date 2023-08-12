@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
				<a href=" {{Route('home') }} " class="btn btn-info pull-right">Return</a>
		  <a href=" {{Route('food.create') }} " class="btn btn-primary pull-right">Add</a>
	            <h2>General Storehouse > List of Food in stock</h2>
	            
				@include('food.partials.info')
		      <table class="table table-hover table-striped" >
			   <thead>
			    <tr>
			      <th>ID</th>
				   <th>Name</th>
				    <th>Type</th>
					 <th>Weight</th>
					 <th>Cost Price</th>
					  <th colspan="2">Actions</th>
			    </tr>
			   </thead>
			   <tbody>
			       @foreach($foods as $food)
				   <tr>
	
				     <td> {{ $food->idFood }} </td>
					 <td> {{ $food->name }} </td>
					 <td> {{ $food->type }} </td>
				     <td> {{ $food->weight }} </td>
				     <td> {{ $food->price }} </td>	
					 
           		     <td> <a class="btn btn-link" href=" {{Route('food.edit',$food->idFood) }} ">Edit</a> </td>
				     <td> 
                      <form action="{{Route('food.destroy',$food->idFood) }} " method="POST">
						    
						  {{ csrf_field() }}
					   <input type="hidden" name="_method" value="DELETE">
					   <button class="btn btn-link">Delete</button>
					  </form>
					 </td>
			
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
