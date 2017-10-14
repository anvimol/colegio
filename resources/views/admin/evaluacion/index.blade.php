@extends ('layouts.admin')
@section ('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Evaluaciones <a href="{{ route('evaluaciones.create')}}"><button class="btn btn-success">Crear</button></a></h3>
		@include('admin.evaluacion.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre</th>
					<th>Curso</th>
					<th>Parcial 1</th>
					<th>Parcial 2</th>
					<th>Parcial 3</th>
					<th>Parcial 4</th>
					<th>Nota Final</th>
					<th>Observaciones</th>
					<th>Opciones</th>
				</thead>
			    @foreach ($evaluaciones as $evaluacion)
				<tr>
					<td>{{ $evaluacion->nombre }} {{ $evaluacion->apellidos }}</td>
					<td>{{ $evaluacion->curso }}</td>
					<td>{{ $evaluacion->nota_parcial_1 }}</td>
					<td>{{ $evaluacion->nota_parcial_2 }}</td>
					<td>{{ $evaluacion->nota_parcial_3 }}</td>
					<td>{{ $evaluacion->nota_parcial_4 }}</td>
					<td>
						@if ($evaluacion->nota_parcial_1 == "" || $evaluacion->nota_parcial_2 == "" || $evaluacion->nota_parcial_3 == ""|| $evaluacion->nota_parcial_4 == "")
							{{""}}
						@else
							{{ $evaluacion->nota_final }}
						@endif
					</td>
					<td>{{ $evaluacion->observaciones }}</td>
					<td><a href="{{ route('evaluaciones.edit', $evaluacion->id)}}"><button class="btn btn-info">Editar</button></a>
					<a href="" data-target="#modal-delete-{{$evaluacion->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
					@include('admin.evaluacion.modal')
				@endforeach 
			</table>
		</div>
		{{ $evaluaciones->render() }} <!-- paginación -->
	</div>
</div>
@endsection