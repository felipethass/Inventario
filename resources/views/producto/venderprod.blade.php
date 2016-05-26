@extends('app')

@section('content')

<div class="content whit">
	<h1 align="center">
		Realizar venta de producto
	</h1>
	
	{!! Form::open(['route' => ['vender.destroy', $producto->id],'method'=>'DELETE']) !!}


	
	<div class="col-sn-6">
		<div class="form-group">
			<button type="submit" class="btn btn-danger"> Vender</button>
		</div>
		
		<div class="form-group " align="center">
			{!! Form::button('Vender',['type'=> 'submit', 'class'=>'btn btn-primary ']) !!}
		</div>

		
	</div>
	{!! Form::close() !!}
</div>

@endsection