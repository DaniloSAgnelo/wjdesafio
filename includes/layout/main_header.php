<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title></title>

			<!-- Fonts do Google -->
			<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

			<!-- CSS Bootstrap -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

			<!-- CSS Aplicação -->
			<link rel="stylesheet" href="includes/css/styles.css" class="">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
			<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
			
			<!-- js Aplicação -->
			<link rel="stylesheet" href="includes/js/scripts.js" class="">

			<link rel="icon" type="image/x-icon" href="includes/img/favicon.ico">

			<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
			<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

			<script type="text/javascript" language="javascript">
			$(document).ready(function() {
					$('#listar-usuarios').DataTable();
			} );
			</script>
	</head>
	<body>
		<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
			<a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
				<img src="includes/img/logo.jpg" alt="logo" class="img-logo">
				<span class="fs-4">WJ Desafio</span>
			</a>
			<ul class="nav nav-pills">
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="grid_produtos.php" class="nav-link">Produtos</a></li>
				<li class="nav-item"><a href="grid_categorias.php" class="nav-link">Categorias</a></li>
				
			</ul>
		</header>
