<div class="form-group">
	{{ Form::label('name', 'titulo:') }}
	{{ Form::text('titulo', null, ['class' => 'form-control', 'id' => 'titulo']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripción:') }}
	{{ Form::textarea('descripcion', null, ['class' => 'form-control']) }}
</div>
<hr>
<div class="form-group">
	<!-- {{ Form::label('name', 'Abjuntar Archivo:') }}
	{{ Form::text('excel', null, ['class' => 'form-control', 'id' => 'excel', 'enctype' => 
	'multipart/form-data']) }}-->
	<input type="file" class="form-control" id="excel" name="excel" >
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>