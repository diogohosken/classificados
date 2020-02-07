<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Classificados</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css"/>

</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark text-light align-items-center">
		<a class="navbar-brand text-light h4" href="#">Classy <i class="fas fa-shopping-bag"></i></a>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<a class="nav-item m-2 nav-link text-light" href="">Comprar <i class="fas fa-caret-down"></i></a>
			<a class="nav-item m-2 nav-link text-light" href="">Vender <i class="fas fa-caret-down"></i></a>
			<a class="nav-item m-2 nav-link text-light" href="">Perto de Você</a>
			<div class="navbar-nav dir">
				<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin']) ): ?>

					<a class="nav-item m-2 nav-link text-light" href="meus-anuncios.php">Meus Anúncios</a>
					<a class="nav-item m-2 nav-link text-light" href="sair.php">Sair</a>

				<?php else: ?>

					<a class="nav-item m-2 nav-link text-light" href="cadastro.php"><i class="fas fa-user-plus"></i> Cadastre-se</a>
					<a class="nav-item m-2 nav-link text-light" href="login.php"><i class="fas fa-user"></i> Login</a>

				<?php endif; ?>
			</div>
		</div>
	</nav>