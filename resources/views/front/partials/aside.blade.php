<div class="card border-secondary badge-light">
	<div class="card bg-primary text-white">
		<div class="card-header">
			<h3 class="card-title">Categorías</h3>
		</div>
		<div class="card-body">
			<ul class="list-group">
				@foreach($categories as $category)
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a href="{{route('front.search.category', $category->name)}}">{{ $category->name}}
						</a>
						<span class="badge badge-primary">{{$category->articles->count()}}</span>

					</li>
				@endforeach
			</ul>
		</div>
	</div>
	<br>
	<div class="card badge-primary">
		<div class="card-header">
			<h3 class="card-title">Tags</h3>
		</div>
		<div class="card-body">
			@foreach($tags as $tag)
				<span class="badge badge-light">
					<a href="{{route('front.search.tag', $tag->name)}}">{{ $tag->name}}
					</a>
				</span>
			@endforeach
		</div>
	</div>
</div>