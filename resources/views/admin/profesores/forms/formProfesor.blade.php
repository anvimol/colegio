@if ($editar)
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	{!!Form::label('nombre','Nombre')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del profesor...'])!!}
	</div>
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('apellidos','Apellidos')!!}
		{!!Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Apellidos del profesor...'])!!}
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('direccion','Dirección')!!}
		{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Dirección...'])!!}
	</div>
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('codigo_postal','Código Postal')!!}
		{!!Form::text('codigo_postal',null,['class'=>'form-control','placeholder'=>'Nombre del profesor'])!!}
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('poblacion','Población')!!}
		{!!Form::text('poblacion',null,['class'=>'form-control','placeholder'=>'Población...'])!!}
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('provincia','Provincia')!!}
		{!!Form::text('provincia',null,['class'=>'form-control','placeholder'=>'Provincia...'])!!}
	</div>

	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
		{!!Form::label('telefono','Teléfono')!!}
		{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Teléfono...'])!!}
	</div>

	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
		{!!Form::label('fecha_nacimiento','Fecha Nacimiento')!!}
		{!!Form::text('fecha_nacimiento',null,['class'=>'form-control','placeholder'=>'Fecha de nacimiento...'])!!}
	</div>

	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
		{!!Form::label('dni','DNI')!!}
		{!!Form::text('dni',null,['class'=>'form-control','placeholder'=>'Documento de Identidad'])!!}<br>
	</div>
@else
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	{!!Form::label('nombre','Nombre')!!}
	{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del profesor...'])!!}
	</div>
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('apellidos','Apellidos')!!}
		{!!Form::text('apellidos',null,['class'=>'form-control','placeholder'=>'Apellidos del profesor...'])!!}
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('direccion','Dirección')!!}
		{!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Dirección...'])!!}
	</div>
	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('codigo_postal','Código Postal')!!}
		{!!Form::text('codigo_postal',null,['class'=>'form-control','placeholder'=>'Nombre del profesor'])!!}
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('poblacion','Población')!!}
		{!!Form::text('poblacion',null,['class'=>'form-control','placeholder'=>'Población...'])!!}
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('provincia','Provincia')!!}
		{!!Form::text('provincia',null,['class'=>'form-control','placeholder'=>'Provincia...'])!!}
	</div>

	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
		{!!Form::label('telefono','Teléfono')!!}
		{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Teléfono...'])!!}
	</div>

	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
		{!!Form::label('fecha_nacimiento','Fecha Nacimiento')!!}
		{!!Form::text('fecha_nacimiento',null,['class'=>'form-control','placeholder'=>'Fecha de nacimiento...'])!!}
	</div>

	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
		{!!Form::label('dni','DNI')!!}
		{!!Form::text('dni',null,['class'=>'form-control','placeholder'=>'Documento de Identidad'])!!}
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	{!!Form::label('name','Usuario')!!}
	{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Usuario...'])!!}
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('email','Correo electronico')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Correo electronico...'])!!}
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('password','Contraseña')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña...'])!!}<br>
	</div>

	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		{!!Form::label('password_confirmation','Confirma Contraseña')!!}
		{!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Confirma Contraseña...'])!!}<br>
	</div>
@endif



