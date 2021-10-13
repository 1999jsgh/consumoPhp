<?php

include("conexion.php");
$data = json_decode(file_get_contents('php://input'), true);

$USUid=$data['USUid'];
$Nombre=$data['Nombre'];
$Correo=$data['Correo'];
$Telefono=$data['Telefono'];
$SANid=$data['SANid'];

//print_r($data);

//$Correo = $_POST['Correo'];
////////////////////////////////
if (isset($Correo)){    
$consulta = mysqli_query($conexion, "UPDATE `usuario` SET `USUid`='$USUid',`Nombre`='$Nombre',`Correo`='$Correo',`Telefono`='$Telefono',`SANid`='$SANid' WHERE USUid='$USUid'");
mysqli_set_charset($conexion, 'utf8'); 

//print_r($consulta);

$usuario=array();
while($row = mysqli_fetch_array($consulta)){
    $Nombre=$row['Nombre'];
    $Correo=$row['Correo'];
    $Telefono=$row['Telefono'];
    $SANid=$row['SANid'];

    $usuario[]=array('Nombre'=>$Nombre, 'Correo'=>$Correo,'Telefono'=>$Telefono, 'SANid'=>$SANid);

}
$json = json_encode($usuario);
echo $json;

}else{
    echo "esta vacio";

}
?>