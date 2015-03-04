<?php require_once('cabecalho.php');     
      require_once('BancoConsulta.php');
      require_once('LogicaUsuario.php');
      
    verificaUsuario();

    $id_consulta = $_POST['id_consulta'];
    removeConsulta($conexao, $id_consulta);
    $_SESSION['success'] = "Consulta removida com sucesso.";

	header("Location:ListaConsultas.php");
	die();
?>