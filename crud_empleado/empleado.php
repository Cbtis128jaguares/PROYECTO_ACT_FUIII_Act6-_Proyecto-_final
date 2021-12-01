<?php 

include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM empleado";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Empleados de la Gasolinería</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3">
                <h1>Ingrese datos de empleados</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre completo del empleado">
                                    <input type="text" class="form-control mb-3" name="codigo_id" placeholder="Identificación">
                                    <input type="text" class="form-control mb-3" name="turno" placeholder="Turno">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="sucursal" placeholder="Sucursal en la que labora">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección de residencia">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad del Empleado">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Ramirez_Alvarado_Gasolineria/index.php" class="btn btn-primary">regresar</a></li>
                                </form>
                </div>
                <div class="col-md-8">
                <h1>Empleados</h1>
                <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>ID</th>
                                        <th>Turno</th>
                                        <th>Telefono</th>
                                        <th>Sucursal</th>
                                        <th>Direccion</th>
                                        <th>Edad</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['codigo_id']?></th>
                                                <th><?php  echo $row['turno']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['sucursal']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['edad']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['codigo_id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['codigo_id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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