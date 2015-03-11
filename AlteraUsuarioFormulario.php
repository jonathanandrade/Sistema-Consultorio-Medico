<?php include('cabecalho.php');
	  include('conectar.php');
	  include('BancoEstado.php');
	  include('BancoUsuario.php');

	  $id_usuario = $_GET['id_usuario'];
	  $usuario = buscaUsuario2($conexao, $id_usuario);
	  $estados = listaEstados($conexao);	  
?>

	<h1>Alterar Usuário</h1>
	<form action="AlteraUsuario.php" method="post">
		<table class="table">

		<tr>
			<td><label>Código:</label></td>
			<td><input type="text" name="id_usuario" class="form-control" readonly placeholder="Código do Usuário" value="<?=$usuario['id_usuario']?>"></td>
		</tr>
		<tr>
			<td><label>Login:</label></td>
			<td width="80%"><input type="text" name="login" class="form-control" readonly value="<?=$usuario['login']?>"></td>
		</tr>
			
		<?php include('UsuarioFormularioBase.php') ?>

			<tr>
				<td>
					<input type="submit" value="Alterar" class="btn btn-primary">
				    <a href="ListaUsuario.php" class="btn btn-warning">Voltar</a>
				</td>
			</tr>			
		</table>
	</form>
	
<?php include('rodape.php') ?>