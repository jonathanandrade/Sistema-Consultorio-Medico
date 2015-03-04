<tr>
	<td><label>Código:</label></td>
	<td><input type="text" name="id_paciente" class="form-control" readonly placeholder="Código do Paciente" value="<?=$paciente['id_paciente']?>"></td>
</tr>
<tr>
	<td><label>Nome:</label></td>
	<td width="80%"><input type="text" name="nome" class="form-control" value="<?=$paciente['nome']?>"></td>
</tr>
<tr>
	<td><label>Idade:</label></td>
	<td><input type="number" name="idade" class="form-control" value="<?=$paciente['idade']?>"></td>
</tr>
<tr>
	<td><label>Sexo:</label></td>
	<td>
		<input type="radio" name="sexo" value="M" <?php echo ($paciente['sexo'] == "M") ? "checked" : null; ?> >Masculino <br/>
		<input type="radio" name="sexo" value="F" <?php echo ($paciente['sexo'] == "F") ? "checked" : null; ?> >Feminino
	</td>
</tr>
<tr>
	<td><label>Email:</label></td>
	<td><input type="email" name="email" class="form-control" value="<?=$paciente['email']?>"></td>
</tr>
<tr>
	<td><label>Telefone:</label></td>
	<td><input type="text" name="telefone" class="form-control" value="<?=$paciente['telefone']?>"></td>
</tr>
<tr>
	<td><label>Endereço:</label></td>
	<td><input type="text" name="endereco" class="form-control" value="<?=$paciente['endereco']?>"></td>
</tr>
<tr>
	<td><label>Número:</label></td>
	<td><input type="number" name="numero" class="form-control" value="<?=$paciente['numero']?>"></td>
</tr>
<tr>
	<td><label>Paciente Ativo:</label></td>
	<td><input type="checkbox" name="ativo" <?=$ativo?> value="true"></td>
</tr>
<tr>
	<td><label>Estado:</label></td>
	<td>
		<select name="id_estado" class="form-control">
			<?php foreach($estados as $estado) :
				$estadoAtivo = $paciente['id_estado'] == $estado['id_estado'];
				$buscaEstado = $estadoAtivo ? "selected='selected'" : "";
			?>
			<option value="<?=$estado['id_estado']?>" <?=$buscaEstado?>>
				<?=$estado['sigla']. " - " .$estado['descricao']?>
			</option>
			<?php endforeach ?>
		</select>
	</td>
</tr>