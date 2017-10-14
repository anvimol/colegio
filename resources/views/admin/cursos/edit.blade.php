@extends('layouts.admin')
@section('title', 'Cursos | Editar')
@section('content')
@include('errors.alerts.errorUser')
	<h2 class="text-center text-uppercase">Nuevo Curso</h2>
	{!! Form::model($curso,['method'=>'PATCH','route'=>['cursos.update',$curso->id]]) !!}
		@include('admin.cursos.forms.formCurso')
	{!! Form::close() !!}

@push ('scripts')
<script>
    $( function() {
      $( "#fecha" ).datepicker({
      	dateFormat: "yy-mm-dd",
      	firstDay: 1,
      	monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
	  	dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ]
	  });
      $( "#fecha1" ).datepicker({
      	dateFormat: "yy-mm-dd",
      	firstDay: 1,
      	monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
	  	dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ]
	  });
    });
</script>
@endpush

@endsection