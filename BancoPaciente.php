<?php
	require_once('conectar.php');

	function listaPacientes($conexao) {
		$pacientes = array();
		$resultado = mysqli_query($conexao, "select paciente.*, estado.sigla, estado.descricao from paciente, estado where paciente.id_estado = estado.id_estado");

		while($paciente = mysqli_fetch_assoc($resultado)) {
			array_push($pacientes, $paciente);	
		}	

		return $pacientes;
	}

	function inserePaciente($conexao, $nome, $idade, $id_estado, $ativo, $email, $telefone, $endereco, $numero, $sexo) {
		$query = "insert into paciente (nome, idade, id_estado, ativo, email, telefone, endereco, numero, sexo) values ('$nome', '$idade', '$id_estado', '$ativo', '$email', '$telefone', '$endereco', '$numero', '$sexo')";
		return mysqli_query($conexao, $query);
	}
	
	function removePaciente($conexao, $id_paciente) {
		$query = "delete from paciente where id_paciente = '$id_paciente'";
		return mysqli_query($conexao, $query);
	}

	function buscaPaciente($conexao, $id_paciente) {
		$query = "select * from paciente where id_paciente = '$id_paciente'";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}

	function alteraPaciente($conexao, $id_paciente, $nome, $idade, $id_estado, $ativo, $email, $telefone, $endereco, $numero, $sexo) {
		$query = "update paciente set nome = '$nome', idade = '$idade', id_estado = '$id_estado', ativo = '$ativo', email = '$email', telefone = '$telefone', endereco = '$endereco', numero = '$numero', sexo = '$sexo' where id_paciente = '$id_paciente'";
		return mysqli_query($conexao, $query);
	}

?>