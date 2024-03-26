<?php

include("conexion.php");
$con = connection();

$id=$_POST["id"];
$nombre = $_POST['nombres'];
$descripcion = $_POST['descripcion'];


$sql="UPDATE generos SET nombres='$nombre', descripcion='$descripcion' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-genero.php");
}else{

}

?>