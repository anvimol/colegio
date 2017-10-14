<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	<label for="nombre">Nombre</label>
	<select name="nombre" class="form-control">
		<option>Elije un Alumno</option>
		@foreach ($personas as $persona)
			<option value="{{$persona->id}}">{{$persona->nombre}} {{$persona->apellidos}}</option>
		@endforeach
	</select>
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
	{!!Form::label('curso','Curso')!!}
	{!!Form::select('curso',$cursos,null,['class'=>'form-control','placeholder'=>'Curso...'])!!}<br>
</div>

<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
	{!!Form::label('parcial_1','Parcial 1')!!}
	{!!Form::text('parcial_1',$evaluacion->nota_parcial_1,['class'=>'form-control','placeholder'=>'Parcial 1...'])!!}
</div>

<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
	{!!Form::label('parcial_2','Parcial 2')!!}
	{!!Form::text('parcial_2',$evaluacion->nota_parcial_2,['class'=>'form-control','placeholder'=>'Parcial 2...'])!!}
</div>

<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
	{!!Form::label('parcial_3','Parcial 3')!!}
	{!!Form::text('parcial_3',$evaluacion->nota_parcial_3,['class'=>'form-control','placeholder'=>'Parcial 3...'])!!}
</div>

<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
	{!!Form::label('parcial_4','Parcial 4')!!}
	{!!Form::text('parcial_4',$evaluacion->nota_parcial_4,['class'=>'form-control','placeholder'=>'Parcial 4...'])!!}<br>
</div>

<div class="col-md-12">
	{!!Form::label('observaciones','Observaciones')!!}
	{!!Form::textarea('observaciones',null,['class'=>'form-control','size' => '30x5'])!!}<br>
</div>
