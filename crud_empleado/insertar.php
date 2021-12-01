<?php 
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$codigo_id=$_POST['codigo_id'];
$turno=$_POST['turno'];
$telefono=$_POST['telefono'];
$sucursal=$_POST['sucursal'];
$direccion=$_POST['direccion'];
$edad=$_POST['edad'];

$sql="INSERT INTO empleado VALUES ('$nombre','$codigo_id','$turno','$telefono','$sucursal','$direccion','$edad')";
$query=mysqli_query($con,$sql);

if ($query) {
    header("location: empleado.php");
}else{

}

?>