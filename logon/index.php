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
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema Reserva</h3>
                    <h3 class="title has-text-grey">de Sala</h3>

                    <?php 
                        
                        if(isset($_SESSION["naoAutenticado"])){ 
                        
                    ?>
                    
                    <div class="notification is-danger">
                    <p>Usuário ou senha inválidos.</p>
                    </div>
                    
                    <?php 
                        }

                        unset($_SESSION["naoAutenticado"]);
                    ?>

                    <div class="box">
                        <form action="logon.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="email" class="input is-large" placeholder="ex: exemplo@email.com" require autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha" require>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                            <br>
                        </form>
                        <a class="button is-block is-link is-large is-fullwidth" href="cadastrar/usuario.php" role="button">Não é usuário ainda? Clique aqui para cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>