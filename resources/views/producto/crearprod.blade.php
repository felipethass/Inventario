@extends('app')

@section('content')
<div class="whit">
	<h1 align="center">Registrar Producto</h1>
	
	{!! Form::open(['route' => 'productos.store']) !!}
	@include('producto.form') 



	{!! Form::close() !!}
	<div class=" form-group container" style"margin-top:0 px;">
		<button class= "btn btn-info" data-toggle="modal" data-target="#listatipos">
			Ver codigos de los tipos
		</button>
		<div class="modal fade" id="listatipos" tabindex="-1" role= "dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					<!--BOTON CERRAR -->
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button>

						<!--CONTENIDO -->
						<h4>Lista de tipos</h4>
					</div>
					<div class="modal-body">

						<!--comienzo tabla -->
						@include('tipos.listatipos')
						

						<!--fin tabla -->
					</div>
					
					<div class="modal-footer">
					<!--BOTON CERRAR -->
						<button type="button" class="btn btn-primary" data-dismiss="modal">
							Cerrar
						</button>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
</div>

@endsection