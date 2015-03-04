<?php require_once('cabecalho.php'); 
      require_once('BancoConsulta.php');
      require_once('LogicaUsuario.php');      

    verificaUsuario();

		$id_consulta = $_POST['id_consulta'];
		$data_consulta = $_POST['data_consulta'];
		$hora = $_POST['hora'];
		$observacao = $_POST['observacao'];

		if (array_key_exists('atendida', $_POST)) {
			$atendida = "X"; // X = true (selecionado)
		} else {
			$atendida = ""; // "" = false (nao selecionado)
		}
		
		alteraConsulta($conexao, $id_consulta, $data_consulta, $hora, $observacao, $atendida);
    	$_SESSION['success'] = "Consulta alterada com sucesso.";
    	header("Location:ListaConsultas.php");
    	die();
		
	?>	
	
<?php include('rodape.php') ?>