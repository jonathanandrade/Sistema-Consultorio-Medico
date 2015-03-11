<?php require_once('cabecalho.php');
	  require_once('BancoConsulta.php');
      require_once('LogicaUsuario.php');      

      verificaUsuario();
?>

<h1>Agenda de Consultas</h1>
<table class="table table-striped table-responsive">
<th>CÓDIGO</th>
<th>NOME PACIENTE</th>
<th>DATA</th>
<th>HORA</th>
<th>#</th>

	<?php
		$consultas = listaConsultas($conexao);	
		foreach($consultas as $consulta) {
	?>
		<tr>
			<td><?= $consulta['id_consulta'] ?> </td>			
			<td width="60%"><?= $consulta['nome'] ?> </td>
			<td><?= date("d-m-Y", strtotime($consulta['data_consulta'])) ?> </td>  <!-- Convertendo data -->
			<td><?= $consulta['hora'] ?> </td>			
			<td>
				<a href="AlterarConsultaFormulario.php?id_consulta=<?=$consulta['id_consulta']?>" class="btn btn-primary">Alterar</a>
				<a href="#"
				   onclick="javascript: if(confirm('Deseja realmente excluir ?'))
				   				location.href='RemoveConsulta.php?id_consulta=<?php echo $consulta['id_consulta'];?>'" class="btn btn-danger">Excluir</a>
			</td>			
		</tr>
	<?php
		}
	?>
</table>
<?php include('rodape.php') ?>