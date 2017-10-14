@extends ('layouts.admin')
@section('title', 'Cursos')
@section ('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Cursos <a href="{{ route('cursos.create')}}"><button class="btn btn-success">Nuevo</button></a></h3>
		{{-- @include('almacen.categoria.search') --}}
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Curso</th>
					<th>Fecha Inicio</th>
					<th>Fecha Fin</th>
					<th>Hora Inicio</th>
					<th>Hora Fin</th>
					<th>Opciones</th>
				</thead>
			    @foreach ($cursos as $curso)
				<tr>
					<td>{{ $curso->curso }}</td>
					<td>{{ Carbon\Carbon::parse($curso->fecha_inicio)->format('d-m-Y') }}</td>
					<td>{{ Carbon\Carbon::parse($curso->fecha_fin)->format('d-m-Y') }}</td>
					<td>{{ $curso->hora_inicio }}</td>
					<td>{{ $curso->hora_fin }}</td>
					<td><a href="{{URL::action('CursoController@edit',$curso->id)}}"><button class="btn btn-info">Editar</button></a>
					<a href="" data-target="#modal-delete-{{$curso->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
					@include('admin.cursos.modal')
				@endforeach 
			</table>
		</div>
		{{ $cursos->render() }} <!-- paginación -->
	</div>
</div>
@endsection