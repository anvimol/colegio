@extends ('layouts.admin')
@section('title', 'Profesores')
@section ('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Profesores <a href="{{ route('profesores.create') }}"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('admin.profesores.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>DNI</th>
					<th>Dirección</th>
					<th>Población</th>
					<th>Provincia</th>
					<th>Teléfono</th>
					<th>Opciones</th>
				</thead>
				@foreach ($personas as $per)
				<tr>
					<td>{{ $per->nombre }}</td>
					<td>{{ $per->apellidos }}</td>
					<td>{{ $per->dni }}</td>
					<td>{{ $per->direccion }}</td>
					<td>{{ $per->poblacion }}</td>
					<td>{{ $per->provincia }}</td>
					<td>{{ $per->telefono }}</td>
					<td><a href="{{ route('profesores.edit', $per->id)}}"><button class="btn btn-info">Editar</button></a>
					<a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('admin.profesores.modal')
				@endforeach
			</table>
		</div>
		{{ $personas->render() }} <!-- paginación -->
	</div>
</div>

@endsection