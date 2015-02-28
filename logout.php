<?php

	require_once('LogicaUsuario.php');
	logout();
	$_SESSION['success'] = "Deslogado com sucesso.";
	header("Location: index.php");
	die();
	
?>