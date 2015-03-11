<?php require_once('cabecalho.php'); 
      require_once('BancoUsuario.php');
      require_once('LogicaUsuario.php');      

    verificaUsuario();	  

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$id_estado = $_POST['id_estado'];

	$senhaEncrypt = md5($senha);

	insereUsuario($conexao, $login, $senhaEncrypt, $nome, $idade, $id_estado, $email, $telefone, $endereco, $numero);
    $_SESSION['success'] = "Usuário adicionado com sucesso.";
    header("Location:CadastroUsuario.php");
	die();
?>	
	
<?php include('rodape.php') ?>