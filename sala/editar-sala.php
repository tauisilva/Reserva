<h1>Editar</h1>

<?php
	$sql = "SELECT * FROM hora_reserva WHERE salas_idsalas=".$_REQUEST["idsalas"];

	$res = $conn->query($sql);

	$row = $res->fetch_assoc();

	$idsala = $row["salas_idsalas"];
	$idfunc = $row["funcionario_idfuncionario"];
	$horaini = $row["hora_inicial"];
	$horafim = $row["hora_final"];
	$diareser = $row["dia_reserva"];

?>

<form action="index.php?page=sal-sala" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="idsalas" value="<?php print $row["salas_idsalas"]; ?>">
	<form>
		<?php
			
			$sql = "select nome_sala, idsalas from salas";

			$result = $conn->query($sql);

			print "<br>";
			print "<div class='row'>";
			print "<br><label for='salaReserv' class='col-sm-3' col-form-label'><h5>Selecione a sala desejada:</h5></label><br>";
			print "<div class='col-sm-9'><select required id = 'salaReserv' name='salaReserv' class='form-control'>";
			print "<option value='' select>--Selecione a sala que desejada reservar--</option>";
			
			while($row = $result->fetch_assoc()){
				$nome = $row['nome_sala'];
				$id = $row['idsalas'];
				
				if($id==$idsala){
					print "<option selected value='".$id."'>".$nome."</option>";
				}
				else{
					print "<option value='".$id."'>".$nome."</option>";
				}
			}
			
			print "</select></div>";

			print "<br>";

			$sql = "select idfuncionario, usuario_funcionario from funcionario";

			$result = $conn->query($sql);

			print "<br>";
			
			print "<br>
				<label for='usuarioReserv' class='col-sm-3' col-form-label'>
					<h5>
						Selecione quem irá reservar a sala:
					</h5>
				</label>
				<br>";
			print "<div class='col-sm-9'>
						<select required id='usuarioReserv' name='usuarioReserv' class='form-control'>";
			print "<option value='' select>--Selecione quem irá reservar--</option>";

			while($row = $result->fetch_assoc()){
				$nome = $row['usuario_funcionario'];
				$id = $row['idfuncionario'];

				if($id==$idfunc){
					print "<option selected value='".$id."'>".$nome."</option>";
				}
				else{
					print "<option value='".$id."'>".$nome."</option>";
				}
			}

			print "</select></div>";
			
			print "<br>";
			print "<br>";
			print "<div class='col-sm-2'>";
			print "<h5>Data e hora</h5>";
			print "</div>";
			print "<div align='left' class='col-sm-10'>";
				print "<input id='dia_reserv' value='".$diareser."' name='dia_reserv' required type='date'> de 
						<input required id='ini_reserv' value='".$horaini."' name='ini_reserv' type='time' value='00:00'> até 
						<input required id='fim_reserv' value='".$horafim."' name='fim_reserv' type='time' value='00:00'>";
			print "</div>";
			print "</div>";
		?>
		
		<br>

		<label><h5>Confirme sua reserva:</h5></label>
		
		<br>
			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">E-mail</label>
				<div class="col-sm-10">
					<select class="form-control" name="email" id="email">
						<?php

							$sql = "select idfuncionario, email from funcionario order by email";

							$result = $conn->query($sql);

							while($row = $result->fetch_assoc()){
								$email = $row['email'];
								$idfuncionario = $row["idfuncionario"];
								if($idfuncionario==$idfunc){
									$emailReal = $row["email"];
								}

								if($email==$emailReal){
									print "<option selected value='".$email."'>".$email."</option>";
								}
								else{
									print "<option value='".$email."'>".$email."</option>";
								}
							}
							
						?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="senha" class="col-sm-2 col-form-label">Senha</label>
				<div class="col-sm-10">
					<input type="password" required name="senha" class="form-control" id="senha" placeholder="Senha">
				</div>
			</div>
		<br>
		
		<button type="submit" class="btn btn-primary">Editar</button>

	</form>

</form>