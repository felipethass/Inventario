<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>@section ('title')Inventario @show</title>
	<link rel="shortcut icon" href="logonav.ico">

	

	<!-- Fonts -->
	
	{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/bootstrap-material-design.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}
	{!! Html::style('bower_components/bootstrap-material-design/dist/css/material-wfont.min.css') !!}
	{!! Html::style('css/estilos.css') !!}


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header>
			<div class="jumbotron2">

				<a  href= ""  class= "">
					<img  src = {{asset('imagenes/header2.jpg')}} class="img-responsive" alt = "" >
				</a>

			</div>
		</header>
		<nav class="navbar nav col-xs-16">
			<div class="container-fluid">
				<div class="navbar-header ">


					<div class="col-md-2">
						<a class="navbar-brand " href="{{ url('/') }}"><span class="glyphicon glyphicon-flag">Inicio </span></a>

						<div class="col-md-4"></div>
					</div>

					<!-- <ul class="nav nav-pills nav-justified pull-center" role="tablist">
						<li role="presentation" class="">
							<a href="tipoproductos" aria-controls="RegProd" role="tab" data-toggle="tab">Registrar Producto</a>
						</li>
						<li role="presentation" >
							<a href="VerInv" aria-controls="VerInv" role="tab" data-toggle="tab">Ver Inventario</a>
						</li>
						<li role="presentation">
							<a href="productos" aria-controls="RegVen" role="tab" data-toggle="tab">Registrar Venta</a>
						</li>
						<li role="presentation">
							<a href="{{ url('/') }}" aria-controls="RegNew" role="tab" data-toggle="tab">Registrar Nuevo </a>
						</li>
					</ul> -->

				</div>

				

				
				@if (Auth::guest())
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ url('/auth/login') }}">
					<span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
					<li><a href="{{ url('/auth/register') }}">
					<span class="glyphicon glyphicon-open-file"></span> Registrarse</a></li>
				</ul>
				@else
				<ul class="nav navbar-nav navbar-left col-md-6">
					<a class="navbar-brand col-md-4-offset-2" href="/productos"> 
						<span class="glyphicon glyphicon-eye-open">

						</span> Ver Lista de Productos</a>
						<div class="col-md-2-offset-2"></div>
						<div class="col-md-2"></div>
						<a class="navbar-brand col-md-4-offset-2" href="/tipoproductos "> 
						<span class="glyphicon glyphicon-share-alt"></span>Ver Lista de Tipos</a>
						<div class="col-md-2-offset-2"></div>


						
					</ul>


					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">

							<a href="#" class="dropdown-toggle floating" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class=" glyphicon glyphicon-user"></span><span class="caret "></span></a>
							<ul class="dropdown-menu floating" role="menu">
								<li><a href="{{ url('/auth/logout') }}"> 
								<span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
							</ul>
						</li>
					</ul>
					@endif


				</div>
			</nav>
			<div class="container">
				@yield('content')
			</div>

			<!-- Scripts -->

			{!! Html::script('bower_components/jquery/dist/jquery.min.js') !!}
			{!! Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
			{!! Html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js') !!}
			{!! Html::script('bower_components/bootstrap-material-design/dist/js/material.min.js') !!}


			<script type="text/javascript">
				$(document).on('ready',function(){
					$.material.init();
				});

			</script>
		</body>
		</html>
