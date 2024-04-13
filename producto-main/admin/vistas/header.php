 <?php 
if (strlen(session_id())<1) 
  session_start();
  ?>
<!doctype html>
<html>
  <head>
    <title>CEPUNS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../public/bootstrap5/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../public/bootstrap5/">
    <link rel="stylesheet" type="text/css" href="../public/bootstrap5/">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="li.css">


    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/cepuns.min.css">
  
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../vistas/uns.ico">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>
    

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">
  </head>
  <body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    
    <div class="wrapper d-flex align-items-stretch " > 

      <nav id="sidebar" style="background: radial-gradient(circle, rgba(24,27,84,1) 0%, rgba(15,16,79,1) 100%);">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
          </button>
        </div>
        <div class="img bg-wrap text-center py-4" style="background-image: url(images/9.jpg);height: 185px" >&nbsp;&nbsp;
          <div class="user-logo">


              <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle" alt="User Image"  style="height: 80px;width: 80px">
 
              <h3><?php echo $_SESSION['cargo'] .':&nbsp;&nbsp'.$_SESSION['nombre']; ?></h3>
            <span class="user-status" style="color:#47EB12">
                <i class="fa fa-circle"></i>
                  <span >Conectado</span>
            </span>
          </div>
        </div>
        <ul class="list-unstyled components mb-5" style="background: radial-gradient(circle, rgba(24,27,84,1) 0%, rgba(15,16,79,1) 100%);">

  <?php 
    if ($_SESSION['escritorio']==1) {
         echo'  
              <li class="active">
                <a href="escritorio.php" style="color:#fff">
                  <span class="fa fa-home mr-3"  style="color:#fff;font-size: 20px;">
                  </span> PRINCIPAL</a>
              </li>';
    }
  ?>

<?php 
  if ($_SESSION['grupos']==1) {
    echo'      
          <li>
              <a href="grupos.php" style="color:#fff">
                <span class="fa fa-address-card mr-3 notif" style="color:#fff;font-size: 20px;">
                  </SPAN> AULAS</a>
          </li>';
  }
?>

<?php
    if(isset($_GET["idgrupo"])):?>
          <li> 
            <a href="asistencia.php?idgrupo=<?php echo $_GET["idgrupo"]; ?>" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <span class="fa fa-check-circle mr-3" style="font-size: 20px;"></span>ASISTENCIA</a>

          </li>

         
          <li>
            <a href="calificaciones.php?idgrupo=<?php echo $_GET["idgrupo"]; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-pencil mr-3" style="font-size: 20px;"></span> CALIFICACIONES</a>
          </li>
          <li>
            <a href="cursos.php?idgrupo=<?php echo $_GET["idgrupo"]; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-book mr-3" style="font-size: 20px;"></span> CURSOS</a>
          </li>

           <li>
            <a href="listasis.php?idgrupo=<?php echo $_GET["idgrupo"]; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-pie-chart mr-3" style="font-size: 20px;"></span> REPORTES</a>
          </li>
        
<?php 
  endif; 
?>

  <li >
    <a href="respaldo.php" style="color:#fff" >
      <span class="fa fa-download mr-3" style="color:#fff;font-size: 20px;"></span>
            GENERAR RESPALDO
    </a> 
  </li>


    <?php 
if ($_SESSION['acceso']==1) {
  echo '
  
 <li >
    <a href="usuario.php" style="color:#fff" >
      <span class="fa fa-street-view mr-3" style="color:#fff;font-size: 20px;"></span>
            ADMIN | AUXILIAR
    </a> 
  </li>
  <li >
    <a href="permiso.php" style="color:#fff" >
      <span class="fa fa-info-circle mr-3" style="color:#fff;font-size: 20px;"></span>
            PERMISOS
    </a> 
    
  </li>
  

       ';
}
        ?>  


  <li>
    <a href="../ajax/usuario.php?op=salir">
      <span class="fa fa-sign-out mr-3" ></span><b style="color:#fff"> SALIR</b></a>
  </li>
  

   
      </nav>
      </ul>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>