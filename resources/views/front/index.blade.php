@extends('front.template.main')

@section('content')
	
	<h3 class="title-front left" style="">Últimos Artículos</h3>
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				@foreach($articles as $article)
				<div class="col-md-6">
					<div class="card border-danger">
						<div class="card-body" style="">
							<a href="{{route('front.view.article', $article->slug)}}" class="thumbnail">
							@foreach($article->images as $image)
								<img class="card-img-top" src="{{asset('images/articles/' . $image->name)}}" alt="..." style="height: 250px;">
							@endforeach
							</a>
							<a href="{{route('front.view.article', $article->slug)}}">
								<h5 class="text-center" style="">{{ $article->title}}</h5>
							</a>
							<hr>
							<i class="fa fa-folder-open"></i> <a href="{{route('front.search.category', $article->category->name) }}">{{ $article->category->name}}
							</a>
							<div class="float-right">
								<i class="fa fa-clock"></i> {{$article->created_at->diffForHumans()}}
							</div>
						</div>
					</div>
					<br>
				</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-4 aside">
			@include('front.partials.aside')
		</div>
	</div>
	<div class="text-center">
		{!! $articles->render() !!}
	</div>
	
@endsection