<?php 
include("conexion.php");
$con=conectar();

$id_articulo=$_POST['id_articulo'];
$precio=$_POST['precio'];
$tipo_articulo=$_POST['tipo_articulo'];
$tipo_gasolina=$_POST['tipo_gasolina'];
$distribuidor=$_POST['distribuidor'];
$ciudad=$_POST['ciudad'];
$sucursal=$_POST['sucursal'];
$codigo=$_POST['codigo'];

$sql="INSERT INTO articulos VALUES ('$id_articulo','$precio','$tipo_articulo','$tipo_gasolina','$distribuidor','$ciudad','$sucursal','$codigo')";
$query=mysqli_query($con,$sql);

if ($query) {
    header("location: articulos.php");
}else{

}

?>