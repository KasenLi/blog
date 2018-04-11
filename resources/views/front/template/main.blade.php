<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title','Home') | Blog K</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/sandstone/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('css/general.css')}}">
	<link rel="stylesheet" href="{{ asset('css/fontawesome-all.css')}}">
</head>
<body>
	@include('front.template.partials.nav')
	<header>
		@include('front.template.partials.header')
	</header>
	<div class="container jumbotron" style="">
		
		@yield('content')
	
	</div>
	<footer class="page-footer">
		<hr>
		Todos los derechos reservados &copy {{ date('Y')}}
		<div class="float-right">Blog K</div>
	</footer>
	<script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js')}}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>