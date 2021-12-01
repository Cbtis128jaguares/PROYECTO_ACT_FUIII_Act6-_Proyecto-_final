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

$sql = "UPDATE `sucursal` SET `nombre_sucursal`='$nombre_sucursal',`direccion_sucursal`='$direccion_sucursal',`ciudad`='$ciudad',`telefono_sucursal`='$telefono_sucursal',`ventas`='$ventas',`num_empleados`='$num_empleados',`articulos`='$articulos' WHERE codigo = '$codigo'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: sucursal.php");
} else {

}
?>