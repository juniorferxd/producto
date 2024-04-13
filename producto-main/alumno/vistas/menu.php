<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

?>
<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="../uns.ico">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>CEPUNS</title>

        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../estilos.css">
        <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">            
    </head>    
    <body>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #640707 ">
      <a class="navbar-brand" href="escritorio.php"><img src="../cepuns.png" style="height: 50px;border-radius: 10px;"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent" > 
        <ul class="navbar-nav mr-auto" >
          <li class="nav-item ">
            <a class="nav-link" href="escritorio.php" style="color: #FFFFFF">CEPUNS <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notas.php" style="color: #FFFFFF">NOTAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="asistencia.php" style="color: #FFFFFF">ASISTENCIA</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: #FFFFFF">SOBRE NOSOTROS</a>
          </li>
        </ul>
       
            <ul class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ¡Bienvenido! &nbsp;<?php echo $_SESSION["s_usuario"];?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item btn btn-primary" href="../bd/logout.php" role="button">Cerrar Sesión</a>
            </div>
          </ul>
                        
        
        </form>
      </div>
    </nav>








  </header>













     <script src="../jquery/jquery-3.3.1.min.js"></script>    
     <script src="../bootstrap/js/bootstrap.min.js"></script>    
     <script src="../popper/popper.min.js"></script>    
        
     <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="../codigo.js"></script>    
    </body>
</html>