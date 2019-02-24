<?php

session_start();

?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RRU - Room Reservation Update</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro de Usuário</h3>
                    <?php
                        if(isset($_SESSION["cadastro"])){
                    ?>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu usuário e senha <a href="../logon.php">aqui</a></p>
                    </div>
                    <?php
                        }
                        unset($_SESSION["cadastro"]);

                        if(isset($_SESSION["usuario"])){
                    ?>
                    <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                        }
                        unset($_SESSION["usuario"]);

                        if(isset($_SESSION["email"])){
                    ?>
                    <div class="notification is-info">
                        <p>O e-mail escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                        }
                        unset($_SESSION["email"]);

                        if(isset($_SESSION["cpf_usuario"])){
                    ?>
                    <div class="notification is-info">
                        <p>O CPF digitado já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                        }
                        unset($_SESSION["cpf_usuario"]);

                    ?>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" require type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input pattern="\d{[0-9.]}\.\d{[0-9.]}\.\d{[0-9.]}-\d{[0-9.]}" type="text" id="cpf" maxlength="14" name="cpf_usuario" class="input is-large" placeholder="digite apenas os números" onkeypress="return isNumberKey(event)">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="email" name="email_usuario" required placeholder="Ex: email@exemplo.com">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                            <br>
                            <button type="button" class="button is-block is-large is-fullwidth"><a href="../logon.php">Realizar login.</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <script>
      var cpf = document.querySelector("#cpf");
      cpf.addEventListener("blur", function(){
        if(cpf.value) cpf.value = cpf.value.match(/.{1,3}/g).join(".").replace(/\.(?=[^.]*$)/,"-");
        });
    </script>
    
    <script>
      function isNumberKey(evt){
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
      return true;
      }
    </script>

</body>

</html>