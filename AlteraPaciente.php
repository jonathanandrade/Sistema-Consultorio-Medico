<?php require_once('cabecalho.php'); 
      require_once('BancoPaciente.php');
      require_once('LogicaUsuario.php');      

    verificaUsuario();

		$id_paciente = $_POST['id_paciente'];
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];
		$sexo = $_POST['sexo'];
		$email = $_POST['email'];
		$endereco = $_POST['endereco'];
		$numero = $_POST['numero'];
		$telefone = $_POST['telefone'];
		$id_estado = $_POST['id_estado'];

		if (array_key_exists('ativo', $_POST)) {
			$ativo = "X"; // X = true (selecionado)
		} else {
			$ativo = ""; // "" = false (nao selecionado)
		}
		
		alteraPaciente($conexao, $id_paciente, $nome, $idade, $id_estado, $ativo, $email, $telefone, $endereco, $numero, $sexo);
    	$_SESSION['success'] = "Produto alterado com sucesso.";
    	header("Location:ListaPaciente.php");
    	die();
		
	?>	
	
<?php include('rodape.php') ?>