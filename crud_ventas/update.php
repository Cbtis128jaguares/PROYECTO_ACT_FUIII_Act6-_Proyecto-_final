<?php
include("conexion.php");
$con=conectar();

$litros=$_POST['litros'];
$precio=$_POST['precio'];
$tipo_gasolina=$_POST['tipo_gasolina'];
$sucursal=$_POST['sucursal'];
$calidad=$_POST['calidad'];
$tipo_de_pago=$_POST['tipo_de_pago'];
$venta_total=$_POST['venta_total'];
$codigo=$_POST['codigo'];

$sql = "UPDATE `ventas` SET `litros`='$litros',`precio`='$precio',`tipo_gasolina`='$tipo_gasolina',`sucursal`='$sucursal',`calidad`='$calidad',`tipo_de_pago`='$tipo_de_pago',`venta_total`='$venta_total' WHERE codigo = '$codigo'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: ventas.php");
} else {

}
?>