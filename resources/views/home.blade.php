@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to the Administration</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                
			   <div class="link">
                   <a href=" {{Route('client.index') }} ">Customers</a>
				   <br>
				   <a href=" {{Route('food.index') }} ">General Storehouse</a>  
				   <br>
				   <a href=" {{Route('production.index') }} ">Production</a>  
                   <br>
                   <a href=" {{Route('recipe') }} ">Recipes</a>
                   <br>
                   <a href=" {{Route('kitchen') }} ">Kitchen</a>  
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
