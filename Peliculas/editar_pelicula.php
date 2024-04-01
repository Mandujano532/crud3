<?php
include("conexion.php");
$con = connection();
$id_p=$_POST["id_p"];
$titulo = $_POST['titulo'];
$productor = $_POST['productor_id'];
$genero = $_POST['genero_id'];
$stock = $_POST['stock'];
$slug = null;
//funcion para quitar todas las ' caracteres espciales
function generateSlug($slug) {
    $slug = str_replace(
        array('á','à','ä','â','ª','Á','À','Â','Ä'),
        array('a','a','a','a','a','A','A','A','A'),
        $slug
    );
    $slug = str_replace(
        array('é','è','ë','ê','É','È','Ê','Ë'),
        array('e','e','e','e','E','E','E','E'),
        $slug
    );
    $slug = str_replace(
        array('í','ì','ï','î','Í','Ì','Ï','Î'),
        array('i','i','i','i','I','I','I','I'),
        $slug
    );
    $slug = str_replace(
        array('ó','ò','ö','ô','Ó','Ò','Ö','Ô'),
        array('o','o','o','o','O','O','O','O'),
        $slug
    );
    $slug = str_replace(
        array('ú','ù','ü','û','Ú','Ù','Û','Ü'),
        array('u','u','u','u','U','U','U','U'),
        $slug
    );
   
    $slug = preg_replace('/[^a-zA-Z0-9\s]/', '', $slug);
    $slug = strtolower(trim($slug));
    $slug = preg_replace('/\s+/', '-', $slug);
    return $slug;
}
$slug = $slug = $_POST['titulo'];
$slug1 = generateSlug($slug);
$sql="UPDATE peliculas SET titulo='$titulo', productor_id='$productor', genero_id='$genero', stock='$stock', slug='$slug1' WHERE id_p='$id_p'";
$query = mysqli_query($con, $sql);
if($query){
    Header("Location: index-peliculas.php");
}
?>