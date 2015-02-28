<?php include('cabecalho.php');
	  include('conectar.php');
	  include('BancoEstado.php');
	  include('BancoPaciente.php');

	  $id_paciente = $_GET['id_paciente'];
	  $paciente = buscaPaciente($conexao, $id_paciente);
	  $estados = listaEstados($conexao);	  

	  $ativo = $paciente['ativo'] ? "checked='checked'" : "";

?>

	<h1>Alterar Paciente</h1>
	<form action="AlteraPaciente.php" method="post">
		<table class="table">
			
		<?php include('ProdutoFormularioBase.php') ?>

			<tr>
				<td><input type="submit" value="Alterar" class="btn btn-primary"> <br/></td>
			</tr>			
		</table>
	</form>
	
<?php include('rodape.php') ?>