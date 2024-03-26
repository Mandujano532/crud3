<?php 
    include("conexion.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM usuarios WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="form">
            <form action="editar_usuarios.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">
            <input type="text" name="apellido" placeholder="Apellidos" value="<?= $row['apellido']?>">
            <input type="text" name="direccion" placeholder="Direccion" value="<?= $row['direccion']?>">
            <input type="tel" name="telefono" placeholder="Telefono" value="<?= $row['telefono']?>">


                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>