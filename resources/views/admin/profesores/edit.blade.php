@extends('layouts.admin')
@section('title', 'Profesores | Modificar')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Editar {{$persona->nombre}} {{$persona->apellidos}}</h3>
                </div>
                <div class="panel-body">
                    @include('errors.alerts.errorUser')
                {!! Form::model($persona,['method'=>'PATCH','route'=>['profesores.update',$persona->id]]) !!}
                    
                    <div class="form-group">
                        @include('admin.profesores.forms.formProfesor')
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

@push ('scripts')
<script>
    $( function() {
      $( "#fecha_nacimiento" ).datepicker({
        dateFormat: "yy-mm-dd",
        firstDay: 1,
        monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
        dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ]
      });
    });
</script>
@endpush

@endsection 