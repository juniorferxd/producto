<?php 
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.html");
}else{
  
require 'header.php';
if ($_SESSION['acceso']==1) {
 ?>
  
<div id="content" class="p-4 p-md-6 pt-5 center">
   <nav class="sidenav navbar fixed-left navbar-expand-xs navbar-light " id="sidenav-main">
    
  </nav>

  <div class="main-content center" id="panel" >
 
 
    <div class="container-fluid mt--6">
      <div class="row">
       
        <div class="col-xl-12 col-md-12 col-lg-12">
          <div class="card bg-gradient-gray border-0">
          
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <center>
          <h3 class="box-title" style="font-size: 50px "><b>Lista de los Permisos del Sistema</b></h3>
       
  
        </center>

    <button id="btnagregar" class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i>Agregar</button></h1>
  <div class="box-tools pull-right">
    
  </div>
</div>

<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
     <th>Nombre</th>
    </thead>
    <tbody>
    </tbody>
    <tfoot>
      <th>Nombre</th>

    </tfoot>   
  </table>
</div>
      </div>
      </div>
      </div>

    </section>
  </div>
<?php 
}else{
 require 'noacceso.php'; 
}
require 'footer.php'
 ?>
 <script src="scripts/permiso.js"></script>
 <?php 
}

ob_end_flush();
  ?>
