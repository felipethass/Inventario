@extends('app')

@section('content')
	<div class="content whit container">
	<div  align="center">
	<h1>Registrar Tipo de Producto</h1>
	</div>
	{!! Form::open(['route' => 'tipoproductos.store']) !!}
		@include('tipos.form')

		<div class="form-group " align="center">
			<div class="blue col-md-2" align="center">
		<span class="glyphicon glyphicon-floppy-disk">
		{!! Form::button('Guardar',['type'=> 'submit', 'class'=>'btn blue ']) !!} </span>
		</div>
		</div>

	{!! Form::close() !!}
	</div>

@endsection