<?php

session_start();
include("../../conexao.php");

$nome = mysqli_real_escape_string($conn, $_POST["nome"]);
$usuario = mysqli_real_escape_string($conn, $_POST["usuario"]);
$CPF = mysqli_real_escape_string($conn, $_POST["cpf_usuario"]);
$email = mysqli_real_escape_string($conn, $_POST["email_usuario"]);
$senha = mysqli_real_escape_string($conn, $_POST["senha"]);

$sql = "select count(*) as total from funcionario where usuario_funcionario = '{$usuario}'";

$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);

if($row["total"] == 1){

    header("location: usuario.php");
    $_SESSION["usuario"] = true;
    exit();
}

$sql2 = "select count(*) as total from funcionario where email = '{$email}'";

$result2 = $conn->query($sql2);

$row2 = mysqli_fetch_assoc($result2);

if($row2["total"] == 1){

    header("location: usuario.php");
    $_SESSION["email"] = true;
    exit();
}

$sql3 = "select count(*) as total from funcionario where CPF_funcionario = '{$CPF}'";

$result3 = $conn->query($sql3);

$row3 = mysqli_fetch_assoc($result3);

if($row3 == 1){

    header("location: usuario.php");
    $_SESSION["cpf_usuario"] = true;
    exit();
}

$sql4 = "insert into funcionario values (default,'{$nome}','{$usuario}','{$CPF}','{$email}',md5('{$senha}'))";

$result4 = $conn->query($sql4) or die ("Ocorreu um erro na inserção dos dados");

if($result4 == true){
    header("location: usuario.php");
    $_SESSION["cadastro"] = true;
}
else{
    header("location: usuario.php");
    print "<script>alert('Ocorreu um erro na inserção dos dados');</script>";
}

?>