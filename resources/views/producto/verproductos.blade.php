@extends('app')

@section('content')

<div class="content whit colorbl">
	
		<h1 align="center">Lista de productos</h1>

		<!--BUSCADOR -->
		{!! Form::open([ 'route'=> 'productos.index', 'method'=>'GET', 'class'=>' pull-right ']) !!}
		<div class="input-group input-group-lg colorbl">
			<span class="glyphicon glyphicon-search input-group-addon 
			" id="sizzing-addon1"> Buscar</span>
			{!! Form::text('codigoproducto', null,['class'=>'form-control','placeholder'=>'Código del Producto', 'aria-describedby'=>'search']) !!}
		</div>
		{!! Form::close() !!}
		<!-- FIN BUSCADOR-->
		<div>

		<table class="table table-bordered table-striper tableimg colorbl">

			<thead>
				<tr>
					<th>Codigo del producto</th>
					<th>Nombre del producto</th>
					<th>Vender producto</th>

				</tr>
			</thead>
			

			<tbody>

				{!! Form::open(['route' => 'productos.create','method' => 'GET']) !!}
				<div class="form-group " align="center">
						<span class="glyphicon glyphicon-open">
						{!! Form::button('Almacenar nuevo producto', ['type'=> 'submit', 'class'=>'btn  blue ']) !!}</span>
					</div>
					{!! Form::close() !!}

				<div class="">
				
					@foreach ($producto as $producto)

					<tr>
						<td> {{ $producto->codigoproducto }} </td>
						<td> {{ $producto->nombreproducto }} </td>
						<td><a href="{{ url('productos/destroy', $producto->codigoproducto)}} "class="btn famarillo ">
						<span class="glyphicon glyphicon-usd" 
						aria-hidden ="true"> </span> VENDER  </a> </td>

					</tr>
					@endforeach
					
					
				</div>

				
				
			</tbody>

		</table>	

	</div>
	

	
</div>

@endsection