<?php require_once('cabecalho.php');     
      require_once('BancoUsuario.php');
      require_once('LogicaUsuario.php');
      
    verificaUsuario();

    $id_usuario = $_GET['id_usuario'];

    removeUsuario($conexao, $id_usuario);
    $_SESSION['success'] = "Usuário removido com sucesso.";

	header("Location:ListaUsuario.php");
	die();
?>