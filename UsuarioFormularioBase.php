<tr>
	<td><label>Nome:</label></td>
	<td><input type="text" name="nome" class="form-control" required value="<?=$usuario['nome']?>"></td>
</tr>
<tr>
	<td><label>Idade:</label></td>
	<td><input type="number" name="idade" class="form-control" value="<?=$usuario['idade']?>"></td>
</tr>
<tr>
	<td><label>Email:</label></td>
	<td><input type="email" name="email" class="form-control" value="<?=$usuario['email']?>"></td>
</tr>
<tr>
	<td><label>Telefone:</label></td>
	<td><input type="text" name="telefone" class="form-control" value="<?=$usuario['telefone']?>"></td>
</tr>
<tr>
	<td><label>Endereço:</label></td>
	<td><input type="text" name="endereco" class="form-control" value="<?=$usuario['endereco']?>"></td>
</tr>
<tr>
	<td><label>Estado:</label></td>
	<td>
		<select name="id_estado" class="form-control">
			<?php foreach($estados as $estado) :
				$estadoAtivo = $usuario['id_estado'] == $estado['id_estado'];
				$buscaEstado = $estadoAtivo ? "selected='selected'" : "";
			?>
			<option value="<?=$estado['id_estado']?>" <?=$buscaEstado?>>
				<?=$estado['sigla']. " - " .$estado['descricao']?>
			</option>
			<?php endforeach ?>
		</select>
	</td>
</tr>
<tr>
	<td><label>Número:</label></td>
	<td><input type="number" name="numero" class="form-control" value="<?=$usuario['numero']?>"></td>
</tr>