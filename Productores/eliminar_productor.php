<?php

include("conexion.php");
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM productores WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index-productores.php");
}else{

}

?>