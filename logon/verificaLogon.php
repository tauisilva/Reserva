<?php

if(!$_SESSION["email"]){
    header("location: logon/logon.php");
    exit();
}

?>