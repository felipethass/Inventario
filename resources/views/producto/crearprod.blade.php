@extends('app')

@section('content')
	<div class="whit">
	<h1 align="center">Registrar Producto</h1>
	
	{!! Form::open(['route' => 'productos.store']) !!}
		@include('producto.form') 

		<div class="form-group " align="center">
		{!! Form::button('Guardar',['type'=> 'submit', 'class'=>'blue btn ']) !!}
		</div>

	{!! Form::close() !!}
	</div>

@endsection