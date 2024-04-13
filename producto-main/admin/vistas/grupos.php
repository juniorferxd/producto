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
   
  <div id="content" class="p-0 p-md-0 pt-0 center">
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
          <h3 class="box-title" style="font-size: 50px "><b>AULAS</b></h3>
          
        </center>
          <button class="btn  bg-primary btn-lg" id="btnagregar" onclick="mostrarform(true)" style="color:#fff">
    <i class="fa fa-plus-circle">
    </i> Actualizar
  </button><br><br><form action="" name="formulario" id="formulario" method="POST">
    <div class="form-group col-lg-6 col-md- col-xs-12">
      <label for="">Nombre</label>
      <input class="form-control" type="hidden" name="idgrupo" id="idgrupo">
      <input class="form-control" type="text" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
    </div>
        <div class="form-group col-lg-12 col-md-12 col-xs-12">
    </div>
  <div class="form-group col-lg-4 col-md-4 col-xs-6">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="favorito" id="favorito" value="1"> Marcar como Grupo Favorito
                  </label>
                </div>
                </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary btn-lg" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
      <button class="btn btn-danger  btn-lg" onclick="cancelarform()" type="button" id="btnCancelar"><i class="fa fa-arrow-circle-left"></i> Limpiar</button>
    </div>
  </form><br><br>
  

  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover " style="border: black 5px solid;">
    
    <thead>
              <th>Opciones</th>
              <th>Nombre</th>
              <th>Usuario</th>
    </thead>
    <tbody>
    </tbody>
    <tfoot>
              <th>Opciones</th>
              <th>Nombre</th>
              <th>Usuario</th>
    </tfoot>   
  </table>


  <!-- fin Modal-->
<?php 
}else{
 require 'noacceso.php'; 
}

require 'footer.php';
 ?>
 <script src="scripts/grupos.js"></script>
 <?php 
}

ob_end_flush();
  ?>

