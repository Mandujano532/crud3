<?php

include("conexion.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$sql="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', direccion='$direccion', telefono='$telefono' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-usuarios.php");
}else{

}

?>