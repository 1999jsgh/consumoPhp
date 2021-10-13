<?php
include("conexion.php");
$data = json_decode(file_get_contents('php://input'), true);
$id=$data['USUid'];

$consulta = mysqli_query($conexion, "DELETE FROM usuario WHERE USUid='$id'");

?>