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

$sql="INSERT INTO ventas VALUES ('$litros','$precio','$tipo_gasolina','$sucursal','$calidad','$tipo_de_pago','$venta_total','$codigo')";
$query=mysqli_query($con,$sql);

if ($query) {
    header("location: ventas.php");
}else{

}

?>