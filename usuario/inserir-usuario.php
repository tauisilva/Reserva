<h1>Cadastrar usuario</h1>
<br>
	<form action="index.php?page=sal-usuario" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="nome_usuario">Nome completo</label>
				<input type="text" class="form-control" id="nome_usuario" name="nome_usuario" required placeholder="Nome completo">
			</div>
			<div class="form-group col-md-6">
				<label for="Niki_name">Nome de usuario</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">@</div>
					</div>
					<input type="text" class="form-control" id="Niki_name" maxlength="10" name="Niki_name" required placeholder="Nome de Usuario">
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<div>
					<label for="cpf_usuario">CPF</label>
					<input pattern="\d{[0-9.]}\.\d{[0-9.]}\.\d{[0-9.]}-\d{[0-9.]}" type="text" id="cpf" maxlength="14" name="cpf_usuario" class="form-control" placeholder="digite apenas os números" onkeypress="return isNumberKey(event)">
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="email_usuario">E-mail</label>
				<input type="email" class="form-control" id="email_usuario" name="email_usuario" required placeholder="Ex: email@exemplo.com">
			</div>
			<div class="form-group col-md-6">
				<label for="senha_usuario">Senha</label>
				<input type="password" class="form-control" id="senha_usuario" maxlength="40" name="senha_usuario" required placeholder="Senha">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
			<label for="cidade">Cidade</label>
			<input type="text" class="form-control" id="cidade" maxlength="40" name="cidade" placeholder="Ex: Brasília">
			</div>
			<div class="form-group col-md-6">
			<label for="estado">Estado</label>
			<select id="estado" name="estado" class="form-control">
				<option value="AC">Acre</option>
				<option value="AL">Alagoas</option>
				<option value="AP">Amapá</option>
				<option value="AM">Amazonas</option>
				<option value="BA">Bahia</option>
				<option value="CE">Ceará</option>
				<option value="DF" selected>Distrito Federal</option>
				<option value="ES">Espírito Santo</option>
				<option value="GO">Goiás</option>
				<option value="MA">Maranhão</option>
				<option value="MT">Mato Grosso</option>
				<option value="MS">Mato Grosso do Sul</option>
				<option value="MG">Minas Gerais</option>
				<option value="PA">Pará</option>
				<option value="PB">Paraíba</option>
				<option value="PR">Paraná</option>
				<option value="PE">Pernambuco</option>
				<option value="PI">Piauí</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="RN">Rio Grande do Norte</option>
				<option value="RS">Rio Grande do Sul</option>
				<option value="RO">Rondônia</option>
				<option value="RR">Roraima</option>
				<option value="SC">Santa Catarina</option>
				<option value="SP">São Paulo</option>
				<option value="SE">Sergipe</option>
				<option value="TO">Tocantins</option>
			</select>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Cadastra</button>
	</form>