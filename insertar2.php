<?php 
include("conexion.php");
$con=conectar();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Insertar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="insertar.php" method="POST">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                <input type="number" class="form-control mb-3" name="precio" placeholder="precio">
                                <input type="number" class="form-control mb-3" name="cantidad" placeholder="cantidad">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Insertar">
                    </form>
                    
                </div>
    </body>
</html>