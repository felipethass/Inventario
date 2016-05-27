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
			<button class= "btn blue"  data-toggle="modal" data-target="#MANUAL">
				Ver Manual de Usuario
			</button>
		</div>
		<div class="" align="center">
			<button class= "btn blue"  data-toggle="modal" data-target="#LICENCIA">
				Contacto y licencia
			</button>
		</div>
		<div class="modal fade" id="LICENCIA" tabindex="-1" role= "dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<!--BOTON CERRAR -->
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button>

						
					</div>
					<div class="modal-body">

						<H2> AVISO LEGAL</H2>
						<P> El producto de software Sistema de inventatario
							Horus Bar es instranferible, inmodificable, exclusivo para
							el establecimiento denominado Horus Bar con el cual se realizó un previo contrato. 

						</P>
						<p>
							Version: 1.4 </p>
							<p>	Tamaño de ficheros: 28 mb</p>
							<p>Ultima fecha de actualización: 26/05/2016</p>
							<p>Autor: Andres Felipe Delgado Lopez</p>
							<p>Lenguaje/Framework: PHP LARAVEL 5.0</p></p>
							<p>Tipo de aplicación: Web</p>
							<p>Idioma: Español</p>
							<p>Pais: Colombia</p>
							<p>Plataforma: Multiplataforma</p>

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


			<div class="modal fade" id="MANUAL" tabindex="-1" role= "dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<!--BOTON CERRAR -->
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button>


						</div>
						<div class="modal-body">

							


							<ul class="media-list">
								<li class="media">
									<div class="media-left col-md-12">

										
										<img class="media-object" src="imagenes/manual1.jpg" alt="">
										
										<img class="media-object" src="imagenes/manual2.jpg" alt="">
										<img class="media-object" src="imagenes/manual3.jpg" alt="">
										<img class="media-object" src="imagenes/manual4.jpg" alt="">
										<img class="media-object" src="imagenes/manual5.jpg" alt="">
										<img class="media-object" src="imagenes/manual6.jpg" alt="">
										<img class="media-object" src="imagenes/manual7.jpg" alt="">
										<img class="media-object" src="imagenes/manual8.jpg" alt="">
										<img class="media-object" src="imagenes/manual9.jpg" alt="">
									</a>
								</div>
								<div class="media-body col-md-6">
									<h4 class="media-heading">Manual de usuario</h4>
									<h4> Imagen 1</h4>
									<p> Opcion1: Inicar sesión </p>
									<p> En esta opció se ingresa al sistema con una cuenta reigstrada digitando los datos correspondientes </p>
									<p>Opcion2: Registrar usuario </p>
									<p>En esta opción se registra un nuevo usuario para ingresar al sistema </p>

									<h4> Imagen 2</h4>
									<p> Opcion1: Datos a registrar </p>
									<p> En esta opción se ingresan los datos correspondientes al usuario según cada campo </p>
									<p>Opcion2: Boton registrar </p>
									<p>En esta opción se aceptan los registros realizados y se realiza un nuevo usuario </p>

									<h4> Imagen 3</h4>
									<p> Opcion1: Ingresar datos </p>
									<p> En esta opció se ingresan los datos de la cuenta registrada para ingresar al sistema </p>
									<p>Opcion2: Boton ingresar  </p>
									<p>En esta opción se verifican los campos y se da ingreso al sistema</p>

									<h4> Imagen 4</h4>
									<p> Opcion1: Ver lista productos </p>
									<p> En esta opció se ingresa a los productos para revisar, ingresar o vender un ejemplar</p>
									<p>Opcion2: Ver Lista Tipos </p>
									<p>En esta opción se ingresa para revisar o agregar algún tipo de producto </p>

									<h4> Imagen 5</h4>
									<p> Opcion1: Buscar producto </p>
									<p> En esta opción se busca el producto a vender o revisar existencia </p>
									<p>Opcion2: Almacenar nuevo</p>
									<p>En esta opción se ingresa un nuevo producto al inventario </p>
									<p>Opcion3: tabla productos </p>
									<p>En esta opción se ve la lista de productos y su respectiva opción de vender </p>

									<h4> Imagen 6</h4>
									<p> Opcion1: Datos registrar producto </p>
									<p> En esta opció se ingresan los datos correspondientes al producto a ingresar </p>
									<p>Opcion2: Boton Guardar </p>
									<p>En esta opción se verifican datos ingresados y se guarda nuevo producto en inventario</p>
									<p>Opcion3: ver lista tipos </p>
									<p>En esta opción es para ver los coigos de tipo disponible a registrar </p>

									<h4> Imagen 7</h4>
									<p> Opcion1: Ver lista tipos </p>
									<p> En esta opció se ingresa a la tabla de lis tipos de producto </p>
									<p>Opcion2: Lista tipos </p>
									<p>En esta opción se ven los tipos de productos registrados </p>
									<p>Opcion3: Crear tipo prodcuto </p>
									<p>En esta opción se crea un uevo tipo de producto </p>

									<h4> Imagen 8</h4>
									<p> Opcion1: Ingresar datos tipo </p>
									<p> En esta opció se ingresa los datos correspondientes a cada campo </p>
									<p>Opcion2: Boton Guardar  </p>
									<p>En esta opción se verifican los campos y se agrega u nuevo tipo de producto a la base de datos</p>

									<h4> Imagen 9</h4>
									<p> Opcion1: Ver Manual de usuario </p>
									<p> En esta opció se despliegan el manual de usuario </p>
									<p>Opcion2: Contacto y licencia </p>
									<p>En esta opción se despliega la licencia del software y el contacto del creador </p>
								</div>
							</li>
						</ul>

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
