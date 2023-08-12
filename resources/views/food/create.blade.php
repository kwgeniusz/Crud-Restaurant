@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	
	
        <div class="col-md-8 col-md-offset-1">
			@include('food.partials.error')
		 <a href=" {{Route('food.index') }} " class="btn btn-danger pull-right">List</a>
            <div class="panel panel-default">
			<br><br>
              <form action="{{Route('food.store') }}" method="POST" class="">
			  
			  	{{csrf_field()}}
				
			    <div class="form-group">
				 <label for="name">Name:</label>
				 <input type="text" name="name" class="form-control" value="{{ old('name') }}"/>
				</div>
				
			    <div class="form-group">
               <label for="type">Type:</label>
               <select class="form-control" name="type" id="type">
                    <option value="PERECEDERO">PERISHABLE</option>
                    <option value="NO PERECEDERO">NONPERISHABLE</option>
                       </select>
                   </div>
				
				 <div class="form-group">
				 <label for="weight">Weight in grams:</label>
				 <input type="number" name="weight" class="form-control" value="{{ old('weight') }}"/>
				</div>
				
				 <div class="form-group">
				 <label for="price">Cost Price:</label>
				 <input type="number" name="price" class="form-control" value="{{ old('price') }}"/>
				</div>
				
				 <div class="form-group col-lg-offset-5">
				 <input type="submit" class="btn btn-lg btn-success" value="Send">
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
