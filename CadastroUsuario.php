<?php require_once('cabecalho.php');
	  require_once('BancoEstado.php');
 	  require_once('LogicaUsuario.php');      

      verificaUsuario();	 
	  $estados = listaEstados($conexao);
?>

	<h1>Cadastro de Usuário</h1>
	<form action="AdicionaUsuario.php" method="post">
		<table class="table">

			<tr>
				<td><label>Código:</label></td>
				<td><input type="text" name="id_usuario" class="form-control" readonly placeholder="Código do Usuário" value="<?=$usuario['id_usuario']?>"></td>
			</tr>
			<tr>
				<td><label>Login:</label></td>
				<td width="80%"><input type="text" name="login" class="form-control" required value="<?=$usuario['login']?>"></td>
			</tr>
			<tr>
				<td><label>Senha:</label></td>
				<td><input type="password" name="senha" class="form-control" required value="<?=$usuario['senha']?>"></td>
			</tr>
			
			<?php include('UsuarioFormularioBase.php') ?>

			<tr>
				<td><input type="submit" value="Cadastrar" class="btn btn-primary btn-lg btn-block"> <br/></td>				
			</tr>			
		</table>
	</form>
	
<?php include('rodape.php') ?>