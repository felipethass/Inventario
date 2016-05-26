@extends('app')

@section('content')
<div class="content whit">
	<h1 align="center">
		Lista de tipos de producto</h1>

		<div class="form-group container ">

			<table class="table table-bordered table-striper tableimg colorbl" >

				<thead>
					<tr>
						<th>Codigo del tipo</th>
						<th>Nombre del tipo</th>

					</tr>
				</thead>

				<tbody>

					@foreach ($tipoproducto as $tipoproducto)

					<tr>
						<td> {{ $tipoproducto->codigotipo }}</td>
						<td> {{ $tipoproducto->nombretipo }} </td>

					</tr>
					@endforeach
				

				
			</tbody>
		</table>

		<div class="form-group ", role"group" >
		<div class="col-md-4 blue">

			{!! Form::open(['route' => 'tipoproductos.create','method' => 'get']) !!}
			
			{!! Form::button('Crear Tipo de Producto', ['type'=> 'submit', 'class'=>'btn  blue ']) !!}<span class="glyphicon glyphicon-folder-open"> </span>

			{!! Form::close() !!}
			</div>



			
		</div>
	</div>	

	@endsection