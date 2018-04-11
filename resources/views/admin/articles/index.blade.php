@extends('admin.template.main')

@section('title', 'Listado de artículos')

@section('content')
	<a href="{{ route('articles.create') }}" class="btn btn-info">Registrar nuevo artículo</a>
	<!--Buscador de artículos -->
	{!! Form::open(['route' => 'articles.index', 'method' => 'GET','class' => 'navbar-form float-right']) !!}
		<div class="input-group mb-3">
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar artículo...', 'aria-describedby' => 'search']) !!}
			<div class="input-group-append">
				<span class="input-group-text" id="search"><i class="fas fa-search"></i></span>
			</div>
		</div>
	{!! Form::close() !!}
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Título</th>
			<th>Categoría</th>
			<th>User</th>
			<th>Acción</th>
		</thead>
		<tbody>
			
			@foreach($articles as $article)
				<tr>
					<td>{{ $article->id }}</td>
					<td>{{ $article->title }}</td>
					<td>{{ $article->category->name }}</td>
					<td>{{ $article->user->name }}</td>
					<td>
						@if(Auth::user()->type == "admin" || $article->user == Auth::user())
						<a href="{{ URL::to('admin/articles/' . $article->id . '/edit')}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

						<a onclick="return confirm('¿Seguro que deseas eliminar el usuario?')" href="{{ route('admin.articles.destroy', $article->id) }}"  class="btn btn-danger"><i class="fas fa-times"></i></a>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $articles->render() !!}
	</div>
@endsection