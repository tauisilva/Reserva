<?php
    $nome = @$_REQUEST["nome_usuario"];
	$usuario = @$_REQUEST["Niki_name"];
	$cpf = @$_REQUEST["cpf_usuario"];
	$email = @$_REQUEST["email_usuario"];
	$senha = @$_REQUEST["senha_usuario"];
	$cidade = @$_REQUEST["cidade"];
	$estado = @$_REQUEST["estado"];
	$email = @$_REQUEST["email_usuario"];

    switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "insert into funcionario values (default, '{$nome}', '{$usuario}', '{$cpf}', '{$cidade}', '{$estado}', '{$email}','{$senha}')";

			$res = $conn->query($sql) or die($conn->error);

			if(@$res==true){
				print "<script>alert('Dados do usuario salvo com sucesso!');</script>";
				print "<script>location.href='index.php?page=insert-usuario';</script>";
			}
			else{
				print "<script>alert('Dados do usuario não salvos!');</script>";
				print "<script>location.href='index.php?page=insert-usuario';</script>";
			}

			break;
	}
?>