<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM articulos WHERE codigo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="codigo" value="<?php echo $row['codigo']  ?>">

                                    <input type="text" class="form-control mb-3" name="id_articulo" placeholder="Codigo del articulo">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio del articulo">
                                    <input type="text" class="form-control mb-3" name="tipo_articulo" placeholder="Descripción del articulo">
                                    <input type="text" class="form-control mb-3" name="tipo_gasolina" placeholder="Tipo de gasolinaa">
                                    <input type="text" class="form-control mb-3" name="distribuidor" placeholder="Distribuidor">
                                    <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad">
                                    <input type="text" class="form-control mb-3" name="sucursal" placeholder="Sucursal">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>