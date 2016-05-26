@extends('app')

@section('content')
<div class="content whit">
	<h1 align="center">
		Lista de tipos de producto</h1>

		<div class="form-group ">

			<table class="table table-bordered table-striper" >

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

			{!! Form::open(['route' => 'tipoproductos.create','method' => 'get']) !!}

			{!! Form::button('Crear Producto', ['type'=> 'submit', 'class'=>'btn  blue ']) !!}

			{!! Form::close() !!}



			
		</div>
	</div>	

	@endsection