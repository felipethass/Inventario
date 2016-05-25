@extends('app')

@section('content')

<div class="content whit">
	
		<h1 align="center">Lista de productos</h1>
	
	<table class="table table-bordered table-striper tableimg">

		<thead>
			<tr>
				<th>Codigo del producto</th>
				<th>Nombre del producto</th>
				
			</tr>
		</thead>

		<tbody>
			
			{!! Form::open(['route' => 'productos.create','method' => 'get']) !!}

			<div class="form-group">
				@foreach ($producto as $producto)
				
				<tr>
					<td> {{ $producto->codigoproducto }}</td>
					<td> {{ $producto->nombreproducto }} </td>

				</tr>
				@endforeach
				<div class="form-group " align="center">
					{!! Form::button('Crear Producto', ['type'=> 'submit', 'class'=>'btn  blue ']) !!}
				</div>
			</div>
			
			{!! Form::close() !!}

		</tbody>
	</table>	
</div>

@endsection