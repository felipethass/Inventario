@extends('app')

@section('content')

<div class="content whit">
	<div>
	<h1 align="center">Lista de productos</h1>

	{!! Form::open([ 'route'=> 'productos.index', 'method'=>'GET', 'class'=>'navbar pull-right']) !!}
				<div class="input-group input-group-lg">
					<span class="glyphicon glyphicon-search input-group-addon 
 " id="sizzing-addon1"> Buscar</span>
					{!! Form::text('name', null,['class'=>'form-control','placeholder'=>'Código del Producto', 'aria-describedby'=>'search']) !!}
				</div>
		{!! Form::close() !!}
	
	<table class="table table-bordered table-striper tableimg colorbl">

		<thead>
			<tr>
				<th>Codigo del producto</th>
				<th>Nombre del producto</th>
				<th>Vender producto</th>
				
			</tr>
		</thead>
		<!--BUSCADOR -->
		
		<tbody>
			
			{!! Form::open(['route' => 'productos.create','method' => 'get']) !!}

			<div class="">
				@foreach ($producto as $producto)
				
				<tr>
					<td> {{ $producto->codigoproducto }} </td>
					<td> {{ $producto->nombreproducto }} </td>
					<td><a href="{{ route('productos.destroy', $producto->codigoproducto)
					 }} "class="btn famarillo ">
					 <span class="glyphicon glyphicon-usd" 
					  aria-hidden ="true"> </span> VENDER  </a> </td>

				</tr>
				@endforeach
				<div class="form-group " align="center">
					{!! Form::button('Almacenar nuevo producto', ['type'=> 'submit', 'class'=>'btn  blue ']) !!}
				</div>
			</div>
			
			{!! Form::close() !!}
			{!! $producto->render !!}
		</tbody>
		
	</table>	

	</div>
	<!-- <div>


		{!! Form::open(['route' => ['productos.destroy', $producto->codigoproducto],'method'=>'DELETE']) !!}


		<div class="col-sn-6">


			<div class="form-group">
				{!! Form::text('codigoproducto',null,['class'=>'form-control floating-label', 'placeholder'=>'Codigo del producto a vender']) !!}
				
			</div>


		</div>
		{!! Form::close() !!}
	</div> -->

	
</div>

@endsection