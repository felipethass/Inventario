<table class="table table-bordered table-striper" >

	<thead>
		<tr>
			<th>Codigo del tipo</th>
			<th>Nombre del tipo</th>

		</tr>
	</thead>

	<tbody>

	@foreach ($tipoproductos as $tipoproducto)

		<tr>
			<td> {{ $tipoproducto->id }}</td>
			<td> {{ $tipoproducto->nombretipo }} </td>

		</tr>
		@endforeach
	</tbody>
</table>