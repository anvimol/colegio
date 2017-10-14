<div class="col-md-6 col-md-offset-3">
<div class="form-group">
	<div class="col-md-12">
		{!!Form::label('curso','Nombre del Curso')!!}
		{!!Form::text('curso',null,['class'=>'form-control'])!!}
	</div>

	<div class="col-md-6">	
	{!!Form::label('fecha_inicio','Fecha de Inicio')!!}
	{!!Form::text('fecha_inicio',null,['class'=>'form-control','id' => 'fecha'])!!}
	</div>
	<div class="col-md-6">	
	{!!Form::label('fecha_fin','Fecha de Finalización')!!}
	{!!Form::text('fecha_fin',null,['class'=>'form-control','id' => 'fecha1'])!!}
	</div>
	
	<div class="col-md-6">	
	{!!Form::label('hora_inicio','Hora de Inicio')!!}
	{!!Form::text('hora_inicio',null,['class'=>'form-control', 'placeholder' => 'HH:MM'])!!}
	</div>
	<div class="col-md-6">	
	{!!Form::label('hora_fin','Hora de Finalización')!!}
	{!!Form::text('hora_fin',null,['class'=>'form-control', 'placeholder' => 'HH:MM'])!!}
	</div>
	
	<div class="col-md-12">
		{!!Form::label('incidencias','Incidencias')!!}
		{!!Form::textarea('incidencias',null,['class'=>'form-control','size' => '30x5'])!!}<br>
	</div>
	<div class="text-center">
		{!!Form::submit('Guardar',['class'=>'btn btn-info'])!!}
		{!!Form::button('Cancelar',['class'=>'btn btn-danger','type' => 'reset'])!!}
	</div>
</div>

</div>

