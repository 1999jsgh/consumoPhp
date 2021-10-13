<?php
include("conexion.php");
$data = json_decode(file_get_contents('php://input'), true);
//print_r($data);
$Nombre=$data['Nombre'];
$Correo=$data['Correo'];
$Telefono=$data['Telefono'];
$tiposangre=$data['tiposangre'];

if (isset($Correo)){    

 $consulta = mysqli_query($conexion, "INSERT INTO `usuario`(`Nombre`, `Correo`, `Telefono`, `SANid`)
  VALUES ('$Nombre','$Correo','$Telefono','$tiposangre')");
 if($consulta==1)echo "Registro Exitoso";

}else{
    echo "esta vacio";
}
?>