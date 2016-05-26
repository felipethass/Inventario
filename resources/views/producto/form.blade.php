<div class="col-sn-6 container">
	<div class="form-group">
		{!! Form::text('codigoproducto',null,['class'=>'form-control floating-label', 'placeholder'=> 'Codigo del producto:','required']) !!}
		@if ($errors->has('codigoproducto'))
		<p class="text-danger"> {{ $errors->first('codigoproducto') }}</p>
		@endif
	</div>
	<div class="form-group">
		{!! Form::text('nombreproducto',null,['class'=>'form-control floating-label', 'placeholder'=>'Nombre Del  producto','required']) !!}
	</div>
	@if ($errors->has('nombreproducto'))
	<p class="text-danger"> {{ $errors->first('nombreproducto') }}</p>
	@endif

	<div class="form-group">
		{!! Form::text('codigotipo',null,['class'=>'form-control floating-label', 'placeholder'=>'codigo del tipo','required']) !!}
	</div>
	@if ($errors->has('codigotipo'))
	<p class="text-danger"> {{ $errors->first('codigotipo') }}</p>

	@endif


	<div class="form-group col-md-2" align="center">
	<span class="glyphicon glyphicon-floppy-disk icon" aria-hidden="true">
		{!! Form::button('Guardar',['type'=> 'submit', 'class'=>'blue btn ']) !!}</span>
	</div>
	



	<!-- 	<div class="form-group">
			{!! Form::select('codigotipo',$tipoproductos,null,['id'=>'codigotipo', 'class'=>'form-control floating-label']) !!}
		</div> -->
	
	



</div>
