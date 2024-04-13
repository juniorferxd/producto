<?php 

include("menu.php");

 
//* configuracion database.
include("db.php");
 
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}
 
$consulta = "SELECT block.id AS ID,alumn.name AS ALUMNO,alumn.lastname AS APELLIDO,block.name AS CURSO, calification.val AS CALIFICACION FROM block inner join calification on block.id=calification.block_id

inner join alumn on calification.alumn_id = alumn.id WHERE alumn.name ='".$_SESSION["s_usuario"]."'";
$resultado = mysqli_query($conex, $consulta);
$suma=0;
  
?>


<div class="container col-lg-8" style="padding: 50px;">
  <center><h2>REGISTRO DETALLADO DE PUNTAJES   </h2></center><br>

  <?php
$nuevaconsulta = "SELECT name,lastname  FROM alumn WHERE name='".$_SESSION["s_usuario"]."'";
$nuevoresultado= mysqli_query($conex,$nuevaconsulta);
?>

<!--inicio del nombre del alumn -->
 <?php while($row = mysqli_fetch_array($nuevoresultado))
 {

  ?>Estudiante: <b> <?php echo filtrado($row['lastname']).'&nbsp'.($row['name']);?>               </b> 
     <?php 
}
?>
<!--fin del nombre del alumno -->
<br><br>

 <!--INICIO PARA IMPRIMIR -->
 <a class="btn btn-primary" href="pdf/Notas.php" target="_blank" style="display:block;
margin:auto;"><i class="fa fa-download" data-toggle="modal" data-target="#miModal"></i> Descargar archivo PDF</a><br><br>
  


<!--FIN DE IMPRIMIR -->

              
  <table class="table table-dark table-striped " style="border: #000000 1px solid">
    <thead class="text-center">
      <tr >
        <th style="background-color: #000000;color:#F00202;width: 150px;">CODIGO</th>
        <th style="background-color: #000000;color:#F00202;">CURSO</th>
        <th style="background-color: #000000;color:#F00202;width: 150px;">PUNTAJE</th>
       
      </tr>
    </thead>
    <tbody class="text-center" >
        <?php
while($fila = mysqli_fetch_array($resultado))
{
?>
      <tr >
        <td style="background-color: #000000;color:#F00202;"><?php echo filtrado($fila['ID']);?></td>
<!-- <td style="border-color: #000000 "><h6 ><?php echo filtrado($fila['APELLIDO']).'&nbsp'.($fila['ALUMNO']);?></h6></td> -->
        <td style="border-color: #000000 "><h6> <?php echo filtrado($fila['CURSO']);?></h6> </td>
        <td style="background-color: #000000;color:#F00202;"><h6> <?php echo filtrado($fila['CALIFICACION']);?></h6> </td>
     

   
     
      <?php
      /*SACAMOS LA PUNTUACION TOTAL*/
      $suma+=$fila['CALIFICACION'];  
}
echo "  <tr>  
          <td> &nbsp;PUNTAJE TOTAL</td> 
         
          <td>&nbsp;</td>
          <td>$suma</td>
        </tr>";
?>

 <!-- FIN LA PUNTUACION TOTAL -->
    </tbody>
  </table>

</div>





