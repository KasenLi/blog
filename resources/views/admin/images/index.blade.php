@extends('admin.template.main')

@section('title', 'Listado de imágenes')

@section('content')
	<div class="row">
		@foreach($images as $image)
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
  					<img class="card-img-top" src="admin/images/articles/{{ $image->name}}" alt="Card image cap">
  					<div class="card-body">
    					<p class="card-text">{{$image->article->title}}</p>
  					</div>
				</div>
			</div>
		@endforeach
	</div>
@endsection