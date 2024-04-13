<?php 
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.html");
}else{

require 'header.php';
if ($_SESSION['grupos']==1) {

        $idgrupo=$_GET['idgrupo'];

  require_once "../modelos/Grupos.php";
  $grupos = new Grupos();
  $rspta = $grupos->mostrar_grupo($idgrupo);
  $reg=$rspta->fetch_object();
  $nombre_grupo=$reg->nombre;


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
          <h3 class="box-title" style="font-size: 50px ">REGISTRO DE ASISTENCIAS <BR><CENTER> <?php echo $nombre_grupo; ?></CENTER></b></h3>
        </center>


  <div class="">
    <a href="../vistas/vista_grupo.php?idgrupo=<?php echo $idgrupo; ?>"><BR>
      <button class="btn btn-primary" style="background-color:#0A07CE "><i class='fa fa-arrow-circle-left' ></i> Volver</button></a>
  </div>
</div>
<!--box-header-->
<!--centro-->
<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      
      <th><center>Imagen</center></th>
      <th><center>Nombre</center></th>
      <th><center>Apellidos</center></th>
      <th><center>Telefono</center></th>
      <th><center>Asistencia</center></th>
    </thead>
    <tbody>
    </tbody>
    <tfoot>
      
      <th><center>Imagen</center></th>
      <th><center>Nombre</center></th>
      <th><center>Apellidos</center></th>
      <th><center>Telefono</center></th>
      <th><center>Asistencia</center></th>
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
          
          <h4 class="modal-title">REGISTRO DE ASISTENCIA</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
  <form action="" name="formulario_asis" id="formulario_asis" method="POST">
      <div class="form-group col-lg-12 col-md-12 col-xs-12">
      <label for="">Descripcion(*):</label>
        <input type="hidden" id="idasistencia" name="idasistencia">
        <input type="hidden" id="alumn_id" name="alumn_id">
        <input type="hidden" id="fecha_asistencia" name="fecha_asistencia"> 
        <input type="hidden" id="idgrupo" name="idgrupo" value="<?php echo $_GET["idgrupo"];?>">
        <select class="form-control " id="tipo_asistencia"  name="tipo_asistencia">        
          <option value="1"> Presente</option>
          <option value="2"> Tarde</option>
          <option value="3"> Falta</option>
          <option value="4"> Permiso</option>
        </select>

    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar_asis"><i class="fa fa-save"></i>  Guardar</button>
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
require 'footer.php'
 ?>
 <script src="scripts/asistencia.js"></script>

 <?php 
}

ob_end_flush();
  ?>