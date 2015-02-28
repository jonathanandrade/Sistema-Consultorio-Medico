<?php require_once('cabecalho.php');     
      require_once('BancoPaciente.php');
      require_once('LogicaUsuario.php');
      
    verificaUsuario();


    $id_paciente = $_POST['id_paciente'];
    removePaciente($conexao, $id_paciente);
    $_SESSION['success'] = "Produto removido com sucesso.";

	header("Location:ListaPaciente.php");
	die();
?>