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

$sql = "UPDATE `empleado` SET `nombre`='$nombre',`codigo_id`='$codigo_id',`turno`='$turno',`telefono`='$telefono',`sucursal`='$sucursal',`direccion`='$dirección',`edad`='$edad' WHERE codigo_id = '$codigo_id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
} else {

}
?>