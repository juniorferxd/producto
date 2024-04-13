<?php
session_start();

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$name = (isset($_POST['name'])) ? $_POST['name'] : '';

//$pass = md5($name); //encripto la clave enviada por el email para compararla con la clava encriptada y almacenada en la BD

$consulta = "SELECT email,name,lastname FROM alumn WHERE email='$email' AND name='$name' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $name;
}else{
    $_SESSION["s_usuario"] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;

