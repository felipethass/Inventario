<div class="col-sn-6">
	<div class="form-group">
		{!! Form::text('codigotipo',null,['class'=>'form-control floating-label', 'placeholder'=> 'Codigo del tipo de producto:','required']) !!}
		@if ($errors->has('codigotipo'))
			<p class="text-danger"> {{ $errors->first('codigotipo') }}</p>
		@endif
	</div>
	<div class="form-group">
		{!! Form::text('nombretipo',null,['class'=>'form-control floating-label', 'placeholder'=>'Nombre Del Tipo del producto','required']) !!}
	</div>
	@if ($errors->has('nombretipo'))
			<p class="text-danger"> {{ $errors->first('nombretipo') }}</p>
		@endif

		
</div>