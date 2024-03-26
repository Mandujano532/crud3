<?php
include("conexion.php");
$con = connection();

$id = null;
$nombre = $_POST['nombres'];
$descripcion = $_POST['descripcion'];
$confirm ="genero insertado correctamente";


$sql = "INSERT INTO generos VALUES('$id','$nombre','$descripcion')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-genero.php");
}else{

}

?>