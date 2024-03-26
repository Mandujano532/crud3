<?php
include("conexion.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];


$sql = "INSERT INTO usuarios VALUES('$id','$nombre','$apellido','$direccion','$telefono')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-usuarios.php");

}else{

}

?>