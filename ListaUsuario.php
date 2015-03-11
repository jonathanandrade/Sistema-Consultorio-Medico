<?php require_once('cabecalho.php');	  
	  require_once('BancoUsuario.php');
	  require_once('LogicaUsuario.php');      

      verificaUsuario();  ?>

<h1>Lista de Usuários</h1>
<table class="table table-striped table-responsive">
<th>CÓDIGO</th>
<th>NOME</th>
<th>LOGIN</th>
<th>IDADE</th>
<th>EMAIL</th>
<th>TELEFONE</th>
<th>ENDEREÇO</th>
<th>NUM</th>
<th>UF</th>
<th>#</th>
	<?php
		$usuarios = listaUsuario($conexao);	
		foreach($usuarios as $usuario) {
	?>
		<tr>
			<td><?= $usuario['id_usuario'] ?> </td>
			<td><?= $usuario['nome'] ?> </td>
			<td><?= $usuario['login'] ?> </td>
			<td><?= $usuario['idade'] ?> </td>
			<td><?= $usuario['email'] ?> </td>
			<td><?= $usuario['telefone'] ?> </td>
			<td><?= $usuario['endereco'] ?> </td>
			<td><?= $usuario['numero'] ?> </td>
			<td><?= $usuario['sigla'] ?> </td>			
			<td>
				<a href="AlteraUsuarioFormulario.php?id_usuario=<?=$usuario['id_usuario']?>" class="btn btn-primary">Alterar</a>				
				<a href="#"
				   onclick="javascript: if(confirm('Deseja realmente excluir ?'))
				   				location.href='RemoveUsuario.php?id_usuario=<?php echo $usuario['id_usuario'];?>'" class="btn btn-danger">Excluir</a>
			</td>
		</tr>
	<?php
		}
	?>
</table>

<?php include('rodape.php') ?>