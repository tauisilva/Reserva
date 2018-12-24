<h1>Cadastrar sala</h1>
<form action="index.php?page=sal-sala" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_sala" class="form-control">
	</div>
	<div class="form-group">
		<label>Número</label>
		<input type="text" name="numero_sala" class="form-control">
	</div>

	<button type="submit" class="btn btn-primary">Enviar</button>
</form>