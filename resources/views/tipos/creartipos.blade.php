@extends('app')

@section('content')
	<div class="content whit">
	<div  align="center">
	<h1>Registrar Tipo de Producto</h1>
	</div>
	{!! Form::open(['route' => 'tipoproductos.store']) !!}
		@include('tipos.form')

		<div class="form-group " align="center">
		{!! Form::button('Guardar',['type'=> 'submit', 'class'=>'btn btn-primary ']) !!}
		</div>

	{!! Form::close() !!}
	</div>

@endsection