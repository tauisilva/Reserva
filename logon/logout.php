<?php

session_start();
include("verificaLogon.php");
session_destroy();

print "<script>alert('Já vai? que pena... então, até a próxima!!');</script>";
header("location: logon/logon.php");

?>