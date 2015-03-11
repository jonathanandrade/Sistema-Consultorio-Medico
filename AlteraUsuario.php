<?php require_once('cabecalho.php'); 
      require_once('BancoUsuario.php');
      require_once('LogicaUsuario.php');      

    verificaUsuario();

		$id_usuario = $_POST['id_usuario'];
		$login = $_POST['login'];		
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];
		$email = $_POST['email'];
		$endereco = $_POST['endereco'];
		$numero = $_POST['numero'];
		$telefone = $_POST['telefone'];
		$id_estado = $_POST['id_estado'];

		$senhaEncrypt = md5($senha);

		alteraUsuario($conexao, $id_usuario, $login, $nome, $idade, $email, $endereco, $numero, $telefone, $id_estado);
    	$_SESSION['success'] = "Usuário alterado com sucesso.";
    	header("Location:ListaUsuario.php");
    	die();
		
	?>	
	
<?php include('rodape.php') ?>