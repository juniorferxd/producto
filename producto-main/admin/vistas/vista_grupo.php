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
          <h3 class="box-title" style="font-size: 50px ">AULA:<b> <?php echo $nombre_grupo; ?></b></h3>
       
  
        </center>


            <button class="btn btn-primary  btn-lg " onclick="mostrarform(true)" id="btnagregar"  data-toggle="tooltip" data-original-title="Registrar Nuevo Alumno al Sistema">
                <i class="fa fa-plus-circle"></i>
                   Agregar Alumno
            </button>  
          </h1>

       
</div>
<!--box-header-->
<!--centro-->
<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover" >
    <thead>
      <th>Acción</th>
      <th>Imagen</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Telefono</th>
      <th>Dirección</th>
      <th>Email</th>
    </thead>
    <tbody>
    </tbody>
   <!-- <tfoot>
      <th>Opciones</th>
      <th>Imagen</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Telefono</th>
      <th>Dirección</th>
      <th>Email</th>
    </tfoot>  --> 
  </table>
</div>

</div>
<div class="panel-body" id="formularioregistros">
  <form action="" name="formulario" id="formulario" method="POST">
    
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Nombres(*):</label>
          <input type="hidden" id="idgrupo" name="idgrupo" value="<?php echo $_GET["idgrupo"];?>">
      <input class="form-control" type="hidden" name="idalumno" id="idalumno">
      <input class="form-control" type="text" name="nombre" id="nombre" maxlength="100" placeholder="Nombres Completos" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
     </div>
     
     <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Apellidos(*):</label>
            <input class="form-control" type="text" name="apellidos" id="apellidos" maxlength="100" placeholder="Apellidos Completos" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
    </div>
      <br>
      <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Dirección(*)</label>
      <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Dirección" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
    </div>
    <br>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Correo Electrónico(*)</label>
      <input class="form-control" type="email" name="email" id="email" maxlength="256" placeholder="Ejemplo@ejemplo.com">
    </div>
    <br>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Teléfono(*)</label>
      <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Dirección" required>
  </div>
   <br>
   <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Foto del Estudiante:</label>
      <input class="form-control" type="file" name="imagen" id="imagen">
      <input type="hidden" name="imagenactual" id="imagenactual">
      <img src="" alt="" width="150px" height="120" id="imagenmuestra">
      </div>
   <br><br><br><br><br><br><br><br>
<div class="container" style="display:inline-block;text-align:center">
      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar Registro </button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar Registro</button></div>
    </div>
  </form>
</div>
<!--fin centro-->
      </div>
      </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
<?php 
}else{
 require 'noacceso.php'; 
}
require 'footer.php'
 ?>
 <script src="scripts/vista_grupo.js"></script>

 <?php 
}

ob_end_flush();
  ?>