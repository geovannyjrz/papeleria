<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="img/apple-touch-icon.ico" rel="apple-touch-icon" />
	<link href="img/icon-hires.ico" rel="icon" sizes="192x192" />
	<link href="img/icon-normal.ico" rel="icon" sizes="128x128" />
	<link rel="shortcut icon" type="image/x-icon" href="img/icon-normal.ico" />

	<title>Papalería</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
	<header>
		@include('layouts.navbar')	
	</header>

	<main class="container-fluid">
		<br>
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" id="internet-tab" data-toggle="tab" href="#internet" role="tab" aria-controls="internet" aria-expanded="true">Internet</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="monografias-tab" data-toggle="tab" href="#monografias" role="tab" aria-controls="home" aria-expanded="true">Monografías</a>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					Relieves
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" id="dropdown1-tab" href="#animales" role="tab" data-toggle="tab" aria-controls="dropdown1">Animales</a>
					<a class="dropdown-item" id="dropdown2-tab" href="#plantas" role="tab" data-toggle="tab" aria-controls="dropdown2">Plantas</a>
				</div>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="internet" role="tabpanel" aria-labelledby="home-tab">
				@yield('internet')
			</div>
			<div class="tab-pane fade show" id="monografias" role="tabpanel" aria-labelledby="home-tab">
				@yield('monografias')
			</div>

			<div class="tab-pane fade" id="animales" role="tabpanel" aria-labelledby="dropdown2-tab">
				@yield('rel-animales')
			</div>
			<div class="tab-pane fade" id="plantas" role="tabpanel" aria-labelledby="dropdown2-tab">
				@yield('rel-plantas')
			</div>
		</div>
	</main>
	<footer>
		@include('layouts.footer')
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="js/moment.js"></script>
	<script src="js/internet.js"></script>
</body>
</html>