@extends('layouts.admin')
@section('title', 'Evaluaciones | Modificar')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Editar</h3>
                </div>
                <div class="panel-body">
                    @include('errors.alerts.errorUser')
                {!! Form::model($evaluacion,['method'=>'PATCH','route'=>['evaluaciones.update',$evaluacion->id]]) !!}
                    
                    <div class="form-group">
                        @include('admin.evaluacion.forms.formEvaluaciones')
                        <div class="text-center col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            {!!Form::submit('Modificar',['class'=>'btn btn-primary'])!!}
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