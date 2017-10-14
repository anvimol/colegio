@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevas Calificaciones</h3>
                </div>
                <div class="panel-body">
                    @include('errors.alerts.errorUser')
                {!! Form::open(['route'=>'evaluaciones.store','method'=>'POST']) !!}
                    
                    <div class="form-group">
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
                        {!!Form::text('parcial_1',null,['class'=>'form-control','placeholder'=>'Parcial 1...'])!!}
                    </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        {!!Form::label('parcial_2','Parcial 2')!!}
                        {!!Form::text('parcial_2',null,['class'=>'form-control','placeholder'=>'Parcial 2...'])!!}
                    </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        {!!Form::label('parcial_3','Parcial 3')!!}
                        {!!Form::text('parcial_3',null,['class'=>'form-control','placeholder'=>'Parcial 3...'])!!}
                    </div>

                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                        {!!Form::label('parcial_4','Parcial 4')!!}
                        {!!Form::text('parcial_4',null,['class'=>'form-control','placeholder'=>'Parcial 4...'])!!}<br>
                    </div>

                    <div class="col-md-12">
                        {!!Form::label('observaciones','Observaciones')!!}
                        {!!Form::textarea('observaciones',null,['class'=>'form-control','size' => '30x5'])!!}<br>
                    </div>
						<div class="text-center col-lg-12 col-sm-12 col-md-12 col-xs-12">
	                        {!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	                        {{--{{!!Form::submit({{(isset($data)) ? $data['button'] : 'Agregar'}},['class'=>'btn btn-primary'])!!}--}}
	                        
							{!!Form::button('Cancelar',['class'=>'btn btn-danger','type' => 'reset'])!!}
                    	</div>
                    </div>    
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection 