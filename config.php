<?php
	//conexão com o banco de dados
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "reserva";

	$conn = new mysqli($host,$user,$pass,$db) or die($conn->error);

	$conn->query("SET NAMES 'utf8'");
	$conn->query('SET character_set_connection=utf8');
	$conn->query('SET character_set_client=utf8');
	$conn->query('SET character_set_results=utf8');

	switch (@$_REQUEST["page"]) {
		case 'insert-sala':
			include("sala/inserir-sala.php");
			break;
		case 'insert-usuario':
			include("usuario/inserir-usuario.php");
			break;

		case 'lis-sala':
			include("sala/listar-sala.php");
			break;

		case 'reserv-sala':
			include("sala/reservar-sala.php");
			break;

		case 'edi-sala':
			include("sala/editar-sala.php");
			break;

		case 'exc-sala':
			include("sala/excluir-sala.php");
			break;
		case 'sal-sala':
			include("sala/salvar-sala.php");
			break;

		case 'sal-usuario':
			include("usuario/salvar-usuario.php");
			break;

		case 'lis-usuario':
			include(usuario/listar-usuario.php);

		default:
			include("dashboard.php");
			break;
	}

?>