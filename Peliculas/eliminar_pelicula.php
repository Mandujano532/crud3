<?php

include("conexion.php");
$con = connection();

$id_p=$_GET["id"];

$sql="DELETE FROM peliculas WHERE id_p='$id_p'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-peliculas.php");
}else{

}

?>