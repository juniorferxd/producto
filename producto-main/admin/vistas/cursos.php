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
                      <h3 class="box-title" style="font-size: 50px ">Registro de Cursos</b></h3>
                  </center>
    <BR><button class="btn btn-primary  btn-lg" id="btnagregar" onclick="mostrarform(true)" style="background-color: #8E0221" data-toggle="tooltip" data-original-title="Cursos que se dictaran durante el proceso de preparación"><i class="fa fa-plus-circle" >&nbsp;&nbsp;</i>Agregar Cursos</button>
  <div class="box-tools pull-right">
  </div>
</div>
<div class="panel-body table-responsive" id="listadoregistros" >
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover" style="border: #000 2px solid" >
    <thead >
      <th style="text-align: center"><h5>ACCION</h5></th>
      <th style="text-align: center"><h5>NOMBRE</h5></th>
    </thead>
    <tbody style="text-align: center">
    </tbody>
  </table>
</div>
</BR>
</div>
<div class="panel-body" style="height: 400px;" id="formularioregistros" style="justify-content: center;">
  <div class="row" style="justify-content: center;" >
    <div style="border:#8E0221 3px solid">
     <form action="" name="formulario" id="formulario" method="POST">
    <div class="form-group col-lg-12 col-md-12 col-xs-12 ">
      <label for="">Nombre</label>
      <input class="form-control" type="hidden" name="idcurso" id="idcurso">
      <input type="hidden" id="idgrupo" name="idgrupo" value="<?php echo $_GET["idgrupo"];?>">
      <input class="form-control" type="text" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar" 
      style="width:450px;
             height:40px">
        <i class="fa fa-save"></i>&nbsp;&nbsp;  Guardar</button>&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="btn btn-danger" onclick="cancelarform()" type="button" style="width:450px;
        height:40px"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp; Cancelar</button>
    </div>
  </form>
    </div> 
  </div>
</div>
  </div>
    </div>
      </div>
    </section>
  </div>
<?php 
}else{ 
}
require 'footer.php';
 ?>
 <script src="scripts/cursos.js"></script>
 <?php 
}
ob_end_flush();
  ?>

