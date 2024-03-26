<?php

include("conexion.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$sql="UPDATE productores SET nombre='$nombre', apellido='$apellido' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-productores.php");
}else{

}

?>