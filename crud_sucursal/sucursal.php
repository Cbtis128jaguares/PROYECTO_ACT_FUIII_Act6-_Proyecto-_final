<?php 

include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM sucursal";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sucursales de la Gasolinería</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                <h1>Ingrese datos de las sucursales</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre_sucursal" placeholder="Nombre de la sucursal">
                                    <input type="text" class="form-control mb-3" name="direccion_sucursal" placeholder="Dirección de la sucursal">
                                    <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad">
                                    <input type="text" class="form-control mb-3" name="telefono_sucursal" placeholder="Telefono de la sucursal">
                                    <input type="text" class="form-control mb-3" name="ventas" placeholder="Ventas">
                                    <input type="text" class="form-control mb-3" name="num_empleados" placeholder="Numero de empleados">
                                    <input type="text" class="form-control mb-3" name="articulos" placeholder="Articulos">
                                    <input type="text" class="form-control mb-3" name="codigo" placeholder="Consulta">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Ramirez_Alvarado_Gasolineria/index.php" class="btn btn-primary">regresar</a></li>
                                </form>
                </div>
                <div class="col-md-8">
                <h1>Sucursales</h1>
                <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre de la sucursal</th>
                                        <th>Dirección de la sucursal</th>
                                        <th>Ciudad</th>
                                        <th>Telefono de la sucursal</th>
                                        <th>Ventas</th>
                                        <th>Numero de empleados</th>
                                        <th>Articulos</th>
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
                                                <th><?php  echo $row['nombre_sucursal']?></th>
                                                <th><?php  echo $row['direccion_sucursal']?></th>
                                                <th><?php  echo $row['ciudad']?></th>
                                                <th><?php  echo $row['telefono_sucursal']?></th>
                                                <th><?php  echo $row['ventas']?></th>
                                                <th><?php  echo $row['num_empleados']?></th>
                                                <th><?php  echo $row['articulos']?></th>
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