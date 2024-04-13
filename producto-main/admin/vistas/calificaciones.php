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
                  <center><h3 class="box-title" style="font-size: 50px ">Registro de Puntajes</b></h3></center>
                <div class="col">
  <h3 class="box-title">Seleciona una Materia</h3>
  <div class="box-tools pull-right">
       <a href="../vistas/vista_grupo.php?idgrupo=<?php echo $_GET["idgrupo"]; ?>">
          <button class="btn btn-primary" style="background-color:#0A07CE "><i class='fa fa-arrow-circle-left' ></i> Volver</button></a>
        <input type="hidden" id="idgrupo" name="idgrupo" value="<?php echo $_GET["idgrupo"];?>">
  </div>
</div>

          <div class="form-inline col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <select name="curso" id="curso" class="form-control selectpicker" data-live-search="true" required>
    </select>
    </div>
    <div class="form-inline col-lg-12 col-md-12 col-sm-12 col-xs-12">

  </div>



<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      <th>Opciones</th>
      <th>Imagen</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Telefono</th>
      <th>Calificar</th>
    </thead>
    <tbody>
    </tbody>
    <tfoot>
      <th>Opciones</th>
      <th>Imagen</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Telefono</th>
      <th>Calificar</th>
    </tfoot> 
  </table>
</div>
      </div>
      </div>
      </div>
    </section>
  </div>


  <!--Modal-->
  <div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Puntajes</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
  <form action="" name="formulario" id="formulario" method="POST">
      <div class="form-group col-lg-12 col-md-12 col-xs-12">
      <label for="">Ingrese el Puntaje Obtenido:</label>
        <input type="hidden" id="idcalificacion" name="idcalificacion">
        <input type="hidden" id="alumn_id" name="alumn_id">
        <input type="hidden" id="idcurso" name="idcurso">
        <input class="form-control" type="text" id="valor" name="valor">

    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
      <button class="btn btn-danger pull-right" data-dismiss="modal" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>

    </div>
        </form>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>


<?php 
}else{
 require 'noacceso.php'; 
}

require 'footer.php';
 ?>
 <script src="scripts/calificaciones.js"></script>
 <?php 
}

ob_end_flush();
  ?>

