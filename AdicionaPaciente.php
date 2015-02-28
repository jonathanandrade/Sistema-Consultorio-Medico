<?php require_once('cabecalho.php'); 
      require_once('BancoPaciente.php');
      require_once('LogicaUsuario.php');      

    verificaUsuario();	  

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$sexo = $_POST['sexo'];
	$id_estado = $_POST['id_estado'];

	if (array_key_exists('ativo', $_POST)) {
		$ativo = "X"; // X = true (selecionado)
	} else {
		$ativo = ""; // "" = false (nao selecionado)
	}
	
	inserePaciente($conexao, $nome, $idade, $id_estado, $ativo, $email, $telefone, $endereco, $numero, $sexo);
    $_SESSION['success'] = "Produto adicionado com sucesso.";
    header("Location:CadastroPaciente.php");
	die();
?>	
	
<?php include('rodape.php') ?>