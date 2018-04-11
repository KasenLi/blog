@extends('admin.template.main')

@section('title', 'Agregar nuevo artículo')

@section('content')
	{!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true, 'enctype' =>'multipart/form-data']) !!}
		<div class="form-group">
			{!! Form::label('title', 'Título') !!}
			{!! Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'Título del artículo...', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id', 'Categoría') !!}
			{!! Form::select('category_id', $categories,null, ['class' => 'form-control select-category', 'placeholder' => 'Seleccione una categoría...', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content', 'Contenido') !!}
			{!! Form::textarea('content',null, ['class' => 'form-control textarea-content', 'placeholder' => 'Contenido del artículo...', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags', 'Tags') !!}
			{!! Form::select('tags[]', $tags,null, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('image', 'Imagen') !!}
			<div class="file-loading">
				{!! Form::file('image', ['class' => 'input-image file', 'data-preview-file-type'=>"text", 'data-overwrite-initial'=>"false",'data-upload-url'=>"#"]) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::submit('Agregar artículo', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection

@section('js')
	<script>
	$('.select-tag').chosen({
		placeholder_text_multiple: 'Seleccione un máximo de 3 tags',
		max_selected_options: 3,
		no_results_text: 'No se ha encontrado el tag ',
		width: "100%"
	});
	$('.select-category').chosen({
		width: "100%"
	});

	$('.textarea-content').trumbowyg();

	$('.input-image').fileinput({
		theme:'fa',
		language: 'es',
		maxFileCount: 1,
		showUpload: false,
		showPreview: true,
		allowedFileExtensions: ['jpg', 'png', 'gif'],
		fileActionSettings: {showUpload: false},
		resizeImage: true,
		maxImageWidth: 200,
    	maxImageHeight: 200,
		resizePreference: 'height'
	});
</script>
@endsection