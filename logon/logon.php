<?php

session_start();
include('../conexao.php');

if(empty($_POST["email"]) || empty($_POST["senha"])){

    header("location: index.php");
    exit();

}

$email = mysqli_real_escape_string($conn, $_POST["email"]);
$senha   = mysqli_real_escape_string($conn, $_POST["senha"]);

$sql = "select idfuncionario, usuario_funcionario from funcionario where email = '{$email}' and senha_funcionario = md5('{$senha}')";

$result = $conn->query($sql) or die ("Ops, algo de errado na verificação dos dados");

$row = mysqli_num_rows($result);

if($row == 1){

    $_SESSION["email"] = $email;
    header("location: ../index.php");
    exit();

} else{

    $_SESSION["naoAutenticado"] = true;
    header("location: index.php");

}

?>