<?php
	error_reporting(E_ALL ^ E_NOTICE);
	require_once('MostraAlerta.php');
	require_once('LogicaUsuario.php');
	mostraAlerta('success');
	mostraAlerta('danger');
?>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Consultorio Medico</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilo.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='index.php'><span>Home</span></a></li>
				<li class='has-sub'><a href='#'><span>Cadastros</span></a>
					<ul>
						<li><a href='#'><span>Cadastro Doutor</span></a></li>
						<li><a href='CadastroPaciente.php'><span>Cadastro Paciente</span></a></li>						
						<li class='last'><a href='#'><span>Cadastro Usuário</span></a></li>
					</ul>
				</li>
			<li class='has-sub'><a href='#'><span>Listas</span></a>
				<ul>
					<li><a href='#'><span>Lista de Doutores</span></a></li>
					<li><a href='ListaPaciente.php'><span>Lista de Pacientes</span></a></li>
					<li class='last'><a href='#'><span>Lista de Usuarios</span></a></li>
				</ul>			
			</li>
			<li class='last'><a href='ListaConsultas.php'><span>Consultas Agendadas</span></a></li>
			<li class='last'>
				<?php if(usuarioEstaLogado()) { ?>
					<a href='logout.php'><span>Logout</span></a>
				<?php } ?>
			</li>
	</ul>
</div>
<div class="container">
	<div class="principal">