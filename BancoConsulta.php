<?php
	require_once('conectar.php');

	function listaConsultas($conexao) {
		$consultas = array();
		$resultado = mysqli_query($conexao, "SELECT c.id_consulta, p.nome, c.data_consulta, c.hora FROM consulta c JOIN paciente p ON (c.id_paciente = p.id_paciente) and c.atendida = ''");

		while($consulta = mysqli_fetch_assoc($resultado)) {
			array_push($consultas, $consulta);	
		}	

		return $consultas;
	}

	function insereConsulta($conexao, $id_paciente, $data_consulta, $hora, $atendida, $observacao) {
		$query = "insert into consulta (id_paciente, data_consulta, hora, atendida, observacao) values ('$id_paciente', '$data_consulta', '$hora', '$atendida', '$observacao')";		
		return mysqli_query($conexao, $query);
	}
	
	function removeConsulta($conexao, $id_consulta) {
		$query = "delete from consulta where id_consulta = '$id_consulta'";
		return mysqli_query($conexao, $query);
	}

	function buscaConsulta($conexao, $id_consulta) {
		$query = "select * from consulta where id_consulta = '$id_consulta'";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}

	function buscaConsultaPaciente($conexao, $id_paciente) {
		$query = "select * from paciente where id_paciente = '$id_paciente'";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}

    function alteraConsulta($conexao, $id_consulta, $data_consulta, $hora, $observacao, $atendida) {
		$query = "update consulta set data_consulta = '$data_consulta', hora = '$hora', observacao = '$observacao', atendida = '$atendida' where id_consulta = '$id_consulta'";
		return mysqli_query($conexao, $query);
	}

?>