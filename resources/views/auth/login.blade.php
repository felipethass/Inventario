@extends('app')


@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Ingreso de sesión</div>
				<div class="panel-body">
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						Las credenciales que ingresaste no conciden con nuevo registros.
					</div>
					@endif
 

					{!! Form::open(['url' => 'auth/login', 'role' => 'form', 'class' => 'form-horizontal']) !!}
					<div class="form-group">
						{!! Form::label ('email' , 'Dirección de correo:', ['class' => 'col-md-4']) !!}

						<div class="col-md-6">
							{!! Form::email('email', old('Correo electronico'),['class'=>'form-control']) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::label('password','Contraseña:', ['class'=>'col-md-4']) !!}


						<div class="col-md-6">
							{!! Form::password('password', ['class'=>'form-control']) !!}


						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember"> Recuerdame
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">Ingresar</button>
							
							
							
						</div>
					</div>
					{!! Form::close() !!}
				</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
