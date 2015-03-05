<?php require_once('cabecalho.php');
	  require_once('BancoConsulta.php');
      require_once('LogicaUsuario.php');      

      verificaUsuario();
?>

<h1>Agenda de Consultas</h1>
<table class="table table-striped table-bordered">
<th>CÓDIGO</th>
<th>NOME PACIENTE</th>
<th>DATA</th>
<th>HORA</th>
<th>#</th>
<th>#</th>
	<?php
		$consultas = listaConsultas($conexao);	
		foreach($consultas as $consulta) {
	?>
		<tr>
			<td><?= $consulta['id_consulta'] ?> </td>			
			<td><?= $consulta['nome'] ?> </td>
			<td><?= $consulta['data_consulta'] ?> </td>
			<td><?= $consulta['hora'] ?> </td>			
			<td><a href="AlterarConsultaFormulario.php?id_consulta=<?=$consulta['id_consulta']?>" class="btn btn-primary">Alterar</a> </td>
			<td>
				<form action="RemoveConsulta.php" method="post">
					<input type="hidden" name="id_consulta" value="<?=$consulta['id_consulta']?>">
					<button class="btn btn-danger">Desmarcar</a>	
				</form>
			</td>	
		</tr>
	<?php
		}
	?>
</table>
<div class="text-right">
	<a href="relatorio/RelatorioConsultasPdf.php" class="btn btn-success btn-lg">Relatório</a>	
</div>

<?php include('rodape.php') ?>