@extends('admin.template.main')

@section('title') 
    Home
@endsection

@section('content')
    <div>
        
        <h1>Blog K</h1>
        <hr>
        @foreach($articles as $article)
			<div class="card">
			  <div class="card-header">
			    {{$article->title}}
			  </div>
			  <div class="card-body">
			    <blockquote class="blockquote mb-0">
			      
			      <footer class="blockquote-footer">Creado por <cite title="Source Title">{{ $article->user->name }}</cite></footer>
			    </blockquote>
			    
			  </div>
			  <div class="card-footer text-muted">
					<i class="fa fa-clock"></i> {{$article->created_at->diffForHumans()}}
				</div>
			</div>
			<hr>
        @endforeach
    </div>
@endsection
