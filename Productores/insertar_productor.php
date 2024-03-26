<?php
include("conexion.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];



$sql = "INSERT INTO productores VALUES('$id','$nombre','$apellido')";
$query = mysqli_query($con, $sql);

if($query){
   
    Header("Location: index-productores.php");

}else{

}

?>