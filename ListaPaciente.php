<?php require_once('cabecalho.php');	  
	  require_once('BancoPaciente.php');
	  require_once('LogicaUsuario.php');      

      verificaUsuario();  ?>

<h1>Lista de Pacientes</h1>
<table class="table table-striped table-responsive">
<th>CÓDIGO</th>
<th>NOME</th>
<th>IDADE</th>
<th>SEXO</th>
<th>EMAIL</th>
<th>TELEFONE</th>
<th>ENDEREÇO</th>
<th>NUM</th>
<th>UF</th>
<th>FUNÇÕES</th>
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
			<td width="30%">
				<a href="CadastroConsulta.php?id_paciente=<?=$paciente['id_paciente']?>" class="btn btn-warning">Consulta</a>
				<a href="AlteraPacienteFormulario.php?id_paciente=<?=$paciente['id_paciente']?>" class="btn btn-primary">Alterar</a>
				<a href="#"
				   onclick="javascript: if(confirm('Deseja realmente excluir ?'))
				   				location.href='RemovePaciente.php?id_paciente=<?php echo $paciente['id_paciente'];?>'" class="btn btn-danger">Excluir</a>
			</td>
		</tr>
	<?php
		}
	?>
</table>

<?php include('rodape.php') ?>