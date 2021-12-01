<?php 

include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM articulos";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Articulos de la Gasolinería</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                <h1>Ingrese datos del articulo</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_articulo" placeholder="Codigo del articulo">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio del articulo">
                                    <input type="text" class="form-control mb-3" name="tipo_articulo" placeholder="Descripción del articulo">
                                    <input type="text" class="form-control mb-3" name="tipo_gasolina" placeholder="Tipo de gasolinaa">
                                    <input type="text" class="form-control mb-3" name="distribuidor" placeholder="Distribuidor">
                                    <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad">
                                    <input type="text" class="form-control mb-3" name="sucursal" placeholder="Sucursal">
                                    <input type="text" class="form-control mb-3" name="codigo" placeholder="Numero de consulta">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Ramirez_Alvarado_Gasolineria/index.php" class="btn btn-primary">regresar</a></li>
                                </form>
                </div>
                <div class="col-md-8">
                <h1>Registro de articulos</h1>
                <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo del articulo</th>
                                        <th>Precio del articulo</th>
                                        <th>Descripción del articulo</th>
                                        <th>Tipo de gasolina</th>
                                        <th>Distribuidor</th>
                                        <th>Ciudad</th>
                                        <th>Sucursal</th>
                                        <th>Consulta</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_articulo']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['tipo_articulo']?></th>
                                                <th><?php  echo $row['tipo_gasolina']?></th>
                                                <th><?php  echo $row['distribuidor']?></th>
                                                <th><?php  echo $row['ciudad']?></th>
                                                <th><?php  echo $row['sucursal']?></th>
                                                <th><?php  echo $row['codigo']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                </div>
            </div>
        </div>
    </body>
</html>