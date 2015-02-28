<?php require_once('cabecalho.php');
	  require_once('BancoEstado.php');
 	  require_once('LogicaUsuario.php');      

      verificaUsuario();	 
	  $estados = listaEstados($conexao);
	  $paciente = array('id_paciente' => '', 'nome' => '', 'idade' => '', 'id_estado' => '1', 'email' => '', 'telefone' => '', 'endereco' => '', 'numero' => '');
	  $usado = '';
?>

	<h1>Cadastro de Paciente</h1>
	<form action="AdicionaPaciente.php" method="post">
		<table class="table">
			
			<?php include('ProdutoFormularioBase.php') ?>

			<tr>
				<td><input type="submit" value="Cadastrar" class="btn btn-primary"> <br/></td>
			</tr>			
		</table>
	</form>
	
<?php include('rodape.php') ?>