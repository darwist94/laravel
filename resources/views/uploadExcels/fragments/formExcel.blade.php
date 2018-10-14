<div class="form-group">
	{{ Form::label('name', 'titulo:') }}
	{{ Form::text('titulo', null, ['class' => 'form-control', 'id' => 'titulo']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripción:') }}
	{{ Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<hr>
<div class="form-group">
	{{ Form::file('file', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>