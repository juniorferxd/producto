<?php
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.html");
}else{


require 'header.php';

if ($_SESSION['grupos']==1) {

 ?>

 <!--COMIENZO DEL RESPALDO -->
<div id="content" class="p-2 p-md-0 pt-0 center">
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
          <h3 class="box-title" style="font-size: 50px ">RESPALDO DE LA BASE DE DATOS</b></h3>
        </center>

              <img src="backup.png" style="height: 200px;display:block;margin:auto;">
            </div>
           <div class="col-dm-12">
               <div class="col-lg-3"></div>
                  <div class="container col-dm-12 col-lg-6 text-center">
                <a href="../backup-cepuns/descargar.php"> <button style="width : 700px;border: 5px solid;border-color: #8E0221"><b>Generar Copia de Seguridad</b> <img src="ba.png" style="height: 50px"></button></a>
                </div>
              </div>  
          </div>
        </div>
      </section>
      
    </div>
</div></div></div></div></div>
 <!-- FIN DEL RESPALDO -->


<?php 
}else{
 require 'noacceso.php'; 
}

require 'footer.php';

}

ob_end_flush();
  ?>

