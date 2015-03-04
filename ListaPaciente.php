<?php require_once('cabecalho.php');	  
	  require_once('BancoPaciente.php');
	  require_once('LogicaUsuario.php');      

      verificaUsuario();  ?>

<table class="table table-striped table-bordered">
<th>CÓDIGO</th>
<th>NOME</th>
<th>IDADE</th>
<th>SEXO</th>
<th>EMAIL</th>
<th>TELEFONE</th>
<th>ENDEREÇO</th>
<th>NUM</th>
<th>UF</th>
<th>CONSULTA</th>
<th>#</th>
<th>#</th>
	<?php
		$pacientes = listaPacientes($conexao);	
		foreach($pacientes as $paciente) {
	?>
		<tr>
			<td><?= $paciente['id_paciente'] ?> </td>
			<td><?= $paciente['nome'] ?> </td>
			<td><?= $paciente['idade'] ?> </td>
			<td><?= $paciente['sexo'] ?> </td>
			<td><?= $paciente['email'] ?> </td>
			<td><?= $paciente['telefone'] ?> </td>
			<td><?= $paciente['endereco'] ?> </td>
			<td><?= $paciente['numero'] ?> </td>
			<td><?= $paciente['sigla'] ?> </td>
			<td><a href="CadastroConsulta.php?id_paciente=<?=$paciente['id_paciente']?>" class="btn btn-warning">Consulta</a> </td>
			<td><a href="AlteraPacienteFormulario.php?id_paciente=<?=$paciente['id_paciente']?>" class="btn btn-primary">Alterar</a></td>
			<td>
				<form action="RemovePaciente.php" method="post">
					<input type="hidden" name="id_paciente" value="<?=$paciente['id_paciente']?>">
					<button class="btn btn-danger">Remover</a>					
				</form>
			</td>	
		</tr>
	<?php
		}
	?>
</table>

<?php include('rodape.php') ?>