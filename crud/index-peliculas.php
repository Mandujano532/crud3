<?php
include("conexion.php");
$con = connection();

$sql = "SELECT * FROM peliculas p INNER JOIN productores r  ON p.productor_id = r.id INNER JOIN generos g  ON p.genero_id = g.id";


$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>peliculas CRUD</title>
</head>
<body>
       <h2>Peliculas Registradas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Productor</th>
                    <th>Genero</th>
                    <th>Stock</th>
                    <th>Slug</th>
                    <th><a href="index.php" class="btn btn-outline-primary" >Volver</a></th>
                    <th><a href="peliculas.php" class="btn btn-outline-secondary" >Agregar</a></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_p'] ?></th>
                        <th><a href="show_pelicula.php?id_p=<?= $row['id_p'] ?>" ><?= $row['titulo'] ?></a></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['nombres'] ?></th>
                        <th><?= $row['stock'] ?></th>
                        <th><?= $row['slug'] ?></th>
                        <th><a href="actualizar_pelicula.php?id=<?= $row['id_p'] ?>" class="btn btn-success">Editar</a></th>
                        <th><a href="eliminar_pelicula.php?id=<?= $row['id_p'] ?>" class="btn btn-danger">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
</body>

</html>