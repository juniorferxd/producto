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
                    <input type="hidden" id="idgrupo" name="idgrupo" value="<?php echo $_GET["idgrupo"];?>">
          <div class="nav-tabs-custom">
            <CENTER><h1 class="box-title" style="font-size: 40px;padding: 0px;">LISTA DE ALUMNOS REGISTRADOS </h1></CENTER>


            <ul class="nav nav-tabs pull-right">
              <li  class="" style="background-color: #5DADE2"><a href="#tab_1-1" data-toggle="tab" aria-expanded="false" style="color:#000;"><b>Calificaciones</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
              <li class="active" style="background-color: #1ABC9C"><a href="#tab_3-2" data-toggle="tab" aria-expanded="true" style="color:#000;"><b>Asistencia</b></a></li>
              
            </ul>
            
            <div class="tab-content">
              <div class="tab-pane" id="tab_1-1">
                <b> Formatos para Descargar:</b><br><br>
                <div class="table table-striped table-bordered table-condensed table-hover" id="listadoregistroscalif">
                  <div id="datacalif">

                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab_2-2">
                <div class="table-responsive" id="listadoregistros">
                  <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <label>Fecha Inicio</label>
                    <input type="date" class="form-control" name="fecha_inicioc" id="fecha_inicioc" value="<?php echo date("Y-m-d"); ?>">
                  </div>
                  <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <label>Fecha Fin</label>
                    <input type="date" class="form-control" name="fecha_finc" id="fecha_finc" value="<?php echo date("Y-m-d"); ?>">
                  </div>
                </div>
                <div class="panel-body table-responsive" id="listadoregistrosc">
                  <div id="datac">

                  </div>
                </div>
              </div>

          
              <div class="tab-pane active" id="tab_3-2">
                <div class="table-responsive" id="listadoregistros">
                  <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                  </div>
                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label>Fecha Inicio</label>
                    <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="<?php echo date("Y-m-d"); ?>">
                  </div>
                  <div class="form-group col-lg-2 col-md-2 col-sm-2 col-xs-12">
                  </div>
                  <div class="form-group col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <label>Fecha Fin</label>
                    <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="<?php echo date("Y-m-d"); ?>">
                  </div>
                </div>
                <b>Formatos para Descargar:</b>
                <div class="panel-body table-responsive" id="listadoregistros">
                  <div id="data">

                  </div>
                </div>
              </div>
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
 require 'noacceso.php'; 
}

require 'footer.php';
 ?>
 <script src="scripts/listasis.js"></script>
 <?php 
}

ob_end_flush();
  ?>

