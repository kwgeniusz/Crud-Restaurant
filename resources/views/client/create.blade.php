@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	
	
        <div class="col-md-8 col-md-offset-1">
			@include('client.partials.error')
		 <a href=" {{Route('client.index') }} " class="btn btn-danger pull-right">List</a>
            <div class="panel panel-default">
			<br><br>
              <form action="{{Route('client.store') }}" method="POST" class="">
			    <div class="form-group">
				 <label for="ci">DNI:</label>
				 <input type="text" name="ci" class="form-control" value="{{ old('ci') }}"/>
				</div>
				
			    <div class="form-group">
				 <label for="name">Full Name:</label>
				 <input type="text" name="name" class="form-control" value="{{ old('name') }}"/>
				</div>
				
				 <div class="form-group">
				 <label for="address">Address:</label>
				 <input type="text" name="address" class="form-control" value="{{ old('address') }}"/>
				</div>
				
				 <div class="form-group">
				 <label for="phone">Phone Number:</label>
				 <input type="text" name="phone" class="form-control" value="{{ old('phone') }}"/>
				</div>
				
				 <div class="form-group col-lg-offset-5">
				 <input type="submit" class="btn btn-lg btn-success" value="Send">
				</div>
				{{csrf_field()}}
			 </form>
	  
            </div>
        </div>
		<div class="col-sm-3">
		 	@include('client.partials.aside')
		</div>
    </div>
</div>
@endsection
