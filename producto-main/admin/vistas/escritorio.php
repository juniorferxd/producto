<?php
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.html");
}else{

 
require 'header.php';

if ($_SESSION['escritorio']==1) {
$user_id=$_SESSION["idusuario"];
  require_once "../modelos/Consultas.php";
  $consulta = new Consultas();
  $rsptav = $consulta->cantidadalumnos($user_id);
  $regv=$rsptav->fetch_object();
  $totalestudiantes=$regv->total_alumnos;
  $cap_almacen=3000;

 ?>
 <div id="content" class="p-4 p-md-6 pt-5 center">
   <nav class="sidenav navbar fixed-left navbar-expand-xs navbar-light " id="sidenav-main">
    
  </nav>

  <div class="main-content center" id="panel" >
 
 
    <div class="container-fluid mt--6">
      <div class="row">
       
        <div class="col-xl-12 col-md-10 col-lg-12">
          <div class="card bg-gradient-gray border-0">
          
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <center>
          <h3 class="box-title" style="font-size: 50px ">Lista de Aulas</b></h3>
          <?php $rspta=$consulta->cantidadgrupos($user_id);
            while ($reg=$rspta->fetch_object()) {
              $idgrupo=$reg->idgrupo;
              $nombre_grupo=$reg->nombre;
          ?>
        </center>


<div class="row">
  <div class="col-md-2 "></div>
  <div class="panel-body "  >
<div class="card" style="border:#212F3C  1px solid;width: 900px">
  <div class="card-header " style="width: 900px;background: radial-gradient(circle, rgba(24,27,84,1) 0%, rgba(15,16,79,1) 100%);">
    <center>
      <h1 class="box-title" style="font-size: 30px;color:#FFFFFF; "><?php echo $nombre_grupo; ?></b></h1>
        <span data-toggle="tooltip" title="" class="badge" data-original-title="Cantidad de Alumnos por Aulas" style="color:#B3B6B7"> Cantidad de Alumnos (<?php 
                    $rsptag=$consulta->cantidadg($user_id,$idgrupo);
                    while ($regrupo=$rsptag->fetch_object()) {
                      echo $regrupo->total_alumnos;
                    }
                   ?>)
        </span>
    </center>
  </div>

  <div class="card-body">
    <p class="card-text" style="height: 200px;width: 700px;">
      <?php
                    $rsptas=$consulta->cantidadalumnos_porgrupo($user_id,$idgrupo);
                    while ($reg=$rsptas->fetch_object()) {
                      
                   if (empty($reg->image)){
                    echo ' <img class="rounded-circle" src="../files/articulos/anonymous.png" height="90px" width="90px" style="border:red  1px solid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

                  }else echo '<img class="rounded-circle" src="../files/articulos/'. $reg->image.'" height="90px" width="90px" style="border:blue  1px solid" title="'.$reg->name.'&nbsp;'.$reg->lastname.'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                     } ?>

    </p>
  </div>
  <div class="card-footer" style="border-top:#212F3C  1px solid;" >
      <a href="vista_grupo.php?idgrupo=<?php echo $idgrupo; ?>" class="btn btn-default btn-lg btn-block "  style="background:#14A18A;color:#000"><b><h4>INGRESAR AL AULA&nbsp; <i class="fa fa-arrow-circle-right"></i></h4></b></a>
            </div> 

</div>
<br><br>
</div>
</div>
<?php } ?>
                </div>
 
              </div>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    </div>
    <?php 
}else{
 
}

 ?>

 <?php 
}

ob_end_flush();
  ?>