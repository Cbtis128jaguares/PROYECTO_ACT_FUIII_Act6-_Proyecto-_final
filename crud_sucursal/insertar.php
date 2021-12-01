<?php 
include("conexion.php");
$con=conectar();

$nombre_sucursal=$_POST['nombre_sucursal'];
$direccion_sucursal=$_POST['direccion_sucursal'];
$ciudad=$_POST['ciudad'];
$telefono_sucursal=$_POST['telefono_sucursal'];
$ventas=$_POST['ventas'];
$num_empleados=$_POST['num_empleados'];
$articulos=$_POST['articulos'];
$codigo=$_POST['codigo'];

$sql="INSERT INTO sucursal VALUES ('$nombre_sucursal','$direccion_sucursal','$ciudad','$telefono_sucursal','$ventas','$num_empleados','$articulos','$codigo')";
$query=mysqli_query($con,$sql);

if ($query) {
    header("location: sucursal.php");
}else{

}

?>