<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
	<title>Acceso restringido</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/error.css')}}">
</head>
<body>
<div class="row" style="margin-top: 3%;">
	<div class="col-md-4 offset-md-4">
		<div class="card bg-warning" style="margin:auto; width: 100%;">
			<div class="card-header">
				<div class="card-title">Acceso Restringido</div>
			</div>
			<div class="card-body">
				<img src="{{ asset('images/error/error.png')}}" class="img-fluid center-block" style="width: 100%;">
				<strong class="text-center">
					<p class="text-center">Usted no tiene permisos para acceder a este área</p>
					<p>
						<button onclick="volverAtras()" class="btn btn-info">Volver atrás</button>
					</p>
					<p> Ó </p>
					<p>
						<a href="{{ route('admin.welcome.index')}}">¿Deseas volver al inicio?</a>
					</p>
				</strong>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function volverAtras(){
		window.history.back();
	}
	
</script>
</body>
</html>