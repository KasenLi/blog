@extends('admin.template.main')

@section('title', 'Listado de Categorías')

@section('content')
	@if(Auth::user()->type == "admin")
	<a href="{{ route('categories.create') }}" class="btn btn-info">Registrar nueva categoría</a>
	@endif
	<!--Buscador de tags -->
	{!! Form::open(['route' => 'categories.index', 'method' => 'GET','class' => 'navbar-form float-right']) !!}
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
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					
					<td>
						@if(Auth::user()->type == "admin")
						<a href="{{ URL::to('admin/categories/' . $category->id . '/edit')}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

						<a onclick="return confirm('¿Seguro que deseas eliminar el usuario?')" href="{{ route('admin.categories.destroy', $category->id) }}"  class="btn btn-danger"><i class="fas fa-times"></i></a>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $categories->render() !!}
	</div>
@endsection
