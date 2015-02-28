<?php 
	error_reporting(E_ALL ^ E_NOTICE);
	require_once('MostraAlerta.php');

	mostraAlerta('success');
	mostraAlerta('danger');
?>

<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Consultorio Medico</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				 <a class="navbar-brand" href="index.php">Consultorio Medico</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="CadastroPaciente.php">Cadastro de Paciente</a></li>
					<li><a href="ListaPaciente.php">Pacientes</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="principal">