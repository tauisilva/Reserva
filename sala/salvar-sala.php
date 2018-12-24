<?php

	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome = @$_REQUEST["nome_sala"];
			$numero  = @$_REQUEST["numero_sala"];

			$sql = "INSERT INTO salas VALUES (default, '{$nome}', '{$numero}')";

			$res = $conn->query($sql) or die($conn->error);
			if(@$res==true){
				print "<script>alert('Dados da sala salvo com sucesso!');</script>";
				print "<script>location.href='index.php?page=insert-sala';</script>";
			}
			else{
				print "<script>alert('Dados do usuario salvo com sucesso!');</script>";
				print "<script>location.href='index.php?page=insert-sala';</script>";
			}

			break;

		case 'reservar':
			
			$sala = @$_REQUEST["salaReserv"];
			$usuario = @$_REQUEST["usuarioReserv"];
			$data = @$_REQUEST["dia_reserv"];
			$horaIni = @$_REQUEST["ini_reserv"];
			$horaFim = @$_REQUEST["fim_reserv"];
			$email = @$_REQUEST["email"];
			$senha = @$_REQUEST["senha"];

			$sql = "select senha_funcionario from funcionario where senha_funcionario = '{$senha}'";

			$res = $conn->query($sql) or die(print "<script>alert('Senha incorreta!');</script><script>location.href='index.php?page=reserv-sala';</script>");
			
			if($res==true){
				
				$sql = "select * from funcionario where senha_funcionario = '{$senha}' and idfuncionario = '{$usuario}'";

				$res = $conn->query($sql);

				$row = $res->fetch_assoc();

				if($row["idfuncionario"]==$usuario && $row["email"]==$email){
					
					$sql = "insert into hora_reserva values ($sala, '{$usuario}', '{$horaIni}', '{$horaFim}','{$data}')";
					
					$res = $conn->query($sql);
					
					if($res==true){
						print "<script>alert('Reserva registrada com sucesso!');</script><script>location.href='index.php?page=reserv-sala';</script>";
					}
					else{
						print "<script>alert('Reserva não realizada!');</script><script>location.href='index.php?page=reserv-sala';</script>";
					}
				}
				else{
					print "<script>alert('Senha ou email incorreto!');</script><script>location.href='index.php?page=reserv-sala';</script>";
				}
			}
			else{
				print "Deu merda";
			}
			
			break;

		case 'excluir':

			$sql = "DELETE FROM hora_reserva WHERE salas_idsalas=".$_REQUEST["idsalas"];

			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-sala';</script>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}

			break;

		case 'editar':
			
			$sala = @$_REQUEST["salaReserv"];
			$usuario = @$_REQUEST["usuarioReserv"];
			$data = @$_REQUEST["dia_reserv"];
			$horaIni = @$_REQUEST["ini_reserv"];
			$horaFim = @$_REQUEST["fim_reserv"];
			$email = @$_REQUEST["email"];
			$senha = @$_REQUEST["senha"];
		
			$sql = "update hora_reserva 
					set salas_idsalas = '{$sala}', funcionario_idfuncionario = '{$usuario}', hora_inicial = '{$horaIni}', hora_final = '{$horaFim}', dia_reserva = '{$data}'
					where salas_idsalas = '{$sala}' and funcionario_idfuncionario = '{$usuario}';";

			$res = $conn->query($sql);

			if($ress==true){
				print "<script>alert('Reserva editada com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-sala';</script>";
			}
			else{
				print "<script>alert('Reserva editada com sucesso!');</script>";
				print "<script>location.href='index.php?page=lis-sala';</script>";
			}

			break;

	}
?>