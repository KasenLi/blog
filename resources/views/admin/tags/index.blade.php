@extends('admin.template.main')

@section('title', 'Listado de tags')

@section('content')
	@if(Auth::user()->type == "admin")
	<a href="{{ route('tags.create') }}" class="btn btn-info">Registrar nuevo tag</a>
	@endif
	<!--Buscador de tags -->
	{!! Form::open(['route' => 'tags.index', 'method' => 'GET','class' => 'navbar-form float-right']) !!}
		<div class="input-group mb-3">
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag...', 'aria-describedby' => 'search']) !!}
			<div class="input-group-append">
				<span class="input-group-text" id="search"><i class="fas fa-search"></i></span>
			</div>
		</div>
	{!! Form::close() !!}
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($tags as $tag)
				<tr>
					<td>{{ $tag->id}}</td>
					<td>{{ $tag->name}}</td>
					<td>
						<a href="{{ URL::to('admin/tags/' . $tag->id . '/edit') }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

						<a onclick="return confirm('¿Seguro que deseas eliminar el usuario?')" href="{{ route('admin.tags.destroy', $tag->id) }}"  class="btn btn-danger"><i class="fas fa-times"></i></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $tags->render() !!}
	</div>
@endsection