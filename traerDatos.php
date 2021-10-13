<?php
include("conexion.php");

$consulta = mysqli_query($conexion, "SELECT usuario.Nombre, usuario.Correo, usuario.Telefono, sangre.tiposangre FROM usuario INNER JOIN sangre ON usuario.SANid = sangre.SANid");
mysqli_set_charset($conexion, 'utf8');

$usuario=array();
 while($row = mysqli_fetch_array($consulta)){
    $Nombre=$row['Nombre'];
    $Correo=$row['Correo'];
    $Telefono=$row['Telefono'];
    $tiposangre=$row['tiposangre'];

    $usuario[]=array('Nombre'=>$Nombre, 'Correo'=>$Correo,'Telefono'=>$Telefono, 'tiposangre'=>$tiposangre);
 }
 $json = json_encode($usuario);
 echo $json;
 
?>