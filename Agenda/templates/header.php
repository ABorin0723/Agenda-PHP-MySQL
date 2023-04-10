<?php 
	include_once('config/url.php');
	include_once('config/process.php');

	if (isset($_SESSION['msg'])) {
		$printMsg = $_SESSION['msg'];

		$_SESSION['msg'] = '';
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Agenda de Contatos PW22</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/b94f8b2453.js" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>css/style.css">
	</head>

	<body>

		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
					<img src="<?= $BASE_URL ?>img/agenda.png" alt="Agenda PW22">
				</a>
				<div>
					<div class="navbar-nav">
						<a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
						<a class="nav-link active"  href="<?= $BASE_URL ?>create.php">Adicionar Contato</a>
					</div>
				</div>

			</nav>
		</header>