@extends('app')

@section('content')
	<div class="whit">
	<h1 align="center">Registrar Producto</h1>
	
	{!! Form::open(['route' => 'productos.store']) !!}
		@include('producto.form') 

		

	{!! Form::close() !!}
	<div class=" form-group">
		<button class= "btn btn-info" data-tonggle="modal" data-target="mi ventana">
			Ver codigos de los tipos
		</button>
	</div>
	</div>

@endsection