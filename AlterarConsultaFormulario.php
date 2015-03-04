<?php include('cabecalho.php');
	  include('conectar.php');
	  include('BancoConsulta.php');

	$id_consulta = $_GET['id_consulta'];
	$consulta = buscaConsulta($conexao, $id_consulta);

	if ($consulta['atendida'] == "X") {
		$atendida = "checked='checked'";
	} else {
		$atendida = "";
	}

?>

<h1>Alterar Dados da Consulta</h1>
<div class="container" id="formsConsulta">
	<form action="AlteraConsulta.php" method="post">
		<table class="table">
			<tr>
				<td><label>Código do Paciente:</label></td>
				<td width="80%"><input type="text" name="id_paciente" class="form-control" readonly value="<?=$consulta['id_paciente']?>"></td>
			</tr>			
			<tr>
				<td><label>Número da Consulta:</label></td>
				<td><input type="number" name="id_consulta" class="form-control" readonly value="<?=$consulta['id_consulta']?>"></td>
			</tr>
			<tr>
				<td><label>Data:</label></td>
				<td><input type="text" name="data_consulta" class="form-control" value="<?=$consulta['data_consulta']?>"></td>
			</tr>
			<tr>
				<td><label>Horário:</label></td>
				<td><input type="text" name="hora" class="form-control" value="<?=$consulta['hora']?>"></td>
			</tr>
			<tr>
				<td><label>Consulta Atendida:</label></td>
				<td><input type="checkbox" name="atendida" <?=$atendida?> value="true"></td>
			</tr>
			<tr>
				<td><label>Observações:</label></td>
				<td><textarea name="observacao" class="form-control" text="<?=$consulta['observacao']?>"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Salvar" class="btn btn-primary">				
					<a href="ListaConsultas.php" class="btn btn-warning">Voltar</a>					
				</td>
			</tr>			
		</table>
	</form>
</div>
	
	
<?php include('rodape.php') ?>