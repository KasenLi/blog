@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
	<a href="{{ route('users.create') }}" class="btn btn-info">Registrar nuevo usuario</a>
	<!--Buscador de usuarios -->
	{!! Form::open(['route' => 'users.index', 'method' => 'GET','class' => 'navbar-form float-right']) !!}
		<div class="input-group mb-3">
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar usuario...', 'aria-describedby' => 'search']) !!}
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
			<th>Correo</th>
			<th>Tipo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email}}</td>
					<td>
						@if($user->type == "admin")
							<span class="badge badge-danger">{{ $user->type }}</span>
						@else
							<span class="badge badge-primary">{{ $user->type }}</span>
						@endif
					</td>
					<td>
						<a href="{{ URL::to('admin/users/' . $user->id . '/edit')}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

						<a onclick="return confirm('¿Seguro que deseas eliminar el usuario?')" href="{{ route('admin.users.destroy', $user->id) }}"  class="btn btn-danger"><i class="fas fa-times"></i></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $users->render() !!}
	</div>
	
@endsection