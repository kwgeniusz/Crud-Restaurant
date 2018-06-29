@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Administración</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido

                
			   <div class="link">
                   <a href=" {{Route('client.index') }} ">Clientes</a>
				   <br>
				   <a href=" {{Route('food.index') }} ">Almacen General</a>  
				   <br>
				   <a href=" {{Route('production.index') }} ">Producción</a>  
                   <br>
                   <a href=" {{Route('recipe') }} ">Recetas</a>
                   <br>
                   <a href=" {{Route('kitchen') }} ">Cocina</a>  
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
