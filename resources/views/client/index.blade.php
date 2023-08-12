@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
				<a href=" {{Route('home') }} " class="btn btn-info pull-right">Return</a>
                  
		  <a href=" {{Route('client.create') }} " class="btn btn-primary pull-right">+ Add</a>
	            <h2>Customers List</h2>
	            
				@include('client.partials.info')
		      <table class="table table-hover table-striped" >
			   <thead>
			    <tr>
			      <th>DNI</th>
				   <th>Full Name</th>
				    <th>Address</th>
					 <th>Phone Number</th>
					  <th colspan="2">Actions</th>
			    </tr>
			   </thead>
			   <tbody>
			       @foreach($clients as $client)
				   <tr>
				     <td> {{ $client->ci }} </td>
					 <td> {{ $client->name }} </td>
				     <td> {{ $client->address }} </td>
				     <td> {{ $client->phone }} </td>	
					 
           		     <td> <a class="btn btn-link" href=" {{Route('client.edit',$client->ci) }} ">Edit</a> </td>
				     <td> 
                      <form action="{{Route('client.destroy',$client->ci) }} " method="POST">
						    
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
		 	@include('client.partials.aside')
		</div>
    </div>
</div>
@endsection
