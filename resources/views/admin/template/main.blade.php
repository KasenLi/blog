 <?php
 header("Access-Control-Allow-Origin: *"); 
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<title>@yield('title', 'Default') | Panel de Administración</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fontawesome-all.css')}}">
	<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap-fileinput/css/fileinput.css') }}">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" media="all" href="{{ asset('plugins/bootstrap-fileinput/themes/explorer-fa/theme.css') }}">
</head>
<body style="background: #EDEDED;">
	@include('admin.template.partials.nav')
	<section class="title">
		@yield('title')
	</section>
	<section class="page-content">
		@include('flash::message')
		@include('admin.template.partials.errors')
		@yield('content')
	</section>
	

	<footer class="page-footer">
		<hr>
		Todos los derechos reservados &copy {{ date('Y')}}
		<div class="float-right">Blog K</div>
	</footer>
	
	<script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js')}}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
	<script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="{{ asset('plugins/bootstrap-fileinput/js/plugins/piexif.js')}}"></script>
	<script src="{{ asset('plugins/bootstrap-fileinput/js/fileinput.js')}}"></script>
	<script src="{{ asset('plugins/bootstrap-fileinput/themes/fa/theme.js')}}"></script>
	<script src="{{ asset('plugins/bootstrap-fileinput/themes/explorer-fa/theme.js')}}"></script>
	<script src="{{ asset('plugins/bootstrap-fileinput/js/locales/es.js')}}"></script>
	@yield('js')
</body>
</html>