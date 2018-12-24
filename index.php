<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/titulo.png" type="image/x-png">
    
    <title>RRU - Room Reservation Update</title>
  
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
  
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="index.php">RRU</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="index.php">Principal</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cadastrar
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?page=insert-sala">
                  <i class="far fa-building" style="color: blue;"></i> Sala
                </a>
                <a class="dropdown-item" href="index.php?page=insert-usuario">
                  <i class="fas fa-user" style="color: blue;"></i> Usuário
                </a>
              </div>  
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Salas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?page=lis-sala">
                  <i class="fas fa-clipboard-list" style="color:blue;"></i> Listar
                </a>
                <a class="dropdown-item" href="index.php?page=reserv-sala">
                  <i class="fas fa-hand-pointer" style="color:blue;"></i> Reservar
                </a>
              </div>
            </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <?php 
              include("config.php"); 
            ?>
        </div>
      </div>
    </div>
    
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

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