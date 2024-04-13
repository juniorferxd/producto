<?php 

include("menu.php");

 
//* configuracion database.
include("db.php");
mysqli_query($conex, "SET lc_time_names = 'es_ES'");
 
function filtrado($datos){
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); 
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

$consulta = "
              SELECT  
                      alumn.id AS ID,
                      alumn.name AS NOMBRE, 
                      
                      date_format(
                      assistance.date_at, '%W %d de %M del %Y') AS FECHA       ,
                      case kind_id when 1 then 'PRESENTE'  when 2 then 'TARDE' when 3 then 'FALTA'  when 4 then 'PERMISO'  end    as REGISTRO
              FROM alumn 

              INNER JOIN assistance on alumn.id=assistance.alumn_id 
              WHERE alumn.name ='".$_SESSION["s_usuario"]."'";

$resultado = mysqli_query($conex, $consulta);                    
                    ?>

<?php
$nuevaconsulta = "SELECT name,lastname  FROM alumn WHERE name='".$_SESSION["s_usuario"]."'";
$nuevoresultado= mysqli_query($conex,$nuevaconsulta);
?>


<div class="container" style="padding: 50px;">
  <center><h2>REGISTRO DETALLADO DE ASISTENCIAS  </h2></center><br>

<!--inicio del nombre del alumn -->
 <?php while($row = mysqli_fetch_array($nuevoresultado)){?>Estudiante: <b> <?php echo filtrado($row['lastname']).'&nbsp'.($row['name']);?>               </b> 
     <?php 
}
?>
<!--fin del nombre del alumno -->
<br><br>
 <!--INICIO PARA IMPRIMIR -->
 <a class="btn btn-primary" href="pdf/Asistencias.php" target="_blank" style="display:block;
margin:auto;"><i class="fa fa-download" data-toggle="modal" data-target="#miModal"></i> Descargar archivo PDF</a><br><br>
  


<!--FIN DE IMPRIMIR -->
<table class="table table-dark table-striped " style="border: #000000 1px solid">
    <thead class="text-center">
      <tr >
        <th style="background-color: #000000;color:#F00202;">CODIGO</th>
        <th style="background-color: #000000;color:#F00202;">FECHA DE REGISTRO</th>
         <th style="background-color: #000000;color:#F00202;">REGISTRO</th>  
      </tr>
    </thead>
    <tbody class="text-center" >
        <?php
while($fila = mysqli_fetch_array($resultado))
{
?>
      <tr >
        <td style="background-color: #000000;color:#F00202;"><?php echo filtrado($fila['ID']);?></td>
        <td style="border-color: #000000 "><h6> <?php echo filtrado($fila['FECHA']);?></h6> </td>
        <td style="background-color: #000000;color:#F00202; "><h6> <B><?php echo filtrado($fila['REGISTRO']);?></B> </h6></td> 
      <?php
}
?>
    </tbody>
  </table>
</div>





