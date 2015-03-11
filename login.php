<?php include('conectar.php');
	  require_once('BancoUsuario.php');
	  require_once('LogicaUsuario.php');  	  

	  $usuario = buscaUsuario($conexao, $_POST['login'], $_POST['senha']);

	  if ($usuario == null) {
	  	$_SESSION['danger'] = "Usuário ou senha inválida.";
	  	header("Location: index.php");
	  } else {
	  	$_SESSION['success'] = "Usuário logado com sucesso..";
	  	logaUsuario($usuario['login']);
	  	header("Location: index.php");
	  }

	  die();

?>
