<?php
	require_once('conectar.php');

	function buscaUsuario($conexao, $login, $senha) {
		$senhaMd5 = md5($senha);
		$login = mysqli_real_escape_string($conexao, $login); // Tratamento de aspas no sql

		$query = "select * from usuario where login = '$login' and senha = '$senhaMd5'";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}

	function buscaUsuario2($conexao, $id_usuario) {
		$query = "select * from usuario where id_usuario = '$id_usuario'";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}

	function insereUsuario($conexao, $login, $senha, $nome, $idade, $id_estado, $email, $telefone, $endereco, $numero) {
		$query = "insert into usuario (login, senha, nome, idade, id_estado, email, telefone, endereco, numero) values ('$login', '$senha', '$nome', '$idade', '$id_estado', '$email', '$telefone', '$endereco', '$numero')";
		return mysqli_query($conexao, $query);
	}

	function listaUsuario($conexao) {
		$usuarios = array();
		$resultado = mysqli_query($conexao, "select usuario.*, estado.sigla, estado.descricao from usuario, estado where usuario.id_estado = estado.id_estado");

		while($usuario = mysqli_fetch_assoc($resultado)) {
			array_push($usuarios, $usuario);	
		}	

		return $usuarios;
	}

	function removeUsuario($conexao, $id_usuario) {
		$query = "delete from usuario where id_usuario = '$id_usuario'";
		return mysqli_query($conexao, $query);
	}

	function alteraUsuario($conexao, $id_usuario, $login, $nome, $idade, $email, $endereco, $numero, $telefone, $id_estado) {
		$query = "update usuario set login = '$login', nome = '$nome', idade = '$idade', email = '$email', endereco = '$endereco', numero = '$numero', telefone = '$telefone', id_estado = '$id_estado' where id_usuario = '$id_usuario'";
		return mysqli_query($conexao, $query);
	}

?>