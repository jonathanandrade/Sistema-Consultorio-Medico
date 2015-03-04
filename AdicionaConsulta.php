<?php require_once('cabecalho.php'); 
      require_once('BancoConsulta.php');
      require_once('LogicaUsuario.php');      

    verificaUsuario();	  

	$id_paciente = $_POST['id_paciente'];
	$data_consulta = $_POST['data_consulta'];
	$hora = $_POST['hora'];
	$observacao = $_POST['observacao'];

	if (array_key_exists('atendida', $_POST)) {
		$atendida = "X"; // X = true (selecionado)
	} else {
		$atendida = ""; // "" = false (nao selecionado)
	}
	
	insereConsulta($conexao, $id_paciente, $data_consulta, $hora, $atendida, $observacao);
    $_SESSION['success'] = "Consulta agendada com sucesso.";
    header("Location:ListaPaciente.php");
	die();
?>	
	
<?php include('rodape.php') ?>