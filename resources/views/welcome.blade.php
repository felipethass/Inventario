<html>



@extends('app')

@section('content')



<div class="container tableimg contenedor2 whit">
	<div class="content colorbl">
		<h1 align="center"> BIENVENIDO</h1>
		<h1 align="center"> </h1>
		<h1 align="center"> </h1>
		<h1 align="center"> Este es el inventario de Horus Bar</h1>

		<div class="" align="center">
		<button class= "btn blue"  data-toggle="modal" data-target="#listatipos">
			Ver Manual de Usuario
		</button>
		</div>
		<div class="" align="center">
		<button class= "btn blue"  data-toggle="modal" data-target="#listatipos">
			Contacto y licencia
		</button>
		</div>
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

						CONTENIDO
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




	<!-- <head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body> -->
	</html>
